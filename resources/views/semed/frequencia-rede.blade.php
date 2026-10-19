<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SME Xinguara - Painel de Frequência Consolidada</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "primary-light": "#eef4ff",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "accent-green": "#07883b",
                        "accent-red": "#e73908",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        /* Custom Scrollbar for tables */
        .custom-scrollbar::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        /* Gauge Animation (Simulated via CSS for static output) */
        .gauge-arc {
            stroke-dasharray: 251; /* 2 * PI * 40 (approx radius) */
            stroke-dashoffset: 251;
            animation: fillGauge 1.5s ease-out forwards;
        }
        @keyframes fillGauge {
            to { stroke-dashoffset: 30; } /* 88% filled */
        }
    </style>
</head>
<body class="bg-background-light font-display text-slate-800 antialiased selection:bg-primary selection:text-white">
<div class="flex min-h-screen flex-col">
<!-- Top Navigation -->
<header class="sticky top-0 z-50 flex items-center justify-between border-b border-slate-200 bg-white px-6 py-3 shadow-sm">
<div class="flex items-center gap-4">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-white">
<span class="material-symbols-outlined">school</span>
</div>
<div>
<h1 class="text-lg font-bold leading-tight text-slate-900">SME Xinguara</h1>
<p class="text-xs font-medium text-slate-500">Gestão Municipal - Fase 2</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1.5 text-sm font-medium text-slate-600">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
</span>
                    Sistema Operacional
                </div>
<button class="relative rounded-lg p-2 text-slate-500 hover:bg-slate-100 transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1.5 right-1.5 h-2 w-2 rounded-full bg-red-500 border border-white"></span>
</button>
<button class="rounded-lg p-2 text-slate-500 hover:bg-slate-100 transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-9 w-9 overflow-hidden rounded-full border border-slate-200 bg-slate-50" data-alt="User Avatar">
<img alt="Admin User" class="h-full w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeTRENdYvPJFCifJRQI71w29mgBMp9bwtevT_xTsBnxXEa_x9TOee1AZQ0A3kh5G5KIKqvY9l21OhpH5d7idd6o7E1sF7D_tvAhnN-mMOQhQRzagspSai-kck7v5qqmWlc_nVTbKQTww1Ivw8KLTwTGCxtXKD8BRfmPWEJt-Ft8kQQNKsUeXQI5jfN2j7tIE28IcO6Xz9b-zTF9iN0QB6LXk61mXOBcobG-HKrCQ4QI0pL5WXu2Tatl_g_hWh448bjSEYSJPVI5vk"/>
</div>
</div>
</header>
<main class="flex-1 overflow-x-hidden p-6 lg:p-8">
<div class="mx-auto max-w-7xl space-y-8">
<!-- Page Header & Actions -->
<div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
<div>
<h2 class="text-2xl font-bold text-slate-900">Painel de Frequência Consolidada</h2>
<p class="text-slate-500">Visão geral estratégica da frequência escolar municipal.</p>
</div>
<button class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition-colors">
<span class="material-symbols-outlined text-[20px]">download</span>
                        Exportar Relatório
                    </button>
