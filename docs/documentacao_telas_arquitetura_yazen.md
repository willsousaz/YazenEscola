# Documentação Arquitetural e Especificação de Telas — Yazen — Sistema de Gestão Escolar (cliente: SEMED Xinguara)

> **Destinatário:** Claude (Anthropic) / Equipe de Engenharia e Produto  
> **Objetivo:** Fornecer o mapa técnico, funcional e de dados completo de todas as interfaces desenvolvidas no projeto, permitindo a geração de código (Laravel / Livewire / Filament / Tailwind CSS, Flutter), schemas de banco de dados (PostgreSQL), API REST e lógica de negócio.
> **Diagramas:** `diagramas/01_fluxo_perfis.mmd` (perfis e módulos), `diagramas/02_erd.mmd` (modelo de dados completo), `diagramas/03_fluxo_grade.mmd` (geração de horário). Visualização: `diagramas/visualizar.html`.

---

## 1. Visão Geral da Arquitetura & Diretrizes de Design

### 1.1 Stack Tecnológica
- **Backend & Web:** Laravel 12 (PHP 8.3+), PostgreSQL 16+ com PostGIS (transporte escolar e zoneamento rural/urbano), Redis (filas, cache, sessões).
- **Telas administrativas / CRUDs:** Filament (formulários, tabelas, filtros, exportação) com tema nas cores institucionais.
- **Telas customizadas (dashboards, portal do responsável, chamada, notas, grade, transparência):** Livewire + Blade + Tailwind CSS, reaproveitando o markup exportado do Stitch como base de componentes.
- **Mobile (fase 2):** Flutter consumindo a API do Laravel (Sanctum) — app do professor (chamada/notas), monitor de transporte e responsável.
- **Geração de horário (fase 2):** microserviço Python com Google OR-Tools (CP-SAT) em container próprio; o Laravel envia os insumos em JSON e recebe a grade proposta.
- **Segurança & Conformidade:** sessão Laravel + MFA TOTP; perfis com escopo por escola (`spatie/laravel-permission`, 1 usuário → N perfis em N escolas); Policies/global scopes para isolamento por escola; trilha de auditoria LGPD com `spatie/laravel-activitylog` (inclusive visualização/exportação de dados sensíveis).
- **Offline-First:** SQLite local no app Flutter com fila de sincronização em background e resolução de conflitos por timestamp.
- **Infraestrutura:** Docker no servidor Hetzner, gerenciado via Easypanel (containers: app Laravel, worker de filas, PostgreSQL, Redis, solver Python). Deploy automático a partir do GitHub.
- **Conformidade Censo Escolar:** modelo de dados alinhado ao leiaute de importação do Educacenso 2026 (registros 00, 10, 20, 30, 40, 50, 60), com exportação direta do arquivo de migração.

### 1.2 Paleta de Cores e Identidade Visual (Design Tokens SEMEC Xinguara)
- **Primary (Azul Institucional):** `#1E40AF` (blue-800) / `#2563EB` (blue-600) / `#3B82F6` (blue-500)
- **Secondary (Verde Amazônia / Esperança):** `#059669` (emerald-600) / `#10B981` (emerald-500)
- **Warning / Atenção (Alerta Pedagógico):** `#D97706` (amber-600) / `#F59E0B` (amber-500)
- **Danger / Risco Crítico (Evasão & Falhas):** `#DC2626` (red-600) / `#EF4444` (red-500)
- **Backgrounds:** Neutros frios e acessíveis (`#F8FAFC` slate-50, `#F1F5F9` slate-100, `#FFFFFF` pure white).
- **Tipografia:** Inter / Outfit para headings corporativos, legibilidade alta em tabelas numéricas (`font-mono` para notas e médias).

---

## 2. Catálogo Estruturado de Telas por Módulo Funcional

---

### MÓDULO 1: GESTÃO PEDAGÓGICA, FREQUÊNCIA E NOTAS

