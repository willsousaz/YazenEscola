<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Verificação de Acesso — Yazen | SEMED Xinguara</title>
<!-- Google Fonts: Outfit & Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Outfit:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN with Forms & Container Queries -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "error": "#ba1a1a",
            "surface": "#faf8ff",
            "secondary-fixed-dim": "#68dba9",
            "on-tertiary-fixed-variant": "#6e3900",
            "outline-variant": "#c4c5d5",
            "surface-dim": "#d2d9f4",
            "on-tertiary-fixed": "#2f1500",
            "on-error-container": "#93000a",
            "inverse-surface": "#283044",
            "surface-container-highest": "#dae2fd",
            "tertiary-fixed-dim": "#ffb77d",
            "on-primary-fixed": "#001453",
            "on-tertiary-container": "#ffa85d",
            "surface-tint": "#3755c3",
            "surface-container-lowest": "#ffffff",
            "primary-fixed-dim": "#b8c4ff",
            "on-secondary-fixed-variant": "#005137",
            "surface-container": "#eaedff",
            "primary": "#00288e",
            "inverse-primary": "#b8c4ff",
            "surface-container-low": "#f2f3ff",
            "on-surface": "#131b2e",
            "on-background": "#131b2e",
            "surface-variant": "#dae2fd",
            "background": "#faf8ff",
            "on-secondary": "#ffffff",
            "secondary-container": "#82f5c1",
            "tertiary": "#532a00",
            "tertiary-fixed": "#ffdcc3",
            "secondary-fixed": "#85f8c4",
            "inverse-on-surface": "#eef0ff",
            "outline": "#757684",
            "surface-container-high": "#e2e7ff",
            "on-surface-variant": "#444653",
            "on-secondary-fixed": "#002114",
            "on-primary-container": "#a8b8ff",
            "error-container": "#ffdad6",
            "on-secondary-container": "#00714e",
            "on-primary-fixed-variant": "#173bab",
            "on-error": "#ffffff",
            "primary-fixed": "#dde1ff",
            "primary-container": "#1e40af",
            "tertiary-container": "#743d00",
            "surface-bright": "#faf8ff",
            "secondary": "#006c4a",
            "on-tertiary": "#ffffff",
            "on-primary": "#ffffff"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-xs": "0.25rem",
            "margin": "2rem",
            "margin-sm": "1rem",
            "space-xl": "2.5rem",
            "gutter-sm": "1rem",
            "space-sm": "0.5rem",
            "space-md": "1rem",
            "space-lg": "1.5rem",
            "gutter": "1.5rem"
          },
          "fontFamily": {
            "headline-md": ["Outfit", "sans-serif"],
            "label-lg": ["Inter", "sans-serif"],
            "headline-xl": ["Outfit", "sans-serif"],
            "headline-lg": ["Outfit", "sans-serif"],
            "label-md": ["Inter", "sans-serif"],
            "label-sm": ["Inter", "sans-serif"],
            "headline-xl-mobile": ["Outfit", "sans-serif"],
            "headline-lg-mobile": ["Outfit", "sans-serif"],
            "body-md": ["Inter", "sans-serif"],
            "body-sm": ["Inter", "sans-serif"],
            "body-lg": ["Inter", "sans-serif"],
            "headline-sm": ["Outfit", "sans-serif"]
          },
          "fontSize": {
            "headline-md": ["22px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "label-lg": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
            "headline-xl": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-lg": ["30px", { "lineHeight": "38px", "letterSpacing": "-0.015em", "fontWeight": "600" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600" }],
            "headline-xl-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
            "headline-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
            "body-sm": ["12px", { "lineHeight": "16px", "fontWeight": "400" }],
            "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
            "headline-sm": ["18px", { "lineHeight": "24px", "fontWeight": "600" }]
          }
        }
      }
    }
  </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen">