</div>
<!-- Global Filters -->
<div class="grid grid-cols-1 gap-4 rounded-xl border border-slate-200 bg-white p-4 shadow-sm md:grid-cols-4 lg:gap-6">
<div class="space-y-1.5">
<label class="text-xs font-semibold uppercase tracking-wider text-slate-500">Ano Letivo</label>
<div class="relative">
<select class="w-full appearance-none rounded-lg border border-slate-300 bg-slate-50 py-2.5 pl-3 pr-10 text-sm font-medium text-slate-700 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
<option>2023</option>
<option>2022</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 pointer-events-none text-slate-400">expand_more</span>
</div>
</div>
<div class="space-y-1.5">
<label class="text-xs font-semibold uppercase tracking-wider text-slate-500">Mês de Referência</label>
<div class="relative">
<select class="w-full appearance-none rounded-lg border border-slate-300 bg-slate-50 py-2.5 pl-3 pr-10 text-sm font-medium text-slate-700 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
<option>Outubro</option>
<option>Setembro</option>
<option>Agosto</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 pointer-events-none text-slate-400">calendar_month</span>
</div>
</div>
<div class="space-y-1.5">
<label class="text-xs font-semibold uppercase tracking-wider text-slate-500">Nível de Ensino</label>
<div class="relative">
<select class="w-full appearance-none rounded-lg border border-slate-300 bg-slate-50 py-2.5 pl-3 pr-10 text-sm font-medium text-slate-700 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
<option>Todos os Níveis</option>
<option>Educação Infantil</option>
<option>Fundamental I</option>
<option>Fundamental II</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 pointer-events-none text-slate-400">school</span>
</div>
</div>
<div class="space-y-1.5">
<label class="text-xs font-semibold uppercase tracking-wider text-slate-500">Região</label>
<div class="relative">
<select class="w-full appearance-none rounded-lg border border-slate-300 bg-slate-50 py-2.5 pl-3 pr-10 text-sm font-medium text-slate-700 focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary">
<option>Todas</option>
<option>Urbana</option>
<option>Rural</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 pointer-events-none text-slate-400">location_on</span>
</div>
</div>
</div>
<!-- KPI & Gauge Section -->
<div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
<!-- Main KPI: Gauge -->
<div class="flex flex-col items-center justify-center rounded-xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-1">
<h3 class="mb-4 text-base font-semibold text-slate-700">Taxa Municipal de Frequência</h3>
<div class="relative flex h-48 w-full items-end justify-center overflow-hidden pb-4">
<!-- SVG Gauge -->
<svg class="h-40 w-80 overflow-visible" viewbox="0 0 100 50">
<!-- Background Arc -->
<path d="M 10 50 A 40 40 0 0 1 90 50" fill="none" stroke="#e2e8f0" stroke-linecap="round" stroke-width="10"></path>
<!-- Foreground Arc (The 88%) -->
<path class="transition-all duration-1000 ease-out" d="M 10 50 A 40 40 0 0 1 90 50" fill="none" stroke="#1152d4" stroke-dasharray="125.6" stroke-dashoffset="15" stroke-linecap="round" stroke-width="10"></path>
</svg>
<!-- Center Text -->
<div class="absolute bottom-4 flex flex-col items-center">
<span class="text-5xl font-extrabold text-slate-900 tracking-tight">88%</span>
<span class="flex items-center gap-1 text-sm font-medium text-accent-red">
<span class="material-symbols-outlined text-sm">trending_down</span>
                                    -2% vs. mês anterior
                                </span>