#### Tela 1: Lançamento de Notas e Avaliações com Recuperação
- **Tipo:** Web Desktop (Dashboard)
- **Usuários:** Professores, Coordenadores Pedagógicos, Secretaria.
- **Objetivo:** Registro detalhado do rendimento trimestral/bimestral dos estudantes.
- **Componentes e Layout:**
  - Filtros superiores: Ano Letivo, Escola, Turma (ex: 8º Ano B), Disciplina (ex: Matemática), Período (1º Bimestre).
  - Tabela de Lançamento de Notas:
    - Coluna Aluno (Avatar, Matrícula, Nome Completo).
    - Colunas de Avaliação **dinâmicas**: cada turma/disciplina/período tem N avaliações configuráveis (nome, peso), ex.: AV1, Prova, Trabalho (0.0 - 10.0).
    - Coluna **Média Parcial** (cálculo aritmético ou ponderado pelos pesos, em tempo real).
    - Coluna Condicional **Recuperação Paralela**: habilitada se a média parcial for menor que a **média de aprovação configurada** para o ano letivo (padrão 6.0).
    - Coluna **Média Final**: fórmula de recuperação **configurável por rede/ano letivo** (ex.: `max(media_parcial, (media_parcial + recuperacao) / 2)` ou substituição de menor nota).
    - Status Badge: *Aprovado* (verde), *Em Recuperação* (amarelo), *Reprovado* (vermelho).
  - Ações rápidas: "Preenchimento Automático", "Salvar Rascunho", "Publicar no Boletim com Trava".

#### Tela 2: Registro Diário de Frequência (Chamada Web)
- **Tipo:** Web Desktop
- **Usuários:** Professores e Secretaria Escolar.
- **Objetivo:** Registro diário de presença por aula/horário.
- **Componentes:**
  - Seletor de data e aula (ex: 1ª Aula - 07:30 às 08:20).
  - Grade de alunos com toggle switch ou botões tri-state: Presente (P), Falta Justificada (FJ), Falta (F).
  - Campo de observação pedagógica individual (ex: "Aluno chegou 20min atrasado").
  - Contador dinâmico: Presença Total (%), Faltas e quorum mínimo legal (75%).

#### Tela 3: Mobile Grade Entry & Single Student Evaluation
- **Tipo:** Mobile Stack (PWA / App Professor)
- **Usuários:** Professores em sala de aula (smartphone).
- **Objetivo:** Duas variantes para lançamento rápido com uso de uma única mão:
  1. *Visão Lista:* Lista compacta de alunos com teclado numérico embutido para inserção rápida de notas.
  2. *Visão Focada por Estudante:* Card detalhado de um aluno com histórico recente, sliders de notas e botão "Avançar para Próximo Aluno".

#### Tela 4: Mobile Swipe Attendance (Chamada por Deslize)
- **Tipo:** Mobile App
- **Usuários:** Professores.
- **Objetivo:** Otimização extrema de tempo em sala de aula.
- **Componentes:**
  - Card central do aluno com foto grande, nome e histórico dos últimos 5 dias.
  - Interação gestual tipo "Tinder/Swipe":
    - Deslizar para a **Direita** ➡️ Marca **Presença**.
    - Deslizar para a **Esquerda** ➡️ Marca **Falta**.
    - Toque duplo ou swipe para cima ➡️ Marca Falta Justificada com foto de atestado.
  - Indicador de progresso (ex: "Aluno 14 de 32").

