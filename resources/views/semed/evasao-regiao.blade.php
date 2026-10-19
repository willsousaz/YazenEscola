<!DOCTYPE html>

<html lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistema de Gestão Escolar - Xinguara</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1754cf",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111621",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Lexend', sans-serif; }
        .chart-bar { transition: width 0.3s ease; }
    </style>
</head>
<body class="bg-background-light text-slate-900 min-h-screen">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 bg-white border-b border-slate-200 px-6 py-3 flex items-center justify-between">
<div class="flex items-center gap-6">
<div class="flex items-center gap-3 text-primary">
<div class="bg-primary/10 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary text-2xl">school</span>
</div>
<div>
<h1 class="text-sm font-bold leading-tight">SEMEC Xinguara</h1>
<p class="text-[10px] uppercase tracking-wider font-medium text-slate-500">Gestão Municipal</p>
</div>
</div>
<nav class="hidden md:flex items-center gap-6 ml-4">
<a class="text-slate-600 hover:text-primary text-sm font-medium transition-colors" href="#">Dashboard</a>
<a class="text-primary border-b-2 border-primary text-sm font-semibold pb-1" href="#">Relatórios</a>
<a class="text-slate-600 hover:text-primary text-sm font-medium transition-colors" href="#">Escolas</a>
<a class="text-slate-600 hover:text-primary text-sm font-medium transition-colors" href="#">Alunos</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="pl-10 pr-4 py-1.5 bg-slate-100 border-none rounded-lg text-sm w-64 focus:ring-2 focus:ring-primary/20" placeholder="Buscar relatório..." type="text"/>
</div>
<button class="p-2 text-slate-500 hover:bg-slate-100 rounded-full relative">
<span class="material-symbols-outlined text-xl">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
</button>
<div class="flex items-center gap-3 pl-4 border-l border-slate-200">
<div class="text-right hidden sm:block">
<p class="text-xs font-bold text-slate-800">Admin Regional</p>
<p class="text-[10px] text-slate-500">Secretaria de Educação</p>
</div>
<div class="w-9 h-9 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold overflow-hidden">
<img alt="Avatar" class="w-full h-full object-cover" data-alt="User profile picture of a school administrator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiqlzqZDLC5eojn9JcpKBbkHCCrBvVy5oki3rB5nbNmLCQknO-KC_VdevemlUiK2RoB52pXwa9cPYPVGmQbUQGqMTx_ull6C-V9KOyRb84HCQzcJXWboQGtse0u4ykMybDCevZhRwJOoXko6fd-mKX2SiZ6UNalyO2nIii-cVVeLZBFGNlvx3aqqe23xXKU3zjhozTN4LAiJk6dWWqOkO0vihyOUbA-UxG0PDKroM9943lZQOyVZis02UifuA3EGqC0P1hmhvYUn4"/>
</div>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto p-6 space-y-6">
<!-- Dashboard Header & Filters -->
<div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
<div class="space-y-1">
<div class="flex items-center gap-2 text-primary font-semibold text-sm">
<span class="material-symbols-outlined text-sm">analytics</span>
<span>Análise de Retenção Escolar</span>
</div>
<h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Relatório Detalhado de Evasão por Região</h2>
<p class="text-slate-500 text-sm">Dados consolidados do município de Xinguara • Atualizado em 24 de Out, 2024</p>
</div>
<div class="flex flex-wrap items-center gap-3">
<div class="flex items-center bg-white border border-slate-200 rounded-lg px-3 py-1.5 gap-2 shadow-sm">
<span class="material-symbols-outlined text-slate-400 text-sm">calendar_month</span>
<select class="border-none bg-transparent text-sm font-medium focus:ring-0 p-0 pr-8">
<option>Ano Letivo: 2024</option>
<option>Ano Letivo: 2023</option>
</select>
</div>
<div class="flex items-center bg-white border border-slate-200 rounded-lg px-3 py-1.5 gap-2 shadow-sm">
<span class="material-symbols-outlined text-slate-400 text-sm">layers</span>
<select class="border-none bg-transparent text-sm font-medium focus:ring-0 p-0 pr-8">
<option>Nível: Todos</option>
<option>Ensino Fundamental I</option>
<option>Ensino Fundamental II</option>
<option>EJA</option>
</select>
</div>
<div class="flex items-center bg-white border border-slate-200 rounded-lg px-3 py-1.5 gap-2 shadow-sm">
<span class="material-symbols-outlined text-slate-400 text-sm">location_on</span>
<select class="border-none bg-transparent text-sm font-medium focus:ring-0 p-0 pr-8">
<option>Região: Todas</option>
<option>Urbana</option>
<option>Rural Norte</option>
<option>Rural Sul</option>
</select>
</div>
<div class="flex items-center bg-slate-800 text-white rounded-lg p-1 shadow-sm">
<button class="p-1.5 hover:bg-slate-700 rounded transition-colors" title="Exportar PDF"><span class="material-symbols-outlined text-sm">picture_as_pdf</span></button>
<button class="p-1.5 hover:bg-slate-700 rounded transition-colors border-l border-slate-700" title="Exportar CSV"><span class="material-symbols-outlined text-sm">csv</span></button>
<button class="p-1.5 hover:bg-slate-700 rounded transition-colors border-l border-slate-700" title="Exportar Excel"><span class="material-symbols-outlined text-sm">table_chart</span></button>
</div>
</div>
</div>
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="bg-primary/10 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined">person_off</span>
</div>
<span class="text-xs font-bold text-red-500 bg-red-50 px-2 py-1 rounded-full">+12.4% vs 2023</span>
</div>
<p class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Total de Evasões</p>
<h3 class="text-2xl font-bold text-slate-900 mt-1">1.248</h3>
<div class="mt-4 w-full bg-slate-100 h-1 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[65%]"></div>
</div>
</div>
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="bg-orange-100 p-2 rounded-lg text-orange-600">
<span class="material-symbols-outlined">percent</span>
</div>
<span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">-0.5% vs Jun</span>
</div>
<p class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Taxa de Evasão</p>
<h3 class="text-2xl font-bold text-slate-900 mt-1">4,2%</h3>
<p class="text-[10px] text-slate-400 mt-4 leading-none italic">Meta municipal: &lt; 3.0%</p>
</div>
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="bg-red-100 p-2 rounded-lg text-red-600">
<span class="material-symbols-outlined">warning</span>
</div>
<span class="text-xs font-bold text-slate-500 bg-slate-100 px-2 py-1 rounded-full">Sem alteração</span>
</div>
<p class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Regiões Críticas</p>
<h3 class="text-2xl font-bold text-slate-900 mt-1">06</h3>
<div class="flex -space-x-2 mt-4">
<div class="w-6 h-6 rounded-full border-2 border-white bg-red-400"></div>
<div class="w-6 h-6 rounded-full border-2 border-white bg-red-400"></div>
<div class="w-6 h-6 rounded-full border-2 border-white bg-red-400"></div>
<div class="w-6 h-6 rounded-full border-2 border-white bg-slate-200 flex items-center justify-center text-[8px] font-bold">+3</div>
</div>
</div>
<div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="bg-blue-100 p-2 rounded-lg text-blue-600">
<span class="material-symbols-outlined">face</span>
</div>
<span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Maioria: Masc.</span>
</div>
<p class="text-slate-500 text-xs font-semibold uppercase tracking-wider">Idade Média</p>
<h3 class="text-2xl font-bold text-slate-900 mt-1">14,2 anos</h3>
<p class="text-[10px] text-slate-400 mt-4 leading-none italic">Concentração: 8º e 9º ano</p>
</div>
</div>
<!-- Middle Section: Map/Regions and Reasons Chart -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Geographic Distribution List -->
<div class="lg:col-span-1 bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col overflow-hidden">
<div class="p-5 border-b border-slate-100 flex justify-between items-center">
<h4 class="font-bold text-slate-800">Risco por Região</h4>
<button class="text-primary text-xs font-semibold hover:underline">Ver Mapa</button>
</div>
<div class="flex-1 overflow-y-auto p-4 space-y-4">
<!-- Region Item -->
<div class="p-3 bg-slate-50 rounded-lg flex items-center justify-between border-l-4 border-red-500">
<div>
<p class="text-sm font-bold text-slate-800">Rural Norte</p>
<p class="text-[10px] text-slate-500 uppercase font-medium">Distrito de Itaqueral</p>
</div>
<div class="text-right">
<p class="text-sm font-bold text-red-600">8.4%</p>
<span class="text-[9px] font-bold px-1.5 py-0.5 bg-red-100 text-red-700 rounded uppercase">Alto Risco</span>
</div>
</div>
<!-- Region Item -->
<div class="p-3 bg-slate-50 rounded-lg flex items-center justify-between border-l-4 border-orange-500">
<div>
<p class="text-sm font-bold text-slate-800">Urbana Central</p>
<p class="text-[10px] text-slate-500 uppercase font-medium">Sede do Município</p>
</div>
<div class="text-right">
<p class="text-sm font-bold text-orange-600">4.1%</p>
<span class="text-[9px] font-bold px-1.5 py-0.5 bg-orange-100 text-orange-700 rounded uppercase">Médio Risco</span>
</div>
</div>
<!-- Region Item -->
<div class="p-3 bg-slate-50 rounded-lg flex items-center justify-between border-l-4 border-green-500">
<div>
<p class="text-sm font-bold text-slate-800">Rural Sul</p>
<p class="text-[10px] text-slate-500 uppercase font-medium">Vila São José</p>
</div>
<div class="text-right">
<p class="text-sm font-bold text-green-600">2.2%</p>
<span class="text-[9px] font-bold px-1.5 py-0.5 bg-green-100 text-green-700 rounded uppercase">Baixo Risco</span>
</div>
</div>
<!-- Region Item -->
<div class="p-3 bg-slate-50 rounded-lg flex items-center justify-between border-l-4 border-red-500">
<div>
<p class="text-sm font-bold text-slate-800">Urbana Leste</p>
<p class="text-[10px] text-slate-500 uppercase font-medium">Bairro Novo Horizonte</p>
</div>
<div class="text-right">
<p class="text-sm font-bold text-red-600">7.8%</p>
<span class="text-[9px] font-bold px-1.5 py-0.5 bg-red-100 text-red-700 rounded uppercase">Alto Risco</span>
</div>
</div>
</div>
<div class="p-3 bg-slate-50 border-t border-slate-100">
<img alt="Mapa" class="w-full h-24 object-cover rounded border border-slate-200" data-alt="Simplified map visualization of Xinguara regions" data-location="Xinguara" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhs0VyNjgIomptibsytWYBD3yzebOneXa28RnnhToNrhitDhSiM1BUeS1Dis_lqb8WszE5mTMj2m5PiQoie0tilkOA6mb1A5D3LpioXeIUnRrM2RJJ3qul-OL5tB5MMK8iH_5TqB0jFgENUhr-fs7kuFBNoc-g9rVkfKL-wkuZQFgVN2bH6DIx3l9NnFMCyZrk6qpnit7ssCglYlD4Q0Lco-ktSSK0Gl0yVgafsoU_fgLsQTC-veKugYIdTB2Xw8lmw4vIyc7Hmrc"/>
</div>
</div>
<!-- Main Comparative Chart & Reasons Analysis -->
<div class="lg:col-span-2 space-y-6">
<!-- Comparative Time Chart Placeholder -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5 h-64 relative overflow-hidden">
<div class="flex justify-between items-center mb-6">
<h4 class="font-bold text-slate-800">Evolução de Evasão por Trimestre</h4>
<div class="flex gap-4">
<div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-primary"></span><span class="text-[10px] font-medium text-slate-500">Urbana</span></div>
<div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-orange-400"></span><span class="text-[10px] font-medium text-slate-500">Rural</span></div>
</div>
</div>
<div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-slate-50 to-transparent flex items-end px-8 pb-8 justify-between">
<div class="w-12 bg-primary h-24 rounded-t-lg"></div>
<div class="w-12 bg-orange-400 h-32 rounded-t-lg"></div>
<div class="w-12 bg-primary h-28 rounded-t-lg"></div>
<div class="w-12 bg-orange-400 h-20 rounded-t-lg"></div>
<div class="w-12 bg-primary h-36 rounded-t-lg"></div>
<div class="w-12 bg-orange-400 h-40 rounded-t-lg"></div>
<div class="w-12 bg-primary h-32 rounded-t-lg"></div>
<div class="w-12 bg-orange-400 h-28 rounded-t-lg"></div>
</div>
</div>
<!-- Reasons for Dropout -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5">
<h4 class="font-bold text-slate-800 mb-6">Principais Motivos de Evasão</h4>
<div class="space-y-5">
<div class="space-y-1.5">
<div class="flex justify-between text-xs font-semibold">
<span class="text-slate-700 uppercase tracking-tighter">Mudança de Domicílio / Família</span>
<span class="text-primary">42%</span>
</div>
<div class="w-full bg-slate-100 h-2.5 rounded-full">
<div class="bg-primary h-full w-[42%] rounded-full"></div>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between text-xs font-semibold">
<span class="text-slate-700 uppercase tracking-tighter">Trabalho Infantil / Necessidade Financeira</span>
<span class="text-primary">28%</span>
</div>
<div class="w-full bg-slate-100 h-2.5 rounded-full">
<div class="bg-primary/80 h-full w-[28%] rounded-full"></div>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between text-xs font-semibold">
<span class="text-slate-700 uppercase tracking-tighter">Dificuldade de Acesso / Transporte</span>
<span class="text-primary">18%</span>
</div>
<div class="w-full bg-slate-100 h-2.5 rounded-full">
<div class="bg-primary/60 h-full w-[18%] rounded-full"></div>
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between text-xs font-semibold">
<span class="text-slate-700 uppercase tracking-tighter">Baixo Desempenho / Desmotivação</span>
<span class="text-primary">12%</span>
</div>
<div class="w-full bg-slate-100 h-2.5 rounded-full">
<div class="bg-primary/40 h-full w-[12%] rounded-full"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Detailed School Table -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
<div class="p-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
<div>
<h4 class="font-bold text-slate-800">Ranking de Escolas por Taxa de Evasão</h4>
<p class="text-xs text-slate-500">Listagem detalhada das unidades críticas</p>
</div>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 border border-slate-200 rounded-lg text-xs font-bold hover:bg-slate-50 transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-sm">filter_list</span> Filtrar
                    </button>