<div class="flex flex-col lg:flex-row min-h-screen w-full">
<!-- COLUNA ESQUERDA: Institucional / Identidade Visual Amazônica (~1/3 da largura) -->
<div class="w-full lg:w-[38%] xl:w-[34%] bg-slate-900 relative overflow-hidden flex flex-col justify-between p-8 lg:p-10 text-white min-h-[520px] lg:min-h-screen border-r border-slate-800 shrink-0">
<!-- Imagem de Fundo com Overlay Sutil Institucional -->
<div class="absolute inset-0 bg-cover bg-center mix-blend-luminosity opacity-20 pointer-events-none scale-105 transition-transform duration-1000 ease-out" data-alt="Modern public municipal school classroom in Xinguara Pará surrounded by lush Amazonian nature. High-key natural daylight pours through expansive windows illuminating attentive students, wooden desks, and an interactive digital whiteboard. The atmosphere reflects clean civic architecture, educational pride, deep navy and vibrant emerald accents in a dignified light mode palette." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKVUtG5BwtATElpqLmAjGSXzFsTIG3SHx6wK3RFMYF99DbhUqqRDYGY81HGM3XAt2EmMQup8UxeedbVeKF_5HZiu2DGmISXwPcM9uKIE-rtw5AHoS5aJTRm0uD0eRNyeZRhWhDFevpiyrDHyreI11KGo5Rd6i_IS3zcQ8q6rCBXwFxieHV2OwqCMekszzD_uqbHJf-KXGbdmI4DOfUfeKUHGzS6-iAl1pOz2SrId__tx34tPRZ9Va4NmPSCKknVRtIbtnTzTf7L_4')">
</div>
<!-- Gradiente Profundo de Fusão Institucional -->
<div class="absolute inset-0 bg-gradient-to-b from-[#0F172A] via-[#132247]/95 to-[#0B132B] opacity-95"></div>
<!-- Conteúdo Superior da Coluna Esquerda -->
<div class="relative z-10 space-y-6">
<!-- Header / Logo Yazen + Versão + SEMED -->
<div class="flex items-center justify-between gap-3 border-b border-white/10 pb-5">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-white shadow-md border border-white/20">
<span class="material-symbols-outlined text-2xl" data-icon="school">school</span>
</div>
<div>
<div class="flex items-center gap-2">
<span class="font-headline-md text-headline-md font-bold tracking-tight text-white leading-none">Yazen</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-bold bg-secondary text-white tracking-wider border border-secondary-container/40">
                  v4.2 PRO
                </span>
</div>
<p class="font-label-sm text-[10px] tracking-widest text-slate-300 font-semibold uppercase mt-0.5">
                PREFEITURA DE XINGUARA • SEMED
              </p>
</div>
</div>
</div>
<!-- Pílula: Portal Integrado de Gestão Escolar -->
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/15 backdrop-blur-md">
<span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
<span class="font-label-md text-label-md text-slate-200">Portal Integrado de Gestão Escolar</span>
</div>
<!-- Bloco de Texto Institucional -->
<div class="space-y-3 pt-2">
<span class="inline-block font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed font-bold">
            COMPROMISSO MUNICIPAL
          </span>
<h1 class="font-headline-lg text-headline-lg text-white font-semibold tracking-tight leading-snug">
            Inteligência, equidade e acolhimento para a rede pública de ensino de Xinguara.
          </h1>
<p class="font-body-md text-body-md text-slate-300 leading-relaxed font-normal">
            Plataforma unificada para controle pedagógico, diário de classe eletrônico, transporte escolar e auditoria institucional da SEMED.
          </p>