#### Tela 5: Grade Horária Drag-and-Drop (Timetable)
- **Tipo:** Web Desktop Interativo
- **Usuários:** Diretores e Supervisores Pedagógicos.
- **Objetivo:** Construção visual da matriz curricular e alocação de salas e professores.
- **Componentes:**
  - Grade matricial: Dias da Semana (Segunda a Sexta) x Horários das Aulas (1ª à 6ª aula).
  - Painel lateral com "Cards de Disciplinas e Professores Disponíveis".
  - Regras de validação em tempo real: detecção automática de conflito de horário (professor alocado em duas salas simultaneamente), limite de aulas geminadas, carga horária semanal e tempo de deslocamento entre escolas.
  - **Fase 1:** montagem manual com validação. **Fase 2:** geração automática via solver (OR-Tools CP-SAT).
  - **Fluxo de aceite e travas** (ver `diagramas/03_fluxo_grade.mmd`):
    1. Solver gera a grade → status *proposta*.
    2. Cada professor aceita ou contesta (registrando indisponibilidade).
    3. Aulas aceitas → *travadas*; o solver refaz só as demais, com mínima alteração.
    4. Coordenador pode editar manualmente (validação em tempo real); aula editada → *travada_manual*.
    5. Todos aceitaram → grade *publicada* (versão congelada).
    6. Se as travas tornarem o problema inviável, o sistema mostra quais travas conflitam.
  - **Professores em mais de uma escola:** modo de geração configurável pela SEMED — *sequencial por prioridade de escolas* (travas de uma escola viram indisponibilidade nas seguintes) ou *integrado* (rede inteira de uma vez); dias fixos por escola opcionais na lotação; conflitos entre escolas vão para arbitragem da SEMED.

#### Tela 5.1: Diário de Classe
- **Tipo:** Web Desktop & Mobile (App Professor)
- **Usuários:** Professores (registro), Coordenadores (aprovação).
- **Objetivo:** Registro legal obrigatório de cada aula ministrada.
- **Componentes:**
  - Por aula (turma/disciplina/data/horário): conteúdo ministrado, metodologia, observações.
  - A chamada (Tela 2 / Tela 4) é vinculada à aula registrada no diário.
  - Status: aberto → fechado (professor) → aprovado (coordenação).
  - Relatórios: dias letivos e carga horária cumprida por disciplina, impressão do diário para assinatura ao fim do período.

#### Tela 6: Plano de Intervenção Pedagógica (PIP)
- **Tipo:** Web Desktop
- **Usuários:** Orientadores Pedagógicos, Psicólogos Escolares e Assistentes Sociais.
- **Objetivo:** Gestão individualizada de alunos com baixo rendimento ou risco de abandono.
- **Componentes:**
  - Perfil do Estudante com cálculo de Score de Risco da IA (ex: 85% - Alto Risco).
  - Cards de Intervenções Ativas (Apoio Psicológico, Reforço em Matemática, Visita Domiciliar) com data de entrega e barra de progresso.
  - Linha do tempo de Histórico de Ações (Atestados, chamadas aos pais, entrevistas sociais).
  - Bloco de Anotações Pedagógicas confidenciais com salvamento automático.

---

### MÓDULO 2: GESTÃO ESCOLAR, MATRÍCULAS E CADASTROS MUNICIPAIS

#### Tela 7: Admin Overview Dashboard (Painel Central da SEMED)
- **Tipo:** Web Dashboard
- **Usuários:** Secretário de Educação, Gestores Municipais e Auditores.
- **Objetivo:** Visão consolidada em nível de rede municipal.
- **Componentes:**
  - Métricas macro: Total de Alunos Ativos, Unidades Escolares, Total de Docentes, Taxa Média de Frequência da Rede (%).
  - Gráfico de Tendência de Evasão comparando com metas municipais.
  - Alertas prioritários de infraestrutura, falta de insumos de merenda ou anomalias de presença.
  - Mapa temático de Xinguara com distribuição de escolas urbanas e rurais.

#### Tela 8: Diretório de Unidades Escolares (Municipal School Directory)
- **Tipo:** Web Desktop
- **Componentes:** Tabela/Grade com busca avançada por zona (Urbana/Rural), filtros por tipologia (Creche, Fundamental I, Fundamental II, EJA), status de alvará sanitário, capacidade de alunos vs. matrículas ativas.

#### Tela 9: Perfil Detalhado da Unidade Escolar (School Unit Profile)
- **Tipo:** Web Dashboard
- **Componentes:**
  - Dados cadastrais (Código INEP, Endereço, Nome do Diretor, Telefone, E-mail).
  - Indicadores específicos da unidade: IDEB da escola vs. meta, Índice de Evasão, Frequência dos Funcionários.
  - Inventário de espaços físicos: Salas climatizadas, laboratório de informática, quadra poliesportiva, biblioteca e refeitório.

