<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SGE Xinguara - Painel Comparativo de Desempenho Acadêmico</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#1754cf",
              "primary-light": "#e0eaff",
              "background-light": "#f6f6f8",
              "background-dark": "#111621",
              "surface-light": "#ffffff",
            },
            fontFamily: {
              "display": ["Lexend", "sans-serif"],
              "body": ["Lexend", "sans-serif"],
            },
            borderRadius: {
                "DEFAULT": "0.25rem", 
                "lg": "0.5rem", 
                "xl": "0.75rem", 
                "full": "9999px"
            },
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Lexend', sans-serif;
        }
        /* Custom scrollbar for table */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d1d5db; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #9ca3af; 
        }
    </style>
</head>
<body class="bg-background-light text-slate-900 antialiased overflow-x-hidden">
<div class="flex flex-col min-h-screen">
<!-- Header Section (Adapted from Component) -->
<header class="sticky top-0 z-50 bg-surface-light border-b border-slate-200 px-6 py-3 shadow-sm">
<div class="max-w-[1440px] mx-auto flex items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3 text-slate-900">
<div class="bg-primary/10 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<div>
<h2 class="text-slate-900 text-lg font-bold leading-tight tracking-tight">SGE Xinguara</h2>
<p class="text-xs text-slate-500 font-medium">Secretaria Municipal de Educação</p>
</div>
</div>
<nav class="hidden md:flex items-center gap-1 bg-slate-50 p-1 rounded-lg border border-slate-100">
<a class="px-4 py-1.5 text-sm font-medium text-slate-600 hover:text-primary hover:bg-white rounded-md transition-colors" href="#">Visão Geral</a>
<a class="px-4 py-1.5 text-sm font-medium text-slate-900 bg-white shadow-sm rounded-md border border-slate-200" href="#">Desempenho</a>
<a class="px-4 py-1.5 text-sm font-medium text-slate-600 hover:text-primary hover:bg-white rounded-md transition-colors" href="#">Escolas</a>
<a class="px-4 py-1.5 text-sm font-medium text-slate-600 hover:text-primary hover:bg-white rounded-md transition-colors" href="#">Alunos</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="hidden lg:flex items-center bg-slate-100 rounded-lg px-3 py-2 w-64 border border-slate-200 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary/20 transition-all">
<span class="material-symbols-outlined text-slate-400 text-[20px]">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full text-slate-700 placeholder:text-slate-400" placeholder="Buscar escola, aluno ou ID..." type="text"/>
</div>
<div class="flex items-center gap-3 border-l border-slate-200 pl-6">
<button class="relative text-slate-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 size-2 bg-red-500 rounded-full border-2 border-white"></span>
</button>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-sm font-bold text-slate-900">Ana Silva</p>
<p class="text-xs text-slate-500">Secretária de Educação</p>
</div>
<div class="size-10 rounded-full bg-slate-200 bg-cover bg-center border-2 border-white shadow-sm" data-alt="Portrait of the Secretary of Education" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDGyOsL7dTeYg1O-DK9f8cqFzGd7qkq0Aa-8eMEF8xO5s_2ePr5x-Cz63TztmFCOBoPTTuK4R8tTmGFZG05o9FNKaevrXsI8osMRXsK8qVwpCeDVxOEFbasyIXHclkf7wR5-8IP7vcp2v4p-MHurPV6N1xm0pPlZg0KyZ1LRUJItKiNmoquJO4jxClo6RNAaYEJfQ2Vx-UBBS4zUaKG5MJBedMpFpIkOPAikTM4OfTqr5AUCrVfy_sytyr5Os1MnPrhVCfyAIZT5eU');"></div>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="flex-1 p-6 lg:p-8 max-w-[1440px] mx-auto w-full">
<!-- Breadcrumbs & Actions -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<div class="flex items-center gap-2 text-sm text-slate-500 mb-2">
<a class="hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Dashboard</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-slate-900 font-medium">Fase 2: Comparativo de Rede</span>
</div>
<h1 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">Painel de Desempenho Acadêmico</h1>
<p class="text-slate-500 mt-1">Análise estratégica comparativa da rede municipal de ensino de Xinguara.</p>
</div>
<div class="flex flex-wrap gap-3 items-center">
<div class="flex items-center gap-2 bg-white border border-slate-200 rounded-lg p-1 shadow-sm">
<button class="px-3 py-1.5 text-xs font-medium bg-primary/10 text-primary rounded">1º Sem 2024</button>
<button class="px-3 py-1.5 text-xs font-medium text-slate-500 hover:bg-slate-50 rounded">2º Sem 2023</button>
</div>
<button class="flex items-center gap-2 bg-primary hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-medium shadow-sm transition-colors shadow-blue-900/10">
<span class="material-symbols-outlined text-[20px]">description</span>
                        Gerar Relatório Pedagógico
                    </button>