</div>
<!-- 3 Cards Translúcidos Empilhados -->
<div class="space-y-3 pt-2">
<!-- Card 1 -->
<div class="p-3.5 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm flex items-center gap-3.5 hover:bg-white/10 transition-colors duration-150">
<div class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-primary-fixed shrink-0">
<span class="material-symbols-outlined text-xl" data-icon="apartment">apartment</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-white font-semibold">32 Unidades</p>
<p class="font-body-sm text-body-sm text-slate-300">Rede Municipal de Ensino</p>
</div>
</div>
<!-- Card 2 -->
<div class="p-3.5 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm flex items-center gap-3.5 hover:bg-white/10 transition-colors duration-150">
<div class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-secondary-fixed shrink-0">
<span class="material-symbols-outlined text-xl" data-icon="location_on">location_on</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-white font-semibold">Urbana &amp; Vicinais</p>
<p class="font-body-sm text-body-sm text-slate-300">Sede e Zona Rural de Xinguara</p>
</div>
</div>
<!-- Card 3 -->
<div class="p-3.5 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm flex items-center gap-3.5 hover:bg-white/10 transition-colors duration-150">
<div class="w-9 h-9 rounded bg-white/10 flex items-center justify-center text-tertiary-fixed shrink-0">
<span class="material-symbols-outlined text-xl" data-icon="sync">sync</span>
</div>
<div>
<p class="font-label-lg text-label-lg text-white font-semibold">Offline-First</p>
<p class="font-body-sm text-body-sm text-slate-300">Sincronização Resiliente</p>
</div>
</div>
</div>
</div>
<!-- Rodapé da Coluna Esquerda -->
<div class="relative z-10 pt-6 mt-6 border-t border-white/10 flex items-center justify-between text-slate-400 font-label-sm text-label-sm">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-base text-slate-400" data-icon="verified_user">verified_user</span>
<span>CERTIFICAÇÃO ICP-BRASIL / SHA-256</span>
</div>
<span class="px-2 py-0.5 rounded bg-white/10 text-white font-semibold tracking-wider text-[10px] border border-white/15">
          SEMED TI
        </span>
</div>
</div>
<!-- COLUNA DIREITA: Conteúdo Central de Autenticação / Verificação (Fundo Claro) -->
<div class="flex-1 bg-surface flex flex-col justify-between p-6 sm:p-10 lg:p-12 overflow-y-auto min-h-screen">
<!-- Topo Vazio para espaçamento flexível -->
<div class="hidden lg:block w-full h-2"></div>
<!-- Bloco Centralizado -->
<div class="w-full max-w-lg mx-auto my-auto flex flex-col items-center">
<!-- Cabeçalho do Fluxo de Segurança -->
<div class="w-full text-center mb-6">
<!-- Pílula com Ícone de Escudo -->
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-fixed/60 border border-primary-fixed text-primary font-label-md text-label-md mb-3">
<span class="material-symbols-outlined text-base" data-icon="shield">shield</span>
<span>Arquitetura de Acesso Seguro em Dupla Verificação</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold tracking-tight">
            Autenticação do Servidor Educacional
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto mt-1.5">
            Visualização dos estágios obrigatórios de validação institucional de acordo com a política de governança digital.
          </p>
</div>
<!-- CARD ÚNICO DE AUTENTICAÇÃO (Largura ~460px) -->
<div class="w-full max-w-[460px] bg-surface-container-lowest rounded-lg border border-slate-200 shadow-sm p-6 sm:p-8">
<!-- Alerta de 5 Tentativas Incorretas (Âmbar Suave) -->
<div class="mb-6 p-3.5 rounded bg-[#FEF3C7] border border-[#FCD34D] text-[#92400E] flex items-start gap-3">
<span class="material-symbols-outlined text-xl text-[#B45309] shrink-0 mt-0.5" data-icon="warning">warning</span>
<p class="font-body-sm text-body-sm font-medium leading-relaxed text-[#92400E]">
              Detectamos 5 tentativas de acesso sem sucesso. Por segurança, confirme sua identidade.
            </p>
</div>
<!-- Título e Subtítulo Internos -->
<div class="mb-5">
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold tracking-tight">
              Verificação de Acesso
            </h3>