#### Tela 10: Formulário de Matrícula em Múltiplas Etapas (Multi-step Enrollment)
- **Tipo:** Web Desktop & Mobile Stack
- **Usuários:** Secretaria Escolar e Pais/Responsáveis.
- **Fluxo Step-by-Step:**
  - **Etapa 1: Dados do Aluno:** Nome civil e social, CPF/Certidão de nascimento, data de nascimento, filiação, raça/cor.
  - **Etapa 2: Endereço & Zoneamento:** CEP, rua, bairro, zona (se rural: identificação da vicinal/linha), geolocalização para cálculo de vaga na escola mais próxima.
  - **Etapa 3: Saúde e Educação Especial:** Alergias, restrições alimentares, laudos médicos, CID, necessidade de cuidador ou Atendimento Educacional Especializado (AEE).
  - **Etapa 4: Documentação Digitalizada:** Upload de certidão, comprovante de residência e carteira de vacinação com OCR e validação prévia.
  - **Etapa 5: Confirmação & Alocação de Turma:** Emissão automática de Comprovante de Matrícula com QR Code.

#### Tela 11: Gestão de Pessoal e Lotação de Funcionários
- **Tipo:** Web Desktop
- **Componentes:** Cadastro completo do quadro funcional (Efetivos, Contratados, Comissionados), carga horária de contrato (20h, 40h), matriz de lotação por escola e turma, registro de afastamentos, atestados e licenças prêmio.

#### Tela 11.1: Cadastro de Servidor / Professor
- **Tipo:** Web Desktop (Filament)
- **Usuários:** RH da SEMED (cadastro e vínculo); Direção da escola (lotação em turmas).
- **Regra:** antes de cadastrar, buscar a pessoa por CPF, NIS ou nome + data de nascimento (cadastro único de `pessoas`; a mesma pessoa pode ser servidor e responsável).
- **Abas / Seções:**
  1. **Dados pessoais (Censo reg. 30):** nome, nome social, CPF, ID INEP, data de nascimento, sexo, cor/raça, povo indígena, filiação, nacionalidade, município de nascimento, endereço/CEP, zona de residência, localização diferenciada, e-mail, telefone.
  2. **Deficiência / transtornos (Censo reg. 30):** deficiências, TEA, altas habilidades e transtornos de aprendizagem (lista oficial INEP).
  3. **Formação (Censo reg. 30):** maior escolaridade, tipo de ensino médio, até 3 cursos superiores (código do curso, IES, ano), áreas/componentes de habilitação (até 3), até 6 pós-graduações (tipo, área, ano), formação continuada (lista oficial, mín. 80h).
  4. **Vínculo funcional (RH):** matrícula funcional, cargo, situação funcional (concursado, temporário, terceirizado, CLT), data de admissão, carga horária contratual.
  5. **Lotações:** escola, função (docente, gestor, auxiliar, intérprete de Libras, profissional de apoio), carga horária, período, dias fixos por escola (opcional); para gestor: cargo e critério de acesso (Censo reg. 40).
  6. **Turmas e componentes (Censo reg. 50):** turmas/disciplinas em que atua, derivadas da lotação.
  7. **Disponibilidade:** dias/horários indisponíveis (insumo da geração de horário).
  8. **Afastamentos e licenças.**
  9. **Acesso:** criação do usuário e perfis por escola.

#### Tela 12: Registro e Acompanhamento de Frequência de Servidores
- **Tipo:** Web Desktop & Mobile
- **Componentes:** Ponto eletrônico com validação biométrica/geofencing, dashboard de absenteísmo de servidores, solicitação de abono de faltas e justificativas médicas.

---

### MÓDULO 3: INTELIGÊNCIA ARTIFICIAL, PREDIÇÃO DE EVASÃO E BI