</div>
</div>
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
<!-- KPI 1 -->
<div class="bg-surface-light p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
<div class="flex justify-between items-start mb-4">
<div class="bg-blue-50 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined">monitoring</span>
</div>
<span class="flex items-center text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded text-xs font-bold">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_up</span> +0.3%
                        </span>
</div>
<p class="text-slate-500 text-sm font-medium mb-1">Média Geral da Rede</p>
<h3 class="text-3xl font-bold text-slate-900">7.4</h3>
<div class="w-full bg-slate-100 h-1.5 mt-3 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 74%"></div>
</div>
</div>
<!-- KPI 2 -->
<div class="bg-surface-light p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
<div class="flex justify-between items-start mb-4">
<div class="bg-purple-50 p-2 rounded-lg text-purple-600">
<span class="material-symbols-outlined">auto_graph</span>
</div>
<span class="flex items-center text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded text-xs font-bold">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_up</span> +0.1%
                        </span>
</div>
<p class="text-slate-500 text-sm font-medium mb-1">IDEP Projetado</p>
<h3 class="text-3xl font-bold text-slate-900">5.2</h3>
<p class="text-xs text-slate-400 mt-2">Meta anual: 5.5</p>
</div>
<!-- KPI 3 -->
<div class="bg-surface-light p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
<div class="flex justify-between items-start mb-4">
<div class="bg-amber-50 p-2 rounded-lg text-amber-600">
<span class="material-symbols-outlined">groups</span>
</div>
<span class="flex items-center text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded text-xs font-bold">
<span class="material-symbols-outlined text-[14px] mr-0.5">trending_up</span> +2.5%
                        </span>
</div>
<p class="text-slate-500 text-sm font-medium mb-1">Alunos Avaliados</p>
<h3 class="text-3xl font-bold text-slate-900">12.450</h3>
<p class="text-xs text-slate-400 mt-2">98% de participação</p>
</div>
<!-- KPI 4 -->
<div class="bg-surface-light p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow group">
<div class="flex justify-between items-start mb-4">
<div class="bg-rose-50 p-2 rounded-lg text-rose-600">
<span class="material-symbols-outlined">warning</span>
</div>
<span class="flex items-center text-rose-600 bg-rose-50 px-2 py-0.5 rounded text-xs font-bold">
<span class="material-symbols-outlined text-[14px] mr-0.5">priority_high</span> 8.5%
                        </span>