<p class="font-body-md text-body-md text-slate-500 mt-1">
              Para onde devemos enviar o código de verificação?
            </p>
</div>
<!-- Formulário / Seletores de Método -->
<form class="space-y-4" onsubmit="event.preventDefault();">
<!-- Grupo de Opções (Radio Cards) -->
<div aria-label="Método de envio do código" class="space-y-3" role="radiogroup">
<!-- Opção 1: E-mail Institucional (SELECIONADA) -->
<label class="relative flex items-center p-4 rounded border-2 border-primary-container bg-[#EFF6FF] cursor-pointer transition-all duration-150" id="option-email">
<input checked="" class="sr-only" name="auth_method" onchange="updateRadioSelection(this)" type="radio" value="email"/>
<div class="flex items-center gap-3.5 w-full">
<!-- Ícone do Canal -->
<div class="w-10 h-10 rounded bg-primary-container text-white flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-xl" data-icon="mail">mail</span>
</div>
<!-- Textos -->
<div class="flex-1 min-w-0">
<p class="font-label-lg text-label-lg font-bold text-on-surface truncate">
                      E-mail institucional
                    </p>
<p class="font-body-sm text-body-sm text-slate-600 truncate mt-0.5 font-mono">
                      ma••••@xinguara.pa.gov.br
                    </p>
</div>
<!-- Radio Indicator (Selecionado ◉) -->
<div class="w-5 h-5 rounded-full border-2 border-primary-container flex items-center justify-center shrink-0 bg-white">
<div class="w-2.5 h-2.5 rounded-full bg-primary-container"></div>
</div>
</div>
</label>
<!-- Opção 2: SMS (NÃO SELECIONADA) -->
<label class="relative flex items-center p-4 rounded border border-slate-200 bg-surface-container-lowest hover:border-slate-300 hover:bg-slate-50 cursor-pointer transition-all duration-150" id="option-sms">
<input class="sr-only" name="auth_method" onchange="updateRadioSelection(this)" type="radio" value="sms"/>
<div class="flex items-center gap-3.5 w-full">
<!-- Ícone do Canal -->
<div class="w-10 h-10 rounded bg-slate-100 text-slate-700 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-xl" data-icon="sms">sms</span>
</div>
<!-- Textos -->
<div class="flex-1 min-w-0">
<p class="font-label-lg text-label-lg font-bold text-on-surface truncate">
                      SMS
                    </p>
<p class="font-body-sm text-body-sm text-slate-600 truncate mt-0.5 font-mono">
                      (94) •••••-••84
                    </p>
</div>
<!-- Radio Indicator (Não Selecionado ○) -->
<div class="w-5 h-5 rounded-full border-2 border-slate-300 flex items-center justify-center shrink-0 bg-white">
<div class="w-2.5 h-2.5 rounded-full bg-transparent"></div>
</div>
</div>
</label>
</div>
<!-- Botão de Ação Primário -->
<button class="w-full mt-2 min-h-[44px] flex items-center justify-center gap-2 px-5 py-2.5 rounded bg-primary-container hover:bg-[#1D4ED8] focus:ring-2 focus:ring-[#2563EB] focus:ring-offset-2 text-white font-label-lg text-label-lg font-semibold tracking-wide shadow-sm transition-all duration-150 active:scale-[0.99]" type="submit">
<span>Enviar código</span>
<span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
</button>
<!-- Link Voltar ao Login -->
<div class="text-center pt-1">
<a class="inline-flex items-center gap-1 font-label-md text-label-md text-slate-600 hover:text-primary transition-colors duration-150 font-medium" href="#">
<span class="material-symbols-outlined text-base" data-icon="arrow_back">arrow_back</span>
<span>Voltar ao login</span>
</a>
</div>
<!-- Caixa de Ajuda / Suporte TI no Rodapé do Card -->
<div class="mt-5 p-3.5 rounded bg-slate-50 border border-slate-200 flex items-start gap-2.5 text-slate-600">
<span class="material-symbols-outlined text-lg text-slate-500 shrink-0 mt-0.5" data-icon="help_outline">help_outline</span>
<p class="font-body-sm text-body-sm leading-relaxed text-slate-600">
                Não tem mais acesso a esse e-mail ou telefone? Procure a direção da sua escola ou o <span class="font-semibold text-slate-800">Suporte TI SEMED</span>.
              </p>
