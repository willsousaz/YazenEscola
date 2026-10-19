<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Advanced AI Evasion Prediction Panel - Xinguara</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1754cf",
                        "primary-light": "#ebf1ff",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111621",
                        "warning": "#f97316",
                        "success": "#16a34a",
                        "danger": "#dc2626",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"],
                        "sans": ["Lexend", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.375rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
            background: #cbd5e1; 
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 antialiased min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-[#1a202c] px-6 py-3 sticky top-0 z-50">
<div class="flex items-center gap-6">
<div class="flex items-center gap-3 text-slate-900 dark:text-white">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[20px]">school</span>
</div>
<div>
<h2 class="text-base font-bold leading-tight tracking-tight">Municipal School Management</h2>
<p class="text-xs text-slate-500 dark:text-slate-400">Xinguara • Phase 3 AI</p>
</div>
</div>
<div class="hidden md:flex items-center bg-slate-100 dark:bg-slate-800 rounded-lg px-3 py-2 w-64">
<span class="material-symbols-outlined text-slate-500 text-[20px]">search</span>
<input class="bg-transparent border-none text-sm ml-2 w-full focus:ring-0 text-slate-700 dark:text-slate-200 placeholder-slate-400" placeholder="Search student, class, ID..."/>
</div>
</div>
<div class="flex items-center gap-3">
<button class="size-9 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors relative">
<span class="material-symbols-outlined text-[22px]">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-danger rounded-full border-2 border-white dark:border-[#1a202c]"></span>
</button>
<button class="size-9 flex items-center justify-center rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-300 transition-colors">
<span class="material-symbols-outlined text-[22px]">settings</span>
</button>
<div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-1"></div>
<button class="flex items-center gap-2 pl-2">
<div class="size-8 rounded-full bg-gradient-to-br from-primary to-blue-600 text-white flex items-center justify-center text-xs font-bold">
                    AD
                </div>
<div class="hidden lg:block text-left">
<p class="text-sm font-semibold leading-none">Admin Director</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Education Dept.</p>
</div>
</button>
</div>
</header>
<!-- Main Content -->
<main class="flex-1 p-6 lg:p-8 max-w-[1600px] mx-auto w-full">
<!-- Breadcrumbs & Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-1">
<span class="hover:text-primary cursor-pointer">Dashboard</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="hover:text-primary cursor-pointer">Modules</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-medium">Evasion Prediction</span>
</div>
<h1 class="text-3xl font-bold text-slate-900 dark:text-white tracking-tight">Advanced AI Evasion Prediction Panel</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">Real-time analysis of student retention risks and intervention effectiveness.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm text-slate-700 dark:text-slate-200">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    Last 30 Days
                </button>
<button class="flex items-center gap-2 px-4 py-2 bg-primary hover:bg-blue-700 text-white rounded-lg text-sm font-medium transition-colors shadow-md shadow-blue-500/20">
<span class="material-symbols-outlined text-[18px]">download</span>
                    Export Report
                </button>
</div>
</div>
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
<!-- Card 1 -->
<div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden group">
<div class="absolute right-0 top-0 h-full w-1 bg-danger"></div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Students at Risk</p>
<h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">142</h3>
</div>
<div class="size-10 rounded-lg bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-danger">
<span class="material-symbols-outlined">warning</span>
</div>
</div>
<div class="flex items-center gap-2 text-sm">
<span class="flex items-center text-danger font-medium bg-red-50 dark:bg-red-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                        +12%
                    </span>
<span class="text-slate-400">vs last month</span>
</div>
</div>
<!-- Card 2 -->
<div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden">
<div class="absolute right-0 top-0 h-full w-1 bg-primary"></div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Avg. Model Confidence</p>
<h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">94%</h3>
</div>
<div class="size-10 rounded-lg bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">psychology</span>
</div>
</div>
<div class="flex items-center gap-2 text-sm">
<span class="flex items-center text-success font-medium bg-green-50 dark:bg-green-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">arrow_upward</span>
                        +2%
                    </span>
<span class="text-slate-400">accuracy improvement</span>
</div>
</div>
<!-- Card 3 -->
<div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden">
<div class="absolute right-0 top-0 h-full w-1 bg-success"></div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Active Interventions</p>
<h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">68</h3>
</div>
<div class="size-10 rounded-lg bg-green-50 dark:bg-green-900/20 flex items-center justify-center text-success">
<span class="material-symbols-outlined">handshake</span>
</div>
</div>
<div class="flex items-center gap-2 text-sm">
<span class="flex items-center text-success font-medium bg-green-50 dark:bg-green-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">check</span>
                        +5
                    </span>
<span class="text-slate-400">new this week</span>
</div>
</div>
<!-- Card 4 -->
<div class="bg-white dark:bg-slate-800 rounded-xl p-5 border border-slate-200 dark:border-slate-700 shadow-sm relative overflow-hidden">
<div class="absolute right-0 top-0 h-full w-1 bg-slate-300 dark:bg-slate-600"></div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Predicted Evasion Rate</p>
<h3 class="text-3xl font-bold text-slate-900 dark:text-white mt-1">8.5%</h3>
</div>
<div class="size-10 rounded-lg bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">trending_down</span>
</div>
</div>
<div class="flex items-center gap-2 text-sm">
<span class="flex items-center text-success font-medium bg-green-50 dark:bg-green-900/30 px-1.5 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">arrow_downward</span>
                        -1.5%
                    </span>
<span class="text-slate-400">vs historical avg</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
<!-- Prediction Confidence Chart (Takes up 2 cols) -->
<div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm p-6 flex flex-col">
<div class="flex items-center justify-between mb-6">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white">AI Prediction Confidence vs Actual Evasion</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Historical performance of the model over the last 6 months.</p>
</div>
<div class="flex items-center gap-2 text-sm">
<span class="flex items-center gap-1.5">
<span class="size-2.5 rounded-full bg-primary"></span>
<span class="text-slate-600 dark:text-slate-300">AI Confidence</span>
</span>
<span class="flex items-center gap-1.5 ml-3">
<span class="size-2.5 rounded-full bg-slate-300 dark:bg-slate-600"></span>
<span class="text-slate-600 dark:text-slate-300">Actual Rate</span>
</span>
</div>
</div>
<!-- Abstract Chart representation using CSS/SVG -->
<div class="relative h-64 w-full mt-auto">
<!-- Grid Lines -->
<div class="absolute inset-0 flex flex-col justify-between text-xs text-slate-400 dark:text-slate-600 pointer-events-none">
<div class="border-b border-dashed border-slate-100 dark:border-slate-700 w-full h-0"></div>
<div class="border-b border-dashed border-slate-100 dark:border-slate-700 w-full h-0"></div>
<div class="border-b border-dashed border-slate-100 dark:border-slate-700 w-full h-0"></div>
<div class="border-b border-dashed border-slate-100 dark:border-slate-700 w-full h-0"></div>
<div class="border-b border-slate-200 dark:border-slate-700 w-full h-0"></div>
</div>
<!-- Chart SVG -->
<svg class="absolute inset-0 h-full w-full" preserveaspectratio="none" viewbox="0 0 100 50">
<!-- Area gradient -->
<defs>
<lineargradient id="gradientPrimary" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#1754cf" stop-opacity="0.2"></stop>
<stop offset="100%" stop-color="#1754cf" stop-opacity="0"></stop>
</lineargradient>
</defs>
<!-- Path 1 (Actual Rate - Grey) -->
<path d="M0,35 Q10,32 20,38 T40,30 T60,25 T80,32 T100,28" fill="none" stroke="#cbd5e1" stroke-dasharray="2,1" stroke-width="1.5"></path>
<!-- Path 2 (AI Confidence - Blue) -->
<path d="M0,30 Q10,25 20,28 T40,20 T60,15 T80,22 T100,18 L100,50 L0,50 Z" fill="url(#gradientPrimary)"></path>
<path d="M0,30 Q10,25 20,28 T40,20 T60,15 T80,22 T100,18" fill="none" stroke="#1754cf" stroke-width="2"></path>
<!-- Dots -->
<circle class="hover:scale-150 transition-transform cursor-pointer" cx="20" cy="28" fill="#1754cf" r="1.5"></circle>
<circle class="hover:scale-150 transition-transform cursor-pointer" cx="40" cy="20" fill="#1754cf" r="1.5"></circle>
<circle class="hover:scale-150 transition-transform cursor-pointer" cx="60" cy="15" fill="#1754cf" r="1.5"></circle>
<circle class="hover:scale-150 transition-transform cursor-pointer" cx="80" cy="22" fill="#1754cf" r="1.5"></circle>
</svg>
<!-- Tooltip simulated -->
<div class="absolute top-[20%] left-[60%] bg-slate-900 text-white text-xs py-1 px-2 rounded pointer-events-none opacity-80 shadow-lg transform -translate-x-1/2">
                        95% Conf.
                    </div>
</div>
<div class="flex justify-between mt-4 px-2 text-xs font-medium text-slate-400 uppercase tracking-wide">
<span>Aug</span>
<span>Sep</span>
<span>Oct</span>
<span>Nov</span>
<span>Dec</span>
<span>Jan</span>
</div>
</div>
<!-- Intervention Effectiveness (1 col) -->
<div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm p-6 flex flex-col justify-between">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Intervention Effectiveness</h3>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-6">Outcome of students flagged last month.</p>
</div>
<div class="relative flex items-center justify-center py-6">
<!-- Donut Chart Simulated -->
<svg class="transform -rotate-90" height="180" viewbox="0 0 180 180" width="180">
<circle class="dark:stroke-slate-700" cx="90" cy="90" fill="transparent" r="70" stroke="#f1f5f9" stroke-width="20"></circle>
<!-- 70% Saved segment -->
<circle cx="90" cy="90" fill="transparent" r="70" stroke="#1754cf" stroke-dasharray="329 440" stroke-dashoffset="0" stroke-linecap="round" stroke-width="20"></circle>
<!-- 30% Lost segment -->
<circle cx="90" cy="90" fill="transparent" r="70" stroke="#f97316" stroke-dasharray="110 440" stroke-dashoffset="-340" stroke-linecap="round" stroke-width="20"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center">
<span class="text-3xl font-bold text-slate-900 dark:text-white">120</span>
<span class="text-xs text-slate-500 font-medium uppercase">Total Flags</span>
</div>
</div>
<div class="flex flex-col gap-3 mt-4">
<div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50">
<div class="flex items-center gap-3">
<span class="size-3 rounded-full bg-primary"></span>
<span class="text-sm font-medium text-slate-700 dark:text-slate-300">Retained (Success)</span>
</div>
<span class="text-sm font-bold text-primary">85</span>
</div>
<div class="flex items-center justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50">
<div class="flex items-center gap-3">
<span class="size-3 rounded-full bg-warning"></span>
<span class="text-sm font-medium text-slate-700 dark:text-slate-300">Needs Follow-up</span>
</div>
<span class="text-sm font-bold text-warning">35</span>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
<!-- Student Risk List Table (2 cols) -->
<div class="xl:col-span-2 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-col overflow-hidden h-fit">
<div class="p-6 border-b border-slate-200 dark:border-slate-700 flex flex-wrap gap-4 justify-between items-center">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white flex items-center gap-2">
                            High Risk Students
                            <span class="bg-red-100 text-danger text-xs px-2 py-0.5 rounded-full font-bold">14 Priority</span>
</h3>
</div>
<div class="flex gap-2">
<button class="text-slate-500 hover:text-primary dark:text-slate-400 dark:hover:text-white text-sm font-medium">Filter</button>
<button class="text-slate-500 hover:text-primary dark:text-slate-400 dark:hover:text-white text-sm font-medium">Sort by Risk</button>
</div>
</div>
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left text-sm whitespace-nowrap">
<thead class="bg-slate-50 dark:bg-slate-900/50 text-slate-500 dark:text-slate-400 font-medium">
<tr>
<th class="px-6 py-4">Student</th>
<th class="px-6 py-4">Risk Probability</th>
<th class="px-6 py-4">AI Insight (Reason)</th>
<th class="px-6 py-4 text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-700">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xs font-bold">MS</div>
<div>
<p class="font-semibold text-slate-900 dark:text-white">Maria Silva</p>
<p class="text-xs text-slate-500">Grade 11-B</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-24 bg-slate-100 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
<div class="bg-danger h-full rounded-full" style="width: 89%"></div>
</div>
<span class="text-danger font-bold">89%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-medium cursor-help group relative">
<span class="material-symbols-outlined text-[14px]">smart_toy</span>
                                        Grades ↓ 15% + 3 Absences
                                        <!-- Tooltip -->
<div class="hidden group-hover:block absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-64 p-3 bg-slate-900 text-white text-xs rounded-lg z-10 shadow-xl">
<div class="font-bold mb-1">Detailed Insight:</div>
                                            Sudden drop in Math and Science scores combined with consecutive absences on Mondays.
                                            <div class="absolute bottom-[-4px] left-1/2 -translate-x-1/2 size-2 bg-slate-900 rotate-45"></div>
</div>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-primary hover:text-blue-700 font-medium text-sm">Review</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xs font-bold">JO</div>
<div>
<p class="font-semibold text-slate-900 dark:text-white">João Oliveira</p>
<p class="text-xs text-slate-500">Grade 10-A</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-24 bg-slate-100 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
<div class="bg-warning h-full rounded-full" style="width: 74%"></div>
</div>
<span class="text-warning font-bold">74%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-medium cursor-help">
<span class="material-symbols-outlined text-[14px]">smart_toy</span>
                                        Behavioral Flag
                                    </div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-primary hover:text-blue-700 font-medium text-sm">Review</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xs font-bold">AS</div>
<div>
<p class="font-semibold text-slate-900 dark:text-white">Ana Santos</p>
<p class="text-xs text-slate-500">Grade 12-C</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-24 bg-slate-100 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
<div class="bg-warning h-full rounded-full" style="width: 65%"></div>
</div>
<span class="text-warning font-bold">65%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-medium cursor-help">
<span class="material-symbols-outlined text-[14px]">smart_toy</span>
                                        Engagement drop
                                    </div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-primary hover:text-blue-700 font-medium text-sm">Review</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-700/30 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-xs font-bold">CP</div>
<div>
<p class="font-semibold text-slate-900 dark:text-white">Carlos Pereira</p>
<p class="text-xs text-slate-500">Grade 9-B</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-24 bg-slate-100 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
<div class="bg-warning h-full rounded-full" style="width: 62%"></div>
</div>
<span class="text-warning font-bold">62%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-medium cursor-help">
<span class="material-symbols-outlined text-[14px]">smart_toy</span>
                                        Peer Group Risk
                                    </div>
</td>
<td class="px-6 py-4 text-right">
<button class="text-primary hover:text-blue-700 font-medium text-sm">Review</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-slate-50 dark:bg-slate-900/30 border-t border-slate-200 dark:border-slate-700 text-center">
<button class="text-sm font-medium text-slate-500 hover:text-primary transition-colors">View all 142 students</button>
</div>
</div>
<!-- Scenario Simulator (1 col) -->
<div class="bg-gradient-to-br from-[#1a202c] to-[#0f172a] rounded-xl border border-slate-700 shadow-xl p-6 text-white flex flex-col h-full relative overflow-hidden">
<!-- Decorative background elements -->
<div class="absolute top-0 right-0 p-20 bg-primary/20 blur-[60px] rounded-full -translate-y-1/2 translate-x-1/2"></div>
<div class="relative z-10">
<div class="flex items-start gap-3 mb-6">
<div class="size-10 rounded-lg bg-white/10 flex items-center justify-center backdrop-blur-sm border border-white/10">
<span class="material-symbols-outlined text-primary-light">science</span>
</div>
<div>
<h3 class="text-lg font-bold">Scenario Simulator</h3>
<p class="text-sm text-slate-400 leading-tight">Project outcomes by adjusting key variables.</p>
</div>
</div>
<div class="space-y-6">
<!-- Slider 1 -->
<div>
<div class="flex justify-between text-sm mb-2">
<span class="text-slate-300">Attendance Improv.</span>
<span class="font-bold text-primary-light">+10%</span>
</div>
<input class="w-full h-2 bg-slate-700 rounded-lg appearance-none cursor-pointer accent-primary" max="20" min="0" type="range" value="10"/>
</div>
<!-- Slider 2 -->
<div>
<div class="flex justify-between text-sm mb-2">
<span class="text-slate-300">Avg Grade Increase</span>
<span class="font-bold text-primary-light">+5%</span>
</div>
<input class="w-full h-2 bg-slate-700 rounded-lg appearance-none cursor-pointer accent-primary" max="15" min="0" type="range" value="5"/>
</div>
<!-- Slider 3 -->
<div>
<div class="flex justify-between text-sm mb-2">
<span class="text-slate-300">Extracurriculars</span>
<span class="font-bold text-primary-light">Medium</span>
</div>
<input class="w-full h-2 bg-slate-700 rounded-lg appearance-none cursor-pointer accent-primary" max="100" min="0" type="range" value="50"/>
</div>
</div>
<div class="mt-8 pt-6 border-t border-white/10">
<p class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-3">Projected Outcome</p>
<div class="flex items-center justify-between mb-2">
<span class="text-sm text-slate-300">Students moved to Safe Zone:</span>
<span class="text-xl font-bold text-success">+15</span>
</div>
<div class="flex items-center justify-between">
<span class="text-sm text-slate-300">Risk Pool Reduction:</span>
<span class="text-xl font-bold text-primary-light">-12%</span>
</div>
<button class="w-full mt-6 py-3 bg-primary hover:bg-blue-600 text-white font-bold rounded-lg shadow-lg shadow-blue-900/50 transition-all active:scale-[0.98]">
                            Apply Simulation to Report
                        </button>
</div>
</div>
</div>
</div>
</main>
</body></html>