</div>
<p class="text-slate-500 text-sm font-medium mb-1">Taxa de Risco</p>
<h3 class="text-3xl font-bold text-slate-900">1.058</h3>
<p class="text-xs text-slate-400 mt-2">Alunos abaixo do básico</p>
</div>
</div>
<!-- Main Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
<!-- Spider Chart Section (Left Column) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<div class="bg-surface-light rounded-xl border border-slate-200 shadow-sm p-6 h-full flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-bold text-slate-900">Média por Disciplina</h3>
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</div>
<!-- CSS-only Spider/Radar Chart Representation -->
<div class="relative flex-1 min-h-[300px] flex items-center justify-center">
<!-- Background Grid Circles -->
<div class="absolute inset-0 flex items-center justify-center">
<div class="w-[80%] aspect-square rounded-full border border-slate-100"></div>
<div class="w-[60%] aspect-square rounded-full border border-slate-100 absolute"></div>
<div class="w-[40%] aspect-square rounded-full border border-slate-100 absolute"></div>
<div class="w-[20%] aspect-square rounded-full border border-slate-100 absolute"></div>
<!-- Axis Lines -->
<div class="absolute w-full h-px bg-slate-100 rotate-0"></div>
<div class="absolute w-full h-px bg-slate-100 rotate-90"></div>
<div class="absolute w-full h-px bg-slate-100 rotate-45"></div>
<div class="absolute w-full h-px bg-slate-100 -rotate-45"></div>
</div>
<!-- Data Shape (Polygon Clip Path approximation for visualization) -->
<div class="absolute w-[65%] aspect-square bg-primary/20" style="clip-path: polygon(50% 5%, 90% 35%, 80% 90%, 20% 85%, 10% 35%);"></div>
<div class="absolute w-[65%] aspect-square border-2 border-primary" style="clip-path: polygon(50% 5%, 90% 35%, 80% 90%, 20% 85%, 10% 35%);"></div>
<!-- Labels -->
<div class="absolute top-4 text-xs font-bold text-slate-600 bg-white px-1">Matemática (7.2)</div>
<div class="absolute bottom-10 right-4 text-xs font-bold text-slate-600 bg-white px-1">Ciências (6.8)</div>
<div class="absolute bottom-10 left-4 text-xs font-bold text-slate-600 bg-white px-1">História (7.5)</div>
<div class="absolute top-[30%] left-0 text-xs font-bold text-slate-600 bg-white px-1">Português (7.8)</div>
<div class="absolute top-[30%] right-0 text-xs font-bold text-slate-600 bg-white px-1">Geografia (6.9)</div>
</div>
<div class="mt-4 flex justify-center gap-6">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary"></span>
<span class="text-sm text-slate-600">Período Atual</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-slate-300"></span>
<span class="text-sm text-slate-400">Período Anterior</span>
</div>
</div>
</div>
</div>
<!-- Ranking & List (Right Column) -->
<div class="lg:col-span-8 flex flex-col gap-6">
<div class="bg-surface-light rounded-xl border border-slate-200 shadow-sm p-6 flex-1">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
<h3 class="text-lg font-bold text-slate-900">Ranking Comparativo de Escolas</h3>
<div class="flex gap-2 overflow-x-auto pb-2 sm:pb-0">
<button class="px-3 py-1 text-xs font-medium bg-primary text-white rounded-full whitespace-nowrap">Todas</button>
<button class="px-3 py-1 text-xs font-medium bg-slate-100 text-slate-600 hover:bg-slate-200 rounded-full whitespace-nowrap">Zona Urbana</button>
<button class="px-3 py-1 text-xs font-medium bg-slate-100 text-slate-600 hover:bg-slate-200 rounded-full whitespace-nowrap">Zona Rural</button>
<button class="px-3 py-1 text-xs font-medium bg-slate-100 text-slate-600 hover:bg-slate-200 rounded-full whitespace-nowrap">Fund. I</button>
<button class="px-3 py-1 text-xs font-medium bg-slate-100 text-slate-600 hover:bg-slate-200 rounded-full whitespace-nowrap">Fund. II</button>
</div>
</div>
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-sm text-left">
<thead class="text-xs text-slate-500 uppercase bg-slate-50 border-b border-slate-200">
<tr>
<th class="px-4 py-3 font-semibold">Rank</th>
<th class="px-4 py-3 font-semibold">Escola</th>
<th class="px-4 py-3 font-semibold">Zona</th>
<th class="px-4 py-3 font-semibold">Nível</th>
<th class="px-4 py-3 font-semibold text-right">Média Geral</th>
<th class="px-4 py-3 font-semibold text-right">Tendência</th>
<th class="px-4 py-3 font-semibold text-center">Ação</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<!-- Row 1 -->
<tr class="bg-white hover:bg-slate-50 transition-colors group">
<td class="px-4 py-3 font-bold text-primary">#01</td>
<td class="px-4 py-3 font-medium text-slate-900">Escola Municipal Tancredo Neves</td>
<td class="px-4 py-3"><span class="flex items-center gap-1 text-slate-600"><span class="material-symbols-outlined text-[16px]">apartment</span> Urbana</span></td>
<td class="px-4 py-3"><span class="px-2 py-0.5 rounded bg-blue-50 text-primary text-xs font-bold">Fund. II</span></td>
<td class="px-4 py-3 text-right font-bold text-slate-900">8.9</td>
<td class="px-4 py-3 text-right text-emerald-600 font-bold flex justify-end items-center gap-1"><span class="material-symbols-outlined text-[16px]">trending_up</span> +0.4</td>
<td class="px-4 py-3 text-center">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
<!-- Row 2 -->
<tr class="bg-white hover:bg-slate-50 transition-colors group">
<td class="px-4 py-3 font-bold text-primary">#02</td>
<td class="px-4 py-3 font-medium text-slate-900">Escola Cora Coralina</td>
<td class="px-4 py-3"><span class="flex items-center gap-1 text-slate-600"><span class="material-symbols-outlined text-[16px]">apartment</span> Urbana</span></td>
<td class="px-4 py-3"><span class="px-2 py-0.5 rounded bg-orange-50 text-orange-600 text-xs font-bold">Fund. I</span></td>
<td class="px-4 py-3 text-right font-bold text-slate-900">8.7</td>
<td class="px-4 py-3 text-right text-emerald-600 font-bold flex justify-end items-center gap-1"><span class="material-symbols-outlined text-[16px]">trending_up</span> +0.2</td>
<td class="px-4 py-3 text-center">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
<!-- Row 3 -->
<tr class="bg-white hover:bg-slate-50 transition-colors group">
<td class="px-4 py-3 font-bold text-primary">#03</td>
<td class="px-4 py-3 font-medium text-slate-900">Escola Rural Boa Esperança</td>
<td class="px-4 py-3"><span class="flex items-center gap-1 text-slate-600"><span class="material-symbols-outlined text-[16px]">agriculture</span> Rural</span></td>
<td class="px-4 py-3"><span class="px-2 py-0.5 rounded bg-blue-50 text-primary text-xs font-bold">Fund. II</span></td>
<td class="px-4 py-3 text-right font-bold text-slate-900">8.4</td>
<td class="px-4 py-3 text-right text-slate-500 font-bold flex justify-end items-center gap-1"><span class="material-symbols-outlined text-[16px]">remove</span> 0.0</td>
<td class="px-4 py-3 text-center">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
<!-- Row 4 -->
<tr class="bg-white hover:bg-slate-50 transition-colors group">
<td class="px-4 py-3 font-bold text-slate-400">#04</td>
<td class="px-4 py-3 font-medium text-slate-900">C.E.M. Girassol</td>
<td class="px-4 py-3"><span class="flex items-center gap-1 text-slate-600"><span class="material-symbols-outlined text-[16px]">apartment</span> Urbana</span></td>
<td class="px-4 py-3"><span class="px-2 py-0.5 rounded bg-orange-50 text-orange-600 text-xs font-bold">Fund. I</span></td>
<td class="px-4 py-3 text-right font-bold text-slate-900">7.9</td>
<td class="px-4 py-3 text-right text-rose-500 font-bold flex justify-end items-center gap-1"><span class="material-symbols-outlined text-[16px]">trending_down</span> -0.3</td>
<td class="px-4 py-3 text-center">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
<!-- Row 5 -->
<tr class="bg-white hover:bg-slate-50 transition-colors group">
<td class="px-4 py-3 font-bold text-slate-400">#05</td>
<td class="px-4 py-3 font-medium text-slate-900">Escola Paulo Freire</td>
<td class="px-4 py-3"><span class="flex items-center gap-1 text-slate-600"><span class="material-symbols-outlined text-[16px]">apartment</span> Urbana</span></td>
<td class="px-4 py-3"><span class="px-2 py-0.5 rounded bg-blue-50 text-primary text-xs font-bold">Fund. II</span></td>
<td class="px-4 py-3 text-right font-bold text-slate-900">7.8</td>
<td class="px-4 py-3 text-right text-emerald-600 font-bold flex justify-end items-center gap-1"><span class="material-symbols-outlined text-[16px]">trending_up</span> +0.1</td>
<td class="px-4 py-3 text-center">
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-4 flex items-center justify-center text-sm text-primary font-medium cursor-pointer hover:underline">
                            Ver ranking completo (42 escolas)
                        </div>