</div>
</div>
<div class="mt-2 flex w-full justify-between px-8 text-xs font-medium text-slate-400">
<span>0%</span>
<span>Meta: 90%</span>
<span>100%</span>
</div>
</div>
<!-- Secondary KPIs -->
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-3">
<!-- Card 1 -->
<div class="flex flex-col justify-between rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
<div class="mb-2 flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-primary">
<span class="material-symbols-outlined">groups</span>
</div>
<span class="text-sm font-semibold text-slate-500">Total de Alunos</span>
</div>
<div>
<span class="text-3xl font-bold text-slate-900">12.450</span>
<div class="mt-1 flex items-center text-sm text-accent-green">
<span class="material-symbols-outlined mr-1 text-base">trending_up</span>
<span>+150 Matrículas</span>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="flex flex-col justify-between rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
<div class="mb-2 flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-primary">
<span class="material-symbols-outlined">domain</span>
</div>
<span class="text-sm font-semibold text-slate-500">Escolas Reportando</span>
</div>
<div>
<span class="text-3xl font-bold text-slate-900">42</span>
<div class="mt-1 flex items-center text-sm text-slate-500">
<span class="material-symbols-outlined mr-1 text-base">check_circle</span>
<span>100% Ativas</span>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="flex flex-col justify-between rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
<div class="mb-2 flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-50 text-orange-600">
<span class="material-symbols-outlined">warning</span>
</div>
<span class="text-sm font-semibold text-slate-500">Média de Ausência</span>
</div>
<div>
<span class="text-3xl font-bold text-slate-900">12%</span>
<div class="mt-1 flex items-center text-sm text-accent-red">
<span class="material-symbols-outlined mr-1 text-base">arrow_upward</span>
<span>+1.5% Aumento</span>
</div>
</div>
</div>
<!-- Mini Alert Panel inside KPI grid for space efficiency -->
<div class="col-span-1 sm:col-span-2 lg:col-span-3 rounded-xl border border-red-100 bg-red-50 p-4">
<div class="flex items-center gap-3">
<div class="rounded-full bg-red-100 p-2 text-accent-red">
<span class="material-symbols-outlined">priority_high</span>
</div>
<div class="flex-1">
<h4 class="text-sm font-bold text-slate-900">Atenção Crítica</h4>
<p class="text-sm text-slate-600">3 escolas apresentaram queda de frequência superior a 10% nesta semana.</p>
</div>
<button class="text-sm font-medium text-accent-red hover:underline">Ver Detalhes</button>
</div>
</div>
</div>
</div>
<!-- Charts & Breakdown Section -->
<div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
<!-- Main Chart -->
<div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm lg:col-span-2">
<div class="mb-6 flex flex-wrap items-center justify-between gap-4">
<h3 class="text-lg font-bold text-slate-900">Comparativo por Unidade Escolar</h3>
<div class="flex overflow-hidden rounded-lg border border-slate-200 bg-slate-50 text-xs font-medium">
<button class="bg-white px-3 py-1.5 text-primary shadow-sm">Por Escola</button>
<button class="px-3 py-1.5 text-slate-500 hover:text-slate-700">Por Região</button>
</div>
</div>
<!-- CSS-Only Bar Chart Representation -->
<div class="flex h-64 items-end justify-between gap-2 sm:gap-4 px-2">
<!-- Bar 1 -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-primary/80 transition-all hover:bg-primary" style="height: 92%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">92%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">E.M. Tancredo</span>
</div>
<!-- Bar 2 -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-primary/80 transition-all hover:bg-primary" style="height: 88%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">88%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">Cora Coralina</span>
</div>
<!-- Bar 3 (Low) -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-accent-red/80 transition-all hover:bg-accent-red" style="height: 76%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">76%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">São José</span>
</div>
<!-- Bar 4 -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-primary/80 transition-all hover:bg-primary" style="height: 95%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">95%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">Pequeno Príncipe</span>
</div>
<!-- Bar 5 -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-primary/80 transition-all hover:bg-primary" style="height: 85%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">85%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">Cecília Meireles</span>
</div>
<!-- Bar 6 -->
<div class="group relative flex w-full flex-col items-center gap-2">
<div class="relative w-full max-w-[40px] rounded-t-sm bg-primary/80 transition-all hover:bg-primary" style="height: 90%;">
<div class="absolute -top-8 left-1/2 hidden -translate-x-1/2 rounded bg-slate-800 px-2 py-1 text-xs text-white group-hover:block z-10">90%</div>
</div>
<span class="text-[10px] font-medium text-slate-500 sm:text-xs truncate max-w-[60px]">Monteiro Lobato</span>
</div>
</div>
</div>
<!-- Critical Alerts List -->
<div class="flex flex-col rounded-xl border border-slate-200 bg-white shadow-sm lg:col-span-1">
<div class="border-b border-slate-100 p-4">
<h3 class="text-lg font-bold text-slate-900">Alertas de Baixa Frequência</h3>
<p class="text-xs text-slate-500">Escolas com frequência abaixo de 80%</p>
</div>
<div class="flex-1 overflow-y-auto p-2 custom-scrollbar max-h-[300px]">
<ul class="space-y-2">
<!-- Alert Item 1 -->
<li class="flex items-start gap-3 rounded-lg bg-red-50 p-3 transition-colors hover:bg-red-100 cursor-pointer">
<div class="mt-0.5 text-accent-red">
<span class="material-symbols-outlined text-[20px]">error</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h4 class="text-sm font-bold text-slate-900">E.M. São José</h4>
<span class="rounded bg-red-200 px-1.5 py-0.5 text-xs font-bold text-red-800">76%</span>
</div>
<p class="mt-1 text-xs text-slate-600">Queda acentuada no 5º ano matutino.</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">chevron_right</span>
</li>
<!-- Alert Item 2 -->
<li class="flex items-start gap-3 rounded-lg border border-slate-100 p-3 transition-colors hover:bg-slate-50 cursor-pointer">
<div class="mt-0.5 text-orange-500">
<span class="material-symbols-outlined text-[20px]">warning</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h4 class="text-sm font-bold text-slate-900">E.M. Dom Bosco</h4>
<span class="rounded bg-orange-100 px-1.5 py-0.5 text-xs font-bold text-orange-800">79%</span>
</div>
<p class="mt-1 text-xs text-slate-600">Zona Rural - Impacto de transporte.</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">chevron_right</span>
</li>
<!-- Alert Item 3 -->
<li class="flex items-start gap-3 rounded-lg border border-slate-100 p-3 transition-colors hover:bg-slate-50 cursor-pointer">
<div class="mt-0.5 text-orange-500">
<span class="material-symbols-outlined text-[20px]">warning</span>
</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h4 class="text-sm font-bold text-slate-900">Creche Caminho Suave</h4>
<span class="rounded bg-orange-100 px-1.5 py-0.5 text-xs font-bold text-orange-800">79.5%</span>
</div>
<p class="mt-1 text-xs text-slate-600">Alta incidência de virose relatada.</p>
</div>
<span class="material-symbols-outlined text-slate-400 text-sm">chevron_right</span>
</li>
</ul>
</div>
<div class="border-t border-slate-100 p-3 text-center">
<button class="text-sm font-medium text-primary hover:text-blue-700">Ver todos os alertas</button>
</div>
</div>
</div>
<!-- Detailed Table -->
<div class="rounded-xl border border-slate-200 bg-white shadow-sm overflow-hidden">
<div class="border-b border-slate-200 bg-slate-50 px-6 py-4 flex items-center justify-between">
<div>
<h3 class="text-lg font-bold text-slate-900">Detalhamento por Escola</h3>
<p class="text-sm text-slate-500">Clique na linha para expandir detalhes por série e turno.</p>
</div>
<div class="relative max-w-xs">
<input class="w-full rounded-lg border border-slate-300 bg-white py-2 pl-9 pr-4 text-sm focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Buscar escola..." type="text"/>
<span class="material-symbols-outlined absolute left-2.5 top-2.5 text-slate-400 text-[18px]">search</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left text-sm text-slate-600">
<thead class="bg-slate-50 text-xs uppercase text-slate-500">
<tr>
<th class="px-6 py-3 font-semibold">Unidade Escolar</th>
<th class="px-6 py-3 font-semibold">Região</th>
<th class="px-6 py-3 font-semibold">Nível</th>
<th class="px-6 py-3 font-semibold text-right">Total Alunos</th>
<th class="px-6 py-3 font-semibold text-center">Frequência</th>
<th class="px-6 py-3 font-semibold text-center">Tendência</th>
<th class="px-6 py-3 font-semibold text-center">Ações</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<!-- Row 1 -->
<tr class="group hover:bg-slate-50">
<td class="px-6 py-4 font-medium text-slate-900">E.M. Tancredo Neves</td>
<td class="px-6 py-4">Urbana</td>
<td class="px-6 py-4">Fundamental II</td>
<td class="px-6 py-4 text-right">850</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            92%
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<!-- Simple SVG Sparkline -->
<svg class="mx-auto h-6 w-16" fill="none" stroke="currentColor">
<path d="M1 18 L 5 15 L 9 16 L 13 10 L 17 12 L 21 8 L 25 10 L 29 4" stroke="#07883b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</td>
<td class="px-6 py-4 text-center">
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">expand_more</span>
</button>
</td>
</tr>
<!-- Row 2 (With issue) -->
<tr class="group bg-red-50/30 hover:bg-red-50/60">
<td class="px-6 py-4 font-medium text-slate-900 flex items-center gap-2">
                                        E.M. São José
                                        <span class="material-symbols-outlined text-accent-red text-[16px]" title="Alerta Crítico">warning</span>