</div>
</form>
</div>
</div>
<!-- Rodapé da Página (Coluna Direita) -->
<footer class="w-full text-center pt-8 pb-4 mt-6 border-t border-slate-200/80">
<div class="max-w-2xl mx-auto space-y-1.5 text-slate-500 font-body-sm text-body-sm">
<p class="leading-relaxed">
<a class="hover:text-primary transition-colors duration-150" href="#">Privacidade &amp; Termos da LGPD (Lei nº 13.709/2018)</a>
<span class="mx-1 text-slate-300">·</span>
<a class="hover:text-primary transition-colors duration-150" href="#">Portal da Transparência de Xinguara</a>
<span class="mx-1 text-slate-300">·</span>
<a class="hover:text-primary transition-colors duration-150" href="#">Ouvidoria Municipal</a>
</p>
<p class="text-[11px] text-slate-400">
            © 2025 SEMED Xinguara • Governo Municipal de Xinguara - PA. Todos os direitos reservados.
          </p>
</div>
</footer>
</div>
</div>
<!-- Script para alternância visual dos Radio Cards -->
<script>
    function updateRadioSelection(input) {
      const emailCard = document.getElementById('option-email');
      const smsCard = document.getElementById('option-sms');
      
      const emailIndicator = emailCard.querySelector('.w-2\\.5');
      const smsIndicator = smsCard.querySelector('.w-2\\.5');
      
      const emailIconWrapper = emailCard.querySelector('.w-10');
      const smsIconWrapper = smsCard.querySelector('.w-10');
      
      if (input.value === 'email') {
        // Ativar Email
        emailCard.className = 'relative flex items-center p-4 rounded border-2 border-primary-container bg-[#EFF6FF] cursor-pointer transition-all duration-150';
        emailIndicator.className = 'w-2.5 h-2.5 rounded-full bg-primary-container';
        emailIconWrapper.className = 'w-10 h-10 rounded bg-primary-container text-white flex items-center justify-center shrink-0';
        
        // Desativar SMS
        smsCard.className = 'relative flex items-center p-4 rounded border border-slate-200 bg-surface-container-lowest hover:border-slate-300 hover:bg-slate-50 cursor-pointer transition-all duration-150';
        smsIndicator.className = 'w-2.5 h-2.5 rounded-full bg-transparent';
        smsIconWrapper.className = 'w-10 h-10 rounded bg-slate-100 text-slate-700 flex items-center justify-center shrink-0';
      } else {
        // Desativar Email
        emailCard.className = 'relative flex items-center p-4 rounded border border-slate-200 bg-surface-container-lowest hover:border-slate-300 hover:bg-slate-50 cursor-pointer transition-all duration-150';
        emailIndicator.className = 'w-2.5 h-2.5 rounded-full bg-transparent';
        emailIconWrapper.className = 'w-10 h-10 rounded bg-slate-100 text-slate-700 flex items-center justify-center shrink-0';
        
        // Ativar SMS
        smsCard.className = 'relative flex items-center p-4 rounded border-2 border-primary-container bg-[#EFF6FF] cursor-pointer transition-all duration-150';
        smsIndicator.className = 'w-2.5 h-2.5 rounded-full bg-primary-container';
        smsIconWrapper.className = 'w-10 h-10 rounded bg-primary-container text-white flex items-center justify-center shrink-0';
      }
    }
  </script>
</body></html>