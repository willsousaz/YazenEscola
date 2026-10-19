<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>IT &amp; Infrastructure Budget Dashboard - Xinguara Schools</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#105ef9",
                        "background-light": "#f5f6f8",
                        "background-dark": "#0f1623",
                        "text-main": "#0d121c",
                        "text-secondary": "#47649e",
                        "accent-success": "#07883b",
                        "accent-danger": "#e73908",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "sans": ["Inter", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom scrollbar for tables if needed */
        .custom-scrollbar::-webkit-scrollbar {
            height: 6px;
            width: 6px;
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
<body class="bg-background-light text-text-main antialiased h-screen flex overflow-hidden">
<!-- Sidebar Navigation -->
<div class="hidden lg:flex flex-col w-[280px] h-full bg-white border-r border-slate-200 shrink-0">
<div class="flex flex-col h-full p-4 justify-between">
<div class="flex flex-col gap-6">
<!-- Header / Logo -->
<div class="flex gap-3 px-2 pt-2">
<div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 bg-slate-100 flex items-center justify-center text-primary font-bold text-xl" data-alt="School logo placeholder">
                        X
                    </div>
<div class="flex flex-col justify-center">
<h1 class="text-text-main text-base font-bold leading-tight">Xinguara Schools</h1>
<p class="text-text-secondary text-xs font-normal">Municipal Management</p>
</div>
</div>
<!-- Navigation Links -->
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main hover:bg-slate-50 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">dashboard</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main hover:bg-slate-50 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">school</span>
<p class="text-sm font-medium">Schools</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main hover:bg-slate-50 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">school</span>
<p class="text-sm font-medium">Students</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main hover:bg-slate-50 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">groups</span>
<p class="text-sm font-medium">HR &amp; Payroll</p>
</a>
<!-- Active State -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary border-r-2 border-primary" href="#">
<span class="material-symbols-outlined fill-1">dns</span>
<p class="text-sm font-bold">IT &amp; Infrastructure</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-text-main hover:bg-slate-50 transition-colors group" href="#">
<span class="material-symbols-outlined text-slate-400 group-hover:text-primary">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</div>
</div>
<!-- User Profile (Bottom) -->
<div class="flex items-center gap-3 px-3 py-3 border-t border-slate-100">
<div class="h-9 w-9 rounded-full bg-slate-200 overflow-hidden shrink-0">
<img alt="User Profile" class="h-full w-full object-cover" data-alt="User avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiExJjyb9Y3Mhb0QdlrS4Y_6SjfaVqv68Obcy2Za6CgEoAgRd6MfATsq6tgQcGzjasr5k34onoJOr4H4Y6Z4cvKLl1KgPJRXigWbYteDgMnR1xy0IXo2ggU967V1KeunNkGSFlZhBbNHIB9QFquVwTGkSFzO4MNv6FTqnA7jt0H2h3sw6EzDgVCsU79uhHVDjv6-Sr0qoYvelM20o6RZ5pYybtJfOwqY8XGWe8MvVaYo3GLox2fvNHeuBpCsSmKw0frOhHKIM1WIk"/>
</div>
<div class="flex flex-col overflow-hidden">
<p class="text-sm font-medium text-text-main truncate">SysAdmin</p>
<p class="text-xs text-text-secondary truncate">admin@xinguara.edu.br</p>
</div>
</div>
</div>
</div>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col h-full overflow-hidden bg-background-light relative">
<!-- Top Header -->
<header class="bg-white border-b border-slate-200 px-6 py-4 shrink-0 flex flex-wrap items-center justify-between gap-4">
<div class="flex flex-col gap-1">
<h2 class="text-2xl font-bold text-text-main tracking-tight">IT &amp; Infrastructure Budget</h2>
<div class="flex items-center gap-2 text-sm text-text-secondary">
<span>Fiscal Year 2024</span>
<span class="h-1 w-1 rounded-full bg-slate-300"></span>
<span>Financial Oversight</span>
</div>
</div>
<div class="flex items-center gap-3">
<button class="hidden sm:flex items-center justify-center h-10 px-4 rounded-lg border border-slate-200 bg-white text-text-main text-sm font-medium hover:bg-slate-50 transition-colors shadow-sm gap-2">
<span class="material-symbols-outlined text-[20px]">file_download</span>
                    Export Budget Report
                </button>
<button class="flex items-center justify-center h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold hover:bg-blue-600 transition-colors shadow-sm gap-2">
<span class="material-symbols-outlined text-[20px]">add</span>
                    New Request
                </button>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto custom-scrollbar p-6">
<div class="max-w-7xl mx-auto flex flex-col gap-6">
<!-- KPI Scorecards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Total Budget -->
<div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between h-[140px]">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium">Total Allocated Budget</p>
<span class="p-1.5 rounded-md bg-slate-50 text-slate-400">
<span class="material-symbols-outlined text-[20px]">account_balance_wallet</span>
</span>
</div>
<div>
<p class="text-2xl font-bold text-text-main tracking-tight">R$ 1.500.000,00</p>
<div class="flex items-center gap-1 mt-1">
<span class="text-xs text-slate-400">Fixed annual allocation</span>
</div>
</div>
</div>
<!-- Current Spend -->
<div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between h-[140px]">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium">Current Spend</p>
<span class="p-1.5 rounded-md bg-blue-50 text-primary">
<span class="material-symbols-outlined text-[20px]">payments</span>
</span>
</div>
<div>
<p class="text-2xl font-bold text-text-main tracking-tight">R$ 850.000,00</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-xs text-accent-success">trending_up</span>
<span class="text-xs font-medium text-accent-success">+12%</span>
<span class="text-xs text-slate-400 ml-1">vs last month</span>
</div>
</div>
</div>
<!-- Available Funds -->
<div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between h-[140px]">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium">Available Funds</p>
<span class="p-1.5 rounded-md bg-green-50 text-accent-success">
<span class="material-symbols-outlined text-[20px]">savings</span>
</span>
</div>
<div>
<p class="text-2xl font-bold text-text-main tracking-tight">R$ 650.000,00</p>
<div class="w-full bg-slate-100 rounded-full h-1.5 mt-3">
<div class="bg-accent-success h-1.5 rounded-full" style="width: 43%"></div>
</div>
</div>
</div>
<!-- Burn Rate -->
<div class="bg-white rounded-xl p-5 border border-slate-200 shadow-sm flex flex-col justify-between h-[140px]">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium">Burn Rate</p>
<span class="p-1.5 rounded-md bg-orange-50 text-accent-danger">
<span class="material-symbols-outlined text-[20px]">local_fire_department</span>
</span>
</div>
<div>
<p class="text-2xl font-bold text-text-main tracking-tight">56.6%</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-xs text-accent-success">trending_down</span>
<span class="text-xs font-medium text-accent-success">-2%</span>
<span class="text-xs text-slate-400 ml-1">efficiency gain</span>
</div>
</div>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Cost Distribution (Donut/Pie Representation) -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="text-lg font-bold text-text-main">Cost Distribution</h3>
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_horiz</span>
</button>
</div>
<div class="flex flex-col sm:flex-row items-center gap-8 flex-1 justify-center">
<!-- CSS Conic Gradient Pie Chart -->
<div class="relative h-40 w-40 rounded-full shrink-0" style="background: conic-gradient(#105ef9 0% 35%, #07883b 35% 60%, #f59e0b 60% 80%, #94a3b8 80% 100%);">
<div class="absolute inset-0 m-auto h-24 w-24 bg-white rounded-full flex flex-col items-center justify-center">
<span class="text-xs text-slate-400 font-medium">Total</span>
<span class="text-sm font-bold text-text-main">850k</span>
</div>
</div>
<!-- Legend -->
<div class="flex flex-col gap-3 w-full sm:w-auto">
<div class="flex items-center justify-between sm:justify-start gap-3">
<span class="h-3 w-3 rounded-full bg-primary"></span>
<span class="text-sm text-text-secondary flex-1">Infrastructure</span>
<span class="text-sm font-bold text-text-main">35%</span>
</div>
<div class="flex items-center justify-between sm:justify-start gap-3">
<span class="h-3 w-3 rounded-full bg-accent-success"></span>
<span class="text-sm text-text-secondary flex-1">Licensing</span>
<span class="text-sm font-bold text-text-main">25%</span>
</div>
<div class="flex items-center justify-between sm:justify-start gap-3">
<span class="h-3 w-3 rounded-full bg-amber-500"></span>
<span class="text-sm text-text-secondary flex-1">Hardware</span>
<span class="text-sm font-bold text-text-main">20%</span>
</div>
<div class="flex items-center justify-between sm:justify-start gap-3">
<span class="h-3 w-3 rounded-full bg-slate-400"></span>
<span class="text-sm text-text-secondary flex-1">Services</span>
<span class="text-sm font-bold text-text-main">20%</span>
</div>
</div>
</div>
</div>
<!-- Lifecycle Chart (Bar Chart Representation) -->
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 lg:col-span-2 flex flex-col">
<div class="flex justify-between items-center mb-2">
<div>
<h3 class="text-lg font-bold text-text-main">Equipment Lifecycle Forecast</h3>
<p class="text-sm text-text-secondary">Projected replacement costs for aging hardware (next 4 quarters)</p>
</div>
<div class="flex gap-2">
<span class="flex items-center gap-1 text-xs text-text-secondary"><span class="w-2 h-2 rounded-full bg-primary"></span>Computers</span>
<span class="flex items-center gap-1 text-xs text-text-secondary"><span class="w-2 h-2 rounded-full bg-slate-300"></span>Peripherals</span>
</div>
</div>
<div class="flex-1 w-full flex items-end justify-between gap-4 pt-8 px-2 pb-2 mt-4 relative border-b border-slate-100">
<!-- Grid lines background -->
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none pb-2">
<div class="border-t border-dashed border-slate-100 w-full h-0"></div>
<div class="border-t border-dashed border-slate-100 w-full h-0"></div>
<div class="border-t border-dashed border-slate-100 w-full h-0"></div>
<div class="border-t border-dashed border-slate-100 w-full h-0"></div>
</div>
<!-- Bars -->
<div class="flex flex-col items-center gap-2 w-full z-10 group">
<div class="w-full max-w-[60px] flex flex-col gap-1 items-center h-[120px] justify-end relative">
<div class="w-full bg-slate-300 rounded-t-sm h-[20%] group-hover:bg-slate-400 transition-colors"></div>
<div class="w-full bg-primary rounded-b-sm h-[30%] group-hover:bg-blue-600 transition-colors relative">
<!-- Tooltip -->
<div class="absolute -top-16 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">R$ 45k</div>
</div>
</div>
<span class="text-xs font-medium text-slate-500">Q4 2024</span>
</div>
<div class="flex flex-col items-center gap-2 w-full z-10 group">
<div class="w-full max-w-[60px] flex flex-col gap-1 items-center h-[160px] justify-end relative">
<div class="w-full bg-slate-300 rounded-t-sm h-[15%] group-hover:bg-slate-400 transition-colors"></div>
<div class="w-full bg-primary rounded-b-sm h-[60%] group-hover:bg-blue-600 transition-colors relative">
<div class="absolute -top-16 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">R$ 82k</div>
</div>
</div>
<span class="text-xs font-medium text-slate-500">Q1 2025</span>
</div>
<div class="flex flex-col items-center gap-2 w-full z-10 group">
<div class="w-full max-w-[60px] flex flex-col gap-1 items-center h-[100px] justify-end relative">
<div class="w-full bg-slate-300 rounded-t-sm h-[20%] group-hover:bg-slate-400 transition-colors"></div>
<div class="w-full bg-primary rounded-b-sm h-[25%] group-hover:bg-blue-600 transition-colors relative">
<div class="absolute -top-16 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">R$ 30k</div>
</div>
</div>
<span class="text-xs font-medium text-slate-500">Q2 2025</span>
</div>
<div class="flex flex-col items-center gap-2 w-full z-10 group">
<div class="w-full max-w-[60px] flex flex-col gap-1 items-center h-[180px] justify-end relative">
<div class="w-full bg-slate-300 rounded-t-sm h-[10%] group-hover:bg-slate-400 transition-colors"></div>
<div class="w-full bg-primary rounded-b-sm h-[80%] group-hover:bg-blue-600 transition-colors relative">
<div class="absolute -top-16 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">R$ 110k</div>
</div>
</div>
<span class="text-xs font-medium text-slate-500">Q3 2025</span>
</div>
</div>
</div>
</div>
<!-- Vendor Contracts Table -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h3 class="text-lg font-bold text-text-main tracking-tight">Vendor Contracts &amp; Service Agreements</h3>
<div class="flex gap-2">
<div class="relative">
<span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-[20px]">search</span>
<input class="pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary w-64" placeholder="Search vendors..." type="text"/>
</div>
<button class="flex items-center justify-center h-9 w-9 rounded-lg border border-slate-200 bg-white text-slate-500 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-[20px]">filter_list</span>
</button>
</div>
</div>
<div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase text-slate-500 font-semibold tracking-wider">
<th class="px-6 py-4">Vendor Name</th>
<th class="px-6 py-4">Service/Product</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4 text-right">Monthly Cost</th>
<th class="px-6 py-4 text-right">Annual Value</th>
<th class="px-6 py-4">Renewal Date</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="text-sm divide-y divide-slate-100">
<tr class="hover:bg-slate-50/50 transition-colors group">
<td class="px-6 py-4 font-medium text-primary cursor-pointer hover:underline">Microsoft Corp.</td>
<td class="px-6 py-4 text-text-secondary">Microsoft 365 Edu Licensing</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                                Active
                                            </span>
</td>
<td class="px-6 py-4 text-right font-medium text-text-main">R$ 15.400,00</td>
<td class="px-6 py-4 text-right text-text-secondary">R$ 184.800,00</td>
<td class="px-6 py-4 text-text-secondary">Dec 31, 2024</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 transition-colors group">
<td class="px-6 py-4 font-medium text-primary cursor-pointer hover:underline">Starlink Services</td>
<td class="px-6 py-4 text-text-secondary">Rural School Connectivity (Low Latency)</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                                Active
                                            </span>
</td>
<td class="px-6 py-4 text-right font-medium text-text-main">R$ 8.200,00</td>
<td class="px-6 py-4 text-right text-text-secondary">R$ 98.400,00</td>
<td class="px-6 py-4 text-text-secondary">Aug 15, 2025</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 transition-colors group">
<td class="px-6 py-4 font-medium text-primary cursor-pointer hover:underline">Dell Technologies</td>
<td class="px-6 py-4 text-text-secondary">ProSupport Hardware Warranty</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800 border border-amber-200">
                                                Review
                                            </span>
</td>
<td class="px-6 py-4 text-right font-medium text-text-main">R$ 5.600,00</td>
<td class="px-6 py-4 text-right text-text-secondary">R$ 67.200,00</td>
<td class="px-6 py-4 text-text-secondary">Oct 01, 2024</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 transition-colors group">
<td class="px-6 py-4 font-medium text-primary cursor-pointer hover:underline">Local FiberNet Ltd.</td>
<td class="px-6 py-4 text-text-secondary">Urban Campus Fiber Backbone</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 border border-red-200">
                                                Expiring Soon
                                            </span>
</td>
<td class="px-6 py-4 text-right font-medium text-text-main">R$ 12.000,00</td>
<td class="px-6 py-4 text-right text-text-secondary">R$ 144.000,00</td>
<td class="px-6 py-4 text-text-secondary text-red-600 font-medium">Jun 30, 2024</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 transition-colors group">
<td class="px-6 py-4 font-medium text-primary cursor-pointer hover:underline">AWS Services</td>
<td class="px-6 py-4 text-text-secondary">Cloud Infrastructure Hosting</td>
<td class="px-6 py-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                                Active
                                            </span>
</td>
<td class="px-6 py-4 text-right font-medium text-text-main">R$ 4.350,00</td>
<td class="px-6 py-4 text-right text-text-secondary">R$ 52.200,00</td>
<td class="px-6 py-4 text-text-secondary">Jan 15, 2025</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="bg-slate-50 px-6 py-3 border-t border-slate-200 flex items-center justify-between">
<p class="text-xs text-text-secondary">Showing 5 of 24 contracts</p>
<div class="flex gap-2">
<button class="px-3 py-1 text-xs font-medium text-slate-500 bg-white border border-slate-300 rounded hover:bg-slate-50 disabled:opacity-50" disabled="">Previous</button>
<button class="px-3 py-1 text-xs font-medium text-text-main bg-white border border-slate-300 rounded hover:bg-slate-50">Next</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>