</td>
<td class="px-6 py-4">Rural</td>
<td class="px-6 py-4">Fundamental I</td>
<td class="px-6 py-4 text-right">320</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                            76%
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<svg class="mx-auto h-6 w-16" fill="none" stroke="currentColor">
<path d="M1 5 L 5 8 L 9 8 L 13 12 L 17 10 L 21 16 L 25 18 L 29 20" stroke="#e73908" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</td>
<td class="px-6 py-4 text-center">
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">expand_more</span>
</button>
</td>
</tr>
<!-- Expanded Details for Row 2 (Simulated) -->
<tr class="bg-white border-b-2 border-slate-100">
<td class="p-0" colspan="7">
<div class="px-6 py-4 bg-slate-50/50">
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs">
<div class="rounded border border-slate-200 bg-white p-3">
<p class="font-bold text-slate-700 mb-2">Por Turno</p>
<div class="flex justify-between mb-1"><span>Matutino</span><span class="font-bold text-red-600">72%</span></div>
<div class="w-full bg-slate-100 rounded-full h-1.5"><div class="bg-red-500 h-1.5 rounded-full" style="width: 72%"></div></div>
<div class="flex justify-between mt-3 mb-1"><span>Vespertino</span><span class="font-bold text-slate-700">88%</span></div>
<div class="w-full bg-slate-100 rounded-full h-1.5"><div class="bg-primary h-1.5 rounded-full" style="width: 88%"></div></div>
</div>
<div class="rounded border border-slate-200 bg-white p-3">
<p class="font-bold text-slate-700 mb-2">Por Série (Piores Indicadores)</p>
<div class="flex justify-between border-b border-slate-100 pb-1 mb-1">
<span>5º Ano B</span>
<span class="text-red-600 font-bold">65%</span>
</div>
<div class="flex justify-between border-b border-slate-100 pb-1 mb-1">
<span>3º Ano A</span>
<span class="text-orange-600 font-bold">78%</span>
</div>
</div>
<div class="rounded border border-slate-200 bg-white p-3 flex flex-col justify-center items-center text-center">
<span class="material-symbols-outlined text-slate-400 mb-2">assignment</span>
<button class="text-primary font-bold hover:underline">Ver ficha completa da escola</button>
</div>
</div>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="group hover:bg-slate-50">
<td class="px-6 py-4 font-medium text-slate-900">Cora Coralina</td>
<td class="px-6 py-4">Urbana</td>
<td class="px-6 py-4">Educação Infantil</td>
<td class="px-6 py-4 text-right">410</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            88%
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<svg class="mx-auto h-6 w-16" fill="none" stroke="currentColor">
<path d="M1 10 L 5 10 L 9 12 L 13 8 L 17 8 L 21 6 L 25 4 L 29 4" stroke="#07883b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</td>
<td class="px-6 py-4 text-center">
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">expand_more</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="group hover:bg-slate-50">
<td class="px-6 py-4 font-medium text-slate-900">E.M. Pequeno Príncipe</td>
<td class="px-6 py-4">Rural</td>
<td class="px-6 py-4">Fundamental I</td>
<td class="px-6 py-4 text-right">180</td>
<td class="px-6 py-4 text-center">
<span class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">
                                            95%
                                        </span>