#### Tela 13: Painel de Predição de Evasão Avançado com IA (Predictive Analytics & BI)
- **Tipo:** Web Dashboard
- **Objetivo:** Algoritmo preditivo de Machine Learning que identifica estudantes com propensão ao abandono escolar antes que a evasão ocorra.
- **Componentes:**
  - Matriz de Risco (Baixo, Médio, Crítico).
  - Principais fatores de ponderação: Queda abrupta de notas, sequência de faltas não justificadas em sextas e segundas, histórico de vulnerabilidade socioeconômica (Cadastro Único / Bolsa Família), distância percorrida no transporte escolar.
  - Simulador de Ações: "Efeito esperado de visitas domiciliares na taxa de retenção".

#### Tela 14: Relatório de Evasão Escolar por Região
- **Tipo:** Web Standard
- **Componentes:**
  - Seletor de Ano Letivo, Nível de Ensino e Bairros/Distritos (ex: Distrito de Itaqueral, Bairro Novo Horizonte, Sede Urbana).
  - Gráfico comparativo de evolução trimestral Urbana vs. Rural.
  - Gráfico de barras horizontais com principais motivos declarados: Mudança de domicílio (42%), Trabalho infantil / necessidade de renda (28%), Transporte de difícil acesso (18%), Desmotivação (12%).
  - Tabela rankeada de escolas críticas com exportação para PDF e CSV.

#### Tela 15: AI Management Assistant (Mobile)
- **Tipo:** Mobile App
- **Usuários:** Diretores e Coordenadores.
- **Componentes:** Interface conversacional e em cards com insights proativos gerados por LLM:
  - *"Atenção: 4 alunos da turma 9º C ultrapassaram o limite de 20% de faltas nesta semana."*
  - Sugestão imediata com um clique: "Agendar Reunião com Responsáveis" ou "Disparar SMS de Alerta".

---

### MÓDULO 4: COMUNICAÇÃO, FAMÍLIA E COMUNIDADE

#### Tela 16: Portal do Responsável (Dashboard & Serviços)
- **Tipo:** Web & Mobile
- **Usuários:** Pais e Responsáveis Legais.
- **Componentes:**
  - Seletor de filhos matriculados (caso tenha mais de um na rede).
  - Resumo de notas recentes, card de frequência consolidada do mês.
  - Calendário de provas, tarefas de casa e avisos gerais da escola.
  - Solicitação de declaração de matrícula online em 1 clique.

#### Tela 17: Boletim Escolar Mobile (Report Card)
- **Tipo:** Mobile Stack
- **Componentes:** Visualização limpa e amigável para smartphones das notas bimestrais, faltas por matéria, gráficos de radar de desempenho por área do conhecimento e parecer descritivo do professor.

#### Tela 18: Centro de Comunicação e Chat Escola-Família
- **Tipo:** Web Desktop & Mobile
- **Componentes:**
  - Mensageria instantânea segmentada por canal: Turma, Secretaria, Professores.
  - Disparo de comunicados em massa com confirmação de leitura ("Confirmação de Ciência").
  - Templates pré-formatados com suporte a notificações push e integração WhatsApp/SMS para responsáveis sem pacote de dados ativo.

#### Tela 19: Convocação de Reuniões de Pais com Integração ao Calendário
- **Tipo:** Web Dashboard
- **Componentes:** Agendamento de reuniões individuais ou coletivas, sincronização com Dias Pedagógicos homologados pela SEMED, controle de presença dos responsáveis na reunião.

---

### MÓDULO 5: LOGÍSTICA OPERACIONAL (TRANSPORTE, MERENDA E PATRIMÔNIO)

#### Tela 20: Gestão de Transporte Escolar e Rotas
- **Tipo:** Web Dashboard
- **Componentes:**
  - Cadastro de frota própria e terceirizada (Ônibus, micro-ônibus, vans, barcos escolares).
  - Traçado e otimização de rotas georreferenciadas nas vicinais rurais de Xinguara.
  - Gestão de motoristas, CNH, manutenções preventivas e consumo de combustível.

#### Tela 21: Mobile Monitor de Transporte (Bus Attendance)
- **Tipo:** Mobile App
- **Usuários:** Monitores de transporte escolar.
- **Componentes:** Lista de alunos por ponto de embarque/desembarque, confirmação de subida e descida com timestamp e botão SOS para acionamento de pane mecânica ou emergência.