</div>
</div>
</div>
<!-- Bottom Row: Disparity & Distribution -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<!-- Disparity Analysis -->
<div class="bg-surface-light rounded-xl border border-slate-200 shadow-sm p-6">
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="text-lg font-bold text-slate-900">Análise de Disparidade</h3>
<p class="text-sm text-slate-500">Top 5 (Melhor Desempenho) vs Bottom 5 (Atenção Prioritária)</p>
</div>
<button class="text-primary hover:bg-blue-50 p-2 rounded-lg transition-colors">
<span class="material-symbols-outlined">filter_list</span>
</button>
</div>
<div class="space-y-4">
<!-- Top School 1 -->
<div class="group relative">
<div class="flex justify-between text-sm mb-1">
<span class="font-medium text-slate-700">Tancredo Neves</span>
<span class="font-bold text-emerald-600">8.9</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-emerald-500 rounded-full" style="width: 89%"></div>
</div>
</div>
<!-- Top School 2 -->
<div class="group relative">
<div class="flex justify-between text-sm mb-1">
<span class="font-medium text-slate-700">Cora Coralina</span>
<span class="font-bold text-emerald-600">8.7</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-emerald-400 rounded-full" style="width: 87%"></div>
</div>
</div>
<!-- Divider -->
<div class="h-px bg-slate-200 my-4 border-dashed border-b border-slate-300"></div>
<!-- Bottom School 1 -->
<div class="group relative">
<div class="flex justify-between text-sm mb-1">
<span class="font-medium text-slate-700">Escola Rio Vermelho</span>
<span class="font-bold text-rose-600">4.8</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-rose-400 rounded-full" style="width: 48%"></div>
</div>
</div>
<!-- Bottom School 2 -->
<div class="group relative">
<div class="flex justify-between text-sm mb-1">
<span class="font-medium text-slate-700">Escola Santa Maria</span>
<span class="font-bold text-rose-600">4.2</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-rose-500 rounded-full" style="width: 42%"></div>
</div>
</div>
<!-- Bottom School 3 -->
<div class="group relative">
<div class="flex justify-between text-sm mb-1">
<span class="font-medium text-slate-700">Escola Novo Horizonte</span>
<span class="font-bold text-rose-600">3.9</span>
</div>
<div class="h-2 w-full bg-slate-100 rounded-full overflow-hidden">
<div class="h-full bg-rose-600 rounded-full" style="width: 39%"></div>
</div>
</div>
</div>
<div class="mt-5 bg-rose-50 border border-rose-100 p-3 rounded-lg flex items-start gap-3">
<span class="material-symbols-outlined text-rose-600">warning</span>
<p class="text-xs text-rose-800 leading-relaxed">
<strong>Atenção:</strong> 3 escolas apresentam média abaixo do nível crítico (5.0). Recomenda-se agendar visita pedagógica.
                        </p>