</td>
<td class="px-6 py-4 text-center">
<svg class="mx-auto h-6 w-16" fill="none" stroke="currentColor">
<path d="M1 15 L 5 12 L 9 10 L 13 8 L 17 6 L 21 5 L 25 4 L 29 2" stroke="#07883b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</td>
<td class="px-6 py-4 text-center">
<button class="text-slate-400 hover:text-primary">
<span class="material-symbols-outlined">expand_more</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="flex items-center justify-between border-t border-slate-200 bg-white px-6 py-3">
<div class="flex flex-1 justify-between sm:hidden">
<button class="relative inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Anterior</button>
<button class="relative ml-3 inline-flex items-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">Próximo</button>
</div>
<div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
<div>
<p class="text-sm text-slate-700">Mostrando <span class="font-medium">1</span> até <span class="font-medium">4</span> de <span class="font-medium">42</span> resultados</p>
</div>
<div>
<nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
<button class="relative inline-flex items-center rounded-l-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">
<span class="material-symbols-outlined text-[20px]">chevron_left</span>
</button>
<button aria-current="page" class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">1</button>
<button class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">2</button>
<button class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">3</button>
<span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-700 ring-1 ring-inset ring-slate-300 focus:outline-offset-0">...</span>
<button class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">10</button>
<button class="relative inline-flex items-center rounded-r-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-20 focus:outline-offset-0">
<span class="material-symbols-outlined text-[20px]">chevron_right</span>
</button>
</nav>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>