#### Tela 22: Gestão de Estoque e Merenda Escolar (PNAE)
- **Tipo:** Web Desktop & Mobile Kitchen
- **Componentes:**
  - Planejamento de cardápios nutricionais balanceados por faixa etária.
  - Controle de despensa e estoque de alimentos perecíveis e não perecíveis (FEFO/FIFO).
  - Registro de compras da Agricultura Familiar conforme exigência do FNDE.
  - Alerta de validade e descarte controlado.

#### Tela 23: Inventário de Patrimônio e Equipamentos (Asset Inventory)
- **Tipo:** Web Desktop & Mobile Scanner
- **Componentes:** Leitor de código de barras / QR Code via câmera mobile para tombamento de computadores, mesas, aparelhos de ar-condicionado e projetores; controle de termos de cautela e transferências entre escolas.

---

### MÓDULO 6: EDUCAÇÃO INCLUSIVA, BIBLIOTECA E SERVIÇOS DIGITAIS

#### Tela 24: Módulo de Educação Especial e Inclusiva (AEE / Sala de Recursos)
- **Tipo:** Web Dashboard & Mobile Tracker
- **Componentes:**
  - Elaboração do **PDI** (Plano de Desenvolvimento Individualizado).
  - Acompanhamento do professor de apoio e profissionais multidisciplinares (fonoaudiólogos, terapeutas).
  - Registro diário de evolução cognitiva, motora e comportamental.

#### Tela 25: Gestão de Bibliotecas e Empréstimo de Livros
- **Tipo:** Web & Mobile Student Library
- **Componentes:** Catálogo do acervo municipal (ISBN, título, autor), controle de empréstimos, devoluções, multas pedagógicas (doação de gibis) e histórico de leituras por aluno.

#### Tela 26: Emissão e Validação de Histórico e Certificados Digitais
- **Tipo:** Web Portal
- **Componentes:**
  - Gerador de Histórico Escolar oficial padronizado com carimbo do CNE/MEC.
  - Assinatura digital padrão ICP-Brasil integrada.
  - Portal público de verificação de autenticidade via hash criptográfico e QR Code para evitar fraudes em transferências.

#### Tela 27: Calendário Escolar Oficial e Feriados Municipais
- **Tipo:** Web Desktop
- **Componentes:** Gestão dos 200 dias letivos e 800 horas mínimas exigidas por lei, marcação de feriados locais de Xinguara, recessos, semanas pedagógicas e conselhos de classe.

---

### MÓDULO 7: GOVERNANÇA, TI, SEGURANÇA E TRANSPARÊNCIA

#### Tela 28: Painel de Segurança e Logs de Auditoria LGPD
- **Tipo:** Web Desktop & Mobile Security
- **Componentes:** Registro imutável de todas as ações no sistema (quem visualizou, alterou ou exportou prontuários e notas), controle de consentimento dos responsáveis, anonimização de dados para exportações estatísticas.

#### Tela 29: Portal da Transparência Pública da Educação
- **Tipo:** Web Standard (Acesso Público sem Login)
- **Componentes:** Dados consolidados abertos para cidadãos, Tribunal de Contas (TCM/PA) e Conselhos Municipais: execução orçamentária do Fundeb, índice de aprovação/reprovação por escola, cardápios da merenda escolar e lista de espera de creches.

#### Tela 30: Módulo de Resiliência e Sincronização Offline (Offline-Sync)
- **Tipo:** Mobile Flow
- **Componentes:** Indicador de status de rede (Online / Offline / Sincronizando), fila de transações pendentes, seletor de dados prioritários para download em cache para uso em escolas rurais sem sinal de celular.

#### Tela 31: Configurações de Integração de APIs e Webhooks
- **Tipo:** Web Dashboard
- **Componentes:** Chaves de API, webhooks para integração com o Censo Escolar (Educacenso/INEP), Secretaria de Fazenda Municipal e sistemas estaduais de educação (SEDUC-PA).

---

## 3. Modelo de Dados (resumo)

