# Yazen — Sistema de Gestão Escolar

Cliente inicial: **SEMED Xinguara (PA)**. "Yazen" é o nome do sistema; Xinguara é o município/cliente.

## Como trabalhar com o usuário
- Usuário é analista de sistemas (retomando a prática). Respostas **diretas**, sem explicações básicas, sem enrolação.
- **Sempre perguntar antes de executar qualquer ação** (criar/alterar arquivos, instalar, commitar, rodar comandos que mudam estado).
- Responder em português.

## Estrutura do repositório
```
docs/                  especificação e diagramas (fonte da verdade funcional)
  documentacao_telas_arquitetura_yazen.md
  diagramas/           01_fluxo_perfis.mmd, 02_erd.mmd, 03_fluxo_grade.mmd, visualizar.html
design/stitch/         77 telas exportadas do Stitch (HTML Tailwind + PNG) — referência visual, não é código de produção
mobile/                Flutter (fase 2)
solver/                Python OR-Tools para geração de horário (fase 2)
```

## Decisões tomadas
- **Stack:** Laravel 12 + PostgreSQL (PostGIS) + Redis; Filament para CRUDs/admin; Livewire + Blade + Tailwind para telas customizadas (reaproveitar markup do Stitch); Flutter no mobile (API via Sanctum); microserviço Python OR-Tools (CP-SAT) para grade horária.
- **Descartados:** Next.js/Node, Supabase, Prisma, React Native, MariaDB, Oracle.
- **Infra:** servidor Hetzner com Easypanel (Docker). Cada pasta (`backend/`, `solver/`) vira um serviço no Easypanel.
- **Pessoa única:** tabela `pessoas` (CPF, ID INEP, NIS únicos/nullable); aluno, servidor e responsável são papéis. 1 usuário → N perfis com escopo por escola (`spatie/laravel-permission`). Permissão vem do papel, nunca de `pessoas` direto.
- **Censo Escolar:** modelo alinhado ao leiaute Educacenso 2026 (registros 00, 10, 20, 30, 40, 50, 60 + 2ª etapa). Tabelas de códigos oficiais do INEP entram via seed anual. NIS **não** é campo do Censo (fica por Bolsa Família / Sistema Presença).
- **Avaliação:** avaliações dinâmicas com peso (não AV1–AV4 fixo); média de aprovação, fórmula de recuperação e frequência mínima configuráveis por ano letivo.
- **Diário de Classe** obrigatório; frequência é vinculada à aula registrada no diário.
- **Grade horária:** fase 1 manual com validação de conflitos; fase 2 solver. Fluxo: proposta → aceite do professor → travada → re-solve só do resto (mínima alteração) → edição manual (travada_manual) → publicada. Modo **sequencial** ou **integrado** configurável pela SEMED; dias fixos por escola opcionais; tempo de deslocamento entre escolas; conflitos entre escolas vão para arbitragem da SEMED. Turma tem `hora_inicio/hora_fim` opcionais que sobrepõem o turno.
- **LGPD:** auditoria com `spatie/laravel-activitylog` (inclui visualização/exportação de dados sensíveis: NIS, benefício social, laudos/CID).
- **Design:** abordagem híbrida — telas administrativas no Filament com as cores institucionais; telas-vitrine (portal do responsável, dashboards, transparência, mobile) fiéis ao Stitch. Unificar tokens de cor (o Stitch usa `#14a6f5`, o documento usa `#1E40AF`).

## Lacunas conhecidas
- Stitch não tem telas de CRUD-base (servidor, lotação, turmas, disciplinas, ano letivo, usuários) — saem do Filament; só lotação e disponibilidade do professor merecem tela própria.
- Telas 5.1 (Diário de Classe) e 11.1 (Cadastro de Servidor) existem só na especificação, sem design.

## Pendências
- [ ] Validar renderização dos diagramas (`docs/diagramas/visualizar.html`).
- [ ] Diagramas UML (casos de uso, classes, estados, atividades, sequência, componentes) — sugerido PlantUML p/ casos de uso e componentes, Mermaid p/ o resto.
- [ ] Confirmar se professores multi-escola em Xinguara têm dias fixos por escola.
- [x] Instalar Laravel (instalado na raiz do repositório).
- [ ] Ordem do MVP: (1) cadastros-base, acesso e matrícula → (2) diário, frequência e notas → (3) portal do responsável → (4) demais módulos → IA de evasão por último.