<button class="px-3 py-1.5 border border-slate-200 rounded-lg text-xs font-bold hover:bg-slate-50 transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-sm">sort_by_alpha</span> Ordenar
                    </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50/50">
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Nome da Escola</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Região</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider text-center">Matrículas</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider text-center">Evasões</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Taxa %</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider">Status</th>
<th class="px-6 py-4 text-[10px] font-bold text-slate-500 uppercase tracking-wider text-right">Ação</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100">
<tr class="hover:bg-slate-50 transition-colors group">
<td class="px-6 py-4">
<p class="text-sm font-bold text-slate-800">Escola Municipal Dom Pedro II</p>
<p class="text-[10px] text-slate-500">INEP: 15203045</p>
</td>
<td class="px-6 py-4">
<span class="text-xs font-medium text-slate-600 px-2 py-1 bg-slate-100 rounded">Rural Norte</span>
</td>
<td class="px-6 py-4 text-center text-sm text-slate-700">450</td>
<td class="px-6 py-4 text-center text-sm font-semibold text-slate-700">48</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-red-600">10,6%</span>
<span class="material-symbols-outlined text-red-500 text-sm">trending_up</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-700">CRÍTICO</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50 transition-colors group">
<td class="px-6 py-4">
<p class="text-sm font-bold text-slate-800">E.M. João de Barro</p>
<p class="text-[10px] text-slate-500">INEP: 15204056</p>
</td>
<td class="px-6 py-4">
<span class="text-xs font-medium text-slate-600 px-2 py-1 bg-slate-100 rounded">Urbana Leste</span>
</td>
<td class="px-6 py-4 text-center text-sm text-slate-700">820</td>
<td class="px-6 py-4 text-center text-sm font-semibold text-slate-700">62</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-orange-600">7,5%</span>
<span class="material-symbols-outlined text-orange-500 text-sm">trending_flat</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100 text-orange-700">ALTO</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50 transition-colors group">
<td class="px-6 py-4">
<p class="text-sm font-bold text-slate-800">Colégio Municipal Tancredo Neves</p>
<p class="text-[10px] text-slate-500">INEP: 15208092</p>
</td>
<td class="px-6 py-4">
<span class="text-xs font-medium text-slate-600 px-2 py-1 bg-slate-100 rounded">Urbana Centro</span>
</td>
<td class="px-6 py-4 text-center text-sm text-slate-700">1.150</td>
<td class="px-6 py-4 text-center text-sm font-semibold text-slate-700">38</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-green-600">3,3%</span>
<span class="material-symbols-outlined text-green-500 text-sm">trending_down</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-green-100 text-green-700">CONTROLADO</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">visibility</span></button>
</td>
</tr>
<tr class="hover:bg-slate-50 transition-colors group">
<td class="px-6 py-4">
<p class="text-sm font-bold text-slate-800">E.M. Carlos Drummond de Andrade</p>
<p class="text-[10px] text-slate-500">INEP: 15209021</p>
</td>
<td class="px-6 py-4">
<span class="text-xs font-medium text-slate-600 px-2 py-1 bg-slate-100 rounded">Rural Sul</span>
</td>
<td class="px-6 py-4 text-center text-sm text-slate-700">280</td>
<td class="px-6 py-4 text-center text-sm font-semibold text-slate-700">14</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="text-sm font-bold text-orange-600">5,0%</span>
<span class="material-symbols-outlined text-orange-500 text-sm">trending_up</span>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100 text-orange-700">MÉDIO</span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined">visibility</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-slate-50/80 flex items-center justify-between">
<p class="text-xs text-slate-500">Mostrando 1-4 de 28 escolas</p>
<div class="flex gap-1">
<button class="w-8 h-8 rounded border border-slate-200 flex items-center justify-center text-slate-400 disabled:opacity-50" disabled=""><span class="material-symbols-outlined text-sm">chevron_left</span></button>
<button class="w-8 h-8 rounded bg-primary text-white text-xs font-bold">1</button>
<button class="w-8 h-8 rounded border border-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold hover:bg-white transition-colors">2</button>
<button class="w-8 h-8 rounded border border-slate-200 flex items-center justify-center text-slate-600 text-xs font-bold hover:bg-white transition-colors">3</button>
<button class="w-8 h-8 rounded border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-white transition-colors"><span class="material-symbols-outlined text-sm">chevron_right</span></button>
</div>
</div>
</div>
</main>
<footer class="max-w-7xl mx-auto px-6 py-8 border-t border-slate-200 text-center">
<div class="flex flex-col items-center gap-2">
<div class="flex items-center gap-2 text-primary/60 font-bold text-sm">
<span class="material-symbols-outlined text-lg">shield</span> SEMEC Xinguara
            </div>
<p class="text-xs text-slate-400">© 2024 - Sistema Municipal de Gestão Escolar de Xinguara. Todos os direitos reservados.</p>
</div>
</footer>
</body></html>