> Modelo completo (entidades, campos e relacionamentos): **`diagramas/02_erd.mmd`**.
> Alinhado ao **leiaute de importação do Censo Escolar / Educacenso 2026** (INEP). Tabelas de códigos oficiais (etapas, componentes curriculares, deficiências, cursos superiores, IES, municípios, países, povos indígenas) são importadas das *Tabelas Auxiliares* do INEP via seed, atualizadas a cada ano.

### Princípios
- **Pessoa única (`pessoas`)** — cada ser humano é cadastrado uma vez (CPF, ID INEP e NIS únicos); aluno, servidor e responsável são *papéis* ligados à pessoa. Espelha o registro 30 do Censo.
- **Acesso por papel + escopo** — 1 usuário → N perfis, cada um com escopo de escola (ou rede toda). Permissão de ver dados vem do papel (ex.: aluno matriculado na minha escola), nunca da tabela `pessoas` direto.
- **Regras configuráveis** — média de aprovação, fórmula de recuperação, frequência mínima e tipo de período (bimestre/trimestre) configurados por ano letivo.
- **Dados sensíveis (LGPD)** — NIS, benefício social, laudos/CID com acesso restrito e auditado.

### Grupos de entidades
| Grupo | Entidades | Censo |
|---|---|---|
| Rede e calendário | `ano_letivo`, `periodo`, `etapa`, `escola`, `escola_infraestrutura`, `escola_deslocamento`, `disciplina`, `matriz_curricular`, `horario_slot` | reg. 00 / 10 |
| Pessoas | `pessoa`, `pessoa_deficiencia`, `aluno`, `aluno_recurso_avaliacao`, `responsavel`, `responsavel_aluno` | reg. 30 |
| Servidores | `servidor`, `servidor_formacao`, `servidor_area_conhecimento`, `lotacao`, `lotacao_dias`, `professor_indisponibilidade`, `afastamento` | reg. 30 / 40 |
| Turmas | `turma`, `turma_disciplina` (turma + disciplina + professor), `turma_profissional` | reg. 20 / 50 |
| Matrícula | `matricula`, `matricula_movimentacao`, `matricula_atividade_aee` | reg. 60 / 2ª etapa |
| Diário e avaliação | `diario_aula`, `frequencia`, `regra_avaliacao`, `avaliacao`, `nota` | — |
| Grade horária | `rede_config_grade`, `grade`, `grade_aula`, `grade_aceite`, `grade_conflito_rede` | — |
| Transporte | `rota_transporte`, `ponto_embarque`, `aluno_transporte`, `aluno_transporte_veiculo` | reg. 60 |
| Pedagógico / IA | `risco_evasao`, `plano_intervencao` | — |
| Patrimônio | `patrimonio` | — |
| Acesso e auditoria | `usuario`, `perfil`, `usuario_perfil`, `activity_log` | — |

### Integrações de dados
- **Educacenso (INEP):** exportação do arquivo de migração (1ª etapa — matrícula inicial; 2ª etapa — situação do aluno).
- **Sistema Presença (Bolsa Família):** relatório bimestral de frequência dos alunos beneficiários, via NIS.

---

## 4. Prompt de Inicialização Recomendado para o Claude

> *"Claude, atue como Arquiteto de Software Full-Stack sênior. Você recebeu a especificação completa do **Yazen — Sistema de Gestão Escolar** (cliente: SEMED Xinguara) e os diagramas em `diagramas/`. Desenvolva o projeto em **Laravel 12, PostgreSQL, Filament (telas administrativas), Livewire + Tailwind CSS (telas customizadas, reaproveitando o markup do Stitch)**, com deploy via Docker no Easypanel. Siga o modelo de dados de `diagramas/02_erd.mmd` (pessoa única, alinhado ao Educacenso 2026), a paleta institucional, avaliações e regras de aprovação/recuperação configuráveis, Diário de Classe vinculado à frequência, perfis com escopo por escola e trilha de auditoria LGPD. Construa por fases: (1) cadastros-base, acesso e matrícula; (2) diário, frequência e notas; (3) portal do responsável; (4) demais módulos. Pergunte antes de executar cada etapa."*