</div>
</div>
<!-- Grade Distribution -->
<div class="bg-surface-light rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col">
<h3 class="text-lg font-bold text-slate-900 mb-6">Distribuição de Notas (Histograma)</h3>
<div class="flex-1 flex items-end justify-between gap-2 px-2 pb-6 min-h-[200px] border-b border-slate-100">
<!-- Bar 1 -->
<div class="flex flex-col items-center gap-2 group w-1/4">
<div class="text-xs font-bold text-rose-600 opacity-0 group-hover:opacity-100 transition-opacity">15%</div>
<div class="w-full bg-rose-100 rounded-t-lg relative hover:bg-rose-200 transition-colors h-[60px]">
<div class="absolute bottom-0 w-full bg-rose-500 rounded-t-lg h-[40%]"></div>
</div>
<p class="text-[10px] md:text-xs font-medium text-slate-500 text-center">Abaixo do Básico<br/>(&lt; 5.0)</p>
</div>
<!-- Bar 2 -->
<div class="flex flex-col items-center gap-2 group w-1/4">
<div class="text-xs font-bold text-amber-600 opacity-0 group-hover:opacity-100 transition-opacity">25%</div>
<div class="w-full bg-amber-100 rounded-t-lg relative hover:bg-amber-200 transition-colors h-[100px]">
<div class="absolute bottom-0 w-full bg-amber-500 rounded-t-lg h-[60%]"></div>
</div>
<p class="text-[10px] md:text-xs font-medium text-slate-500 text-center">Básico<br/>(5.0 - 6.9)</p>
</div>
<!-- Bar 3 -->
<div class="flex flex-col items-center gap-2 group w-1/4">
<div class="text-xs font-bold text-primary opacity-0 group-hover:opacity-100 transition-opacity">40%</div>
<div class="w-full bg-blue-100 rounded-t-lg relative hover:bg-blue-200 transition-colors h-[160px]">
<div class="absolute bottom-0 w-full bg-primary rounded-t-lg h-[85%]"></div>
</div>
<p class="text-[10px] md:text-xs font-medium text-slate-500 text-center">Adequado<br/>(7.0 - 8.9)</p>
</div>
<!-- Bar 4 -->
<div class="flex flex-col items-center gap-2 group w-1/4">
<div class="text-xs font-bold text-emerald-600 opacity-0 group-hover:opacity-100 transition-opacity">20%</div>
<div class="w-full bg-emerald-100 rounded-t-lg relative hover:bg-emerald-200 transition-colors h-[80px]">
<div class="absolute bottom-0 w-full bg-emerald-500 rounded-t-lg h-[50%]"></div>
</div>
<p class="text-[10px] md:text-xs font-medium text-slate-500 text-center">Avançado<br/>(9.0+)</p>
</div>
</div>
<div class="mt-4 flex gap-4 text-xs text-slate-500">
<div class="flex items-center gap-2">
<div class="w-2 h-2 bg-primary rounded-full"></div> Maioria dos alunos
                         </div>
<div class="flex items-center gap-2">
<div class="w-2 h-2 bg-rose-500 rounded-full"></div> Ponto de atenção
                        </div>
</div>
</div>
</div>
</main>
</div>
</body></html>