<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>School Nutrition and Stock Management</title>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1664f3",
                        "background-light": "#f5f6f8",
                        "background-dark": "#101622",
                        "surface-dark": "#1e293b",
                        "surface-light": "#ffffff",
                        "success": "#0bda5e",
                        "warning": "#f59e0b",
                        "danger": "#fa6238",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-x-hidden">
<div class="flex h-screen w-full flex-col">
<!-- Top Navigation -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-slate-200 dark:border-slate-800 bg-surface-light dark:bg-background-dark px-6 py-3 shrink-0 z-20">
<div class="flex items-center gap-6">
<div class="flex items-center gap-3 text-primary dark:text-white">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined text-xl">school</span>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight">Municipal School Management <span class="hidden sm:inline text-slate-400 font-normal">| Xinguara</span></h2>
</div>
<!-- Search Bar -->
<div class="hidden md:flex items-center bg-slate-100 dark:bg-surface-dark rounded-lg h-10 px-3 w-64 border border-slate-200 dark:border-slate-700 focus-within:ring-2 focus-within:ring-primary/50 transition-all">
<span class="material-symbols-outlined text-slate-400 text-[20px]">search</span>
<input class="bg-transparent border-none text-sm w-full focus:ring-0 placeholder:text-slate-400 text-slate-700 dark:text-slate-200" placeholder="Search students, stock..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<!-- Nav Links -->
<nav class="hidden lg:flex items-center gap-6">
<a class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Dashboard</a>
<a class="text-primary font-medium text-sm border-b-2 border-primary py-4 -my-4" href="#">Nutrition &amp; Logistics</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Reports</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Settings</a>
</nav>
<div class="flex items-center gap-4">
<button class="relative text-slate-500 dark:text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 size-2 bg-danger rounded-full border-2 border-white dark:border-background-dark"></span>
</button>
<div class="bg-center bg-no-repeat bg-cover rounded-full size-9 border-2 border-slate-200 dark:border-slate-700" data-alt="User profile picture" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDy7TBFGK4h6VJQKGCUiMfQjj_N8wmsLXi8AtcWeNFy4c1i78kOTJFMz_HK_zfccp716qd0hnQ-zcvRgobsUcMC9VQ97EysYdBydRFoKmTn_GMFRmlsXghHepjdqpXSLyvR4b4zlrHlexbaXCQv0ZLd26AKE8yjPPEb51uZ_4Z66S_C2umviLL_ilV5rDcWiGE6PUD6N7o25tlCyjTz6BIUG9VoU7H2AomfWwCewbVlZ8pu8rajabDhYt5s_D4DlI7K1VLJRI9rVBM');"></div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex flex-1 overflow-hidden">
<!-- Sidebar (Optional for larger context, keeping it minimal here or hidden for dashboard focus as per prompt request for single page feel) -->
<div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
<div class="max-w-7xl mx-auto flex flex-col gap-8">
<!-- Page Header & Actions -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-1">
<span>Home</span>
<span class="material-symbols-outlined text-[12px]">chevron_right</span>
<span class="text-primary">Nutrition &amp; Logistics</span>
</div>
<h1 class="text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Nutrition Dashboard</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">Manage school meal stock, nutritional planning, and distribution logistics.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2.5 bg-surface-light dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors shadow-sm">
<span class="material-symbols-outlined text-[20px]">calendar_add_on</span>
<span>Create Weekly Menu</span>
</button>
<button class="flex items-center gap-2 px-4 py-2.5 bg-primary hover:bg-blue-600 text-white rounded-lg text-sm font-medium transition-colors shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span>
<span>New Purchase Order</span>
</button>
</div>
</div>
<!-- Stock Overview Cards -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Healthy -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-5 border border-slate-200 dark:border-slate-700/50 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-success">grain</span>
</div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Rice &amp; Grains</p>
<h3 class="text-2xl font-bold mt-1 text-slate-900 dark:text-white">850<span class="text-base font-normal text-slate-500 ml-1">kg</span></h3>
</div>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success border border-success/20">
                                    Healthy
                                </span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-1.5 mb-2">
<div class="bg-success h-1.5 rounded-full" style="width: 85%"></div>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400">85% of capacity • Last restock: 2d ago</p>
</div>
<!-- Card 2: Critical -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-5 border border-slate-200 dark:border-slate-700/50 shadow-sm relative overflow-hidden group ring-1 ring-danger/20">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-danger">ac_unit</span>
</div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Frozen Proteins</p>
<h3 class="text-2xl font-bold mt-1 text-slate-900 dark:text-white">120<span class="text-base font-normal text-slate-500 ml-1">kg</span></h3>
</div>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-danger/10 text-danger border border-danger/20 animate-pulse">
                                    Critical Low
                                </span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-1.5 mb-2">
<div class="bg-danger h-1.5 rounded-full" style="width: 15%"></div>
</div>
<p class="text-xs text-danger/80 font-medium">Restock needed immediately</p>
</div>
<!-- Card 3: Moderate -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-5 border border-slate-200 dark:border-slate-700/50 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-warning">water_drop</span>
</div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Dairy Products</p>
<h3 class="text-2xl font-bold mt-1 text-slate-900 dark:text-white">450<span class="text-base font-normal text-slate-500 ml-1">L</span></h3>
</div>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-warning/10 text-warning border border-warning/20">
                                    Moderate
                                </span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-1.5 mb-2">
<div class="bg-warning h-1.5 rounded-full" style="width: 45%"></div>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400">45% of capacity • Expiring soon: 20L</p>
</div>
<!-- Card 4: Healthy -->
<div class="bg-white dark:bg-surface-dark rounded-xl p-5 border border-slate-200 dark:border-slate-700/50 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-6xl text-success">nutrition</span>
</div>
<div class="flex justify-between items-start mb-4">
<div>
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Fresh Produce</p>
<h3 class="text-2xl font-bold mt-1 text-slate-900 dark:text-white">300<span class="text-base font-normal text-slate-500 ml-1">kg</span></h3>
</div>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-success/10 text-success border border-success/20">
                                    Healthy
                                </span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-700 rounded-full h-1.5 mb-2">
<div class="bg-success h-1.5 rounded-full" style="width: 72%"></div>
</div>
<p class="text-xs text-slate-500 dark:text-slate-400">72% of capacity • Delivery expected today</p>
</div>
</section>
<!-- Weekly Menu Planning -->
<section class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h2 class="text-lg font-bold text-slate-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">restaurant_menu</span>
                                Weekly Menu Planning
                            </h2>
<div class="flex items-center gap-2">
<button class="p-1 text-slate-400 hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<span class="text-sm font-medium text-slate-600 dark:text-slate-300">Week of Oct 23rd, 2023</span>
<button class="p-1 text-slate-400 hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-3">
<!-- Monday -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex flex-col gap-3 group hover:border-primary/50 transition-colors">
<div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-700/50 pb-2">
<span class="text-xs font-bold uppercase text-slate-400 tracking-wider">Mon, 23</span>
<span class="material-symbols-outlined text-slate-500 text-sm">edit</span>
</div>
<div>
<h4 class="font-bold text-slate-800 dark:text-slate-100 text-sm leading-tight">Chicken Stroganoff</h4>
<p class="text-xs text-slate-500 mt-1">Rice, Potato Sticks, Salad</p>
</div>
<div class="mt-auto pt-2 flex flex-col gap-1.5">
<div class="flex justify-between text-xs">
<span class="text-slate-500">Calories</span>
<span class="font-medium text-slate-300">450 kcal</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-slate-500">Allergens</span>
<span class="font-medium text-warning text-[10px] bg-warning/10 px-1.5 py-0.5 rounded">Dairy</span>
</div>
</div>
</div>
<!-- Tuesday -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex flex-col gap-3 group hover:border-primary/50 transition-colors">
<div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-700/50 pb-2">
<span class="text-xs font-bold uppercase text-slate-400 tracking-wider">Tue, 24</span>
<span class="material-symbols-outlined text-slate-500 text-sm">edit</span>
</div>
<div>
<h4 class="font-bold text-slate-800 dark:text-slate-100 text-sm leading-tight">Bean Stew (Feijoada)</h4>
<p class="text-xs text-slate-500 mt-1">Vegetables, Kale, Orange</p>
</div>
<div class="mt-auto pt-2 flex flex-col gap-1.5">
<div class="flex justify-between text-xs">
<span class="text-slate-500">Calories</span>
<span class="font-medium text-slate-300">380 kcal</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-slate-500">Allergens</span>
<span class="font-medium text-success text-[10px] bg-success/10 px-1.5 py-0.5 rounded">None</span>
</div>
</div>
</div>
<!-- Wednesday -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex flex-col gap-3 group hover:border-primary/50 transition-colors ring-2 ring-primary ring-offset-2 ring-offset-background-light dark:ring-offset-background-dark">
<div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-700/50 pb-2">
<span class="text-xs font-bold uppercase text-primary tracking-wider">Wed, 25 (Today)</span>
<span class="material-symbols-outlined text-primary text-sm">edit</span>
</div>
<div>
<h4 class="font-bold text-slate-800 dark:text-slate-100 text-sm leading-tight">Spaghetti Bolognese</h4>
<p class="text-xs text-slate-500 mt-1">Ground Beef, Tomato Sauce</p>
</div>
<div class="mt-auto pt-2 flex flex-col gap-1.5">
<div class="flex justify-between text-xs">
<span class="text-slate-500">Calories</span>
<span class="font-medium text-slate-300">420 kcal</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-slate-500">Allergens</span>
<span class="font-medium text-warning text-[10px] bg-warning/10 px-1.5 py-0.5 rounded">Gluten</span>
</div>
</div>
</div>
<!-- Thursday -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex flex-col gap-3 group hover:border-primary/50 transition-colors">
<div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-700/50 pb-2">
<span class="text-xs font-bold uppercase text-slate-400 tracking-wider">Thu, 26</span>
<span class="material-symbols-outlined text-slate-500 text-sm">edit</span>
</div>
<div>
<h4 class="font-bold text-slate-800 dark:text-slate-100 text-sm leading-tight">Grilled Fish Filet</h4>
<p class="text-xs text-slate-500 mt-1">Mashed Potatoes, Green Beans</p>
</div>
<div class="mt-auto pt-2 flex flex-col gap-1.5">
<div class="flex justify-between text-xs">
<span class="text-slate-500">Calories</span>
<span class="font-medium text-slate-300">350 kcal</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-slate-500">Allergens</span>
<span class="font-medium text-warning text-[10px] bg-warning/10 px-1.5 py-0.5 rounded">Fish</span>
</div>
</div>
</div>
<!-- Friday -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-4 flex flex-col gap-3 group hover:border-primary/50 transition-colors">
<div class="flex justify-between items-center border-b border-slate-100 dark:border-slate-700/50 pb-2">
<span class="text-xs font-bold uppercase text-slate-400 tracking-wider">Fri, 27</span>
<span class="material-symbols-outlined text-slate-500 text-sm">edit</span>
</div>
<div>
<h4 class="font-bold text-slate-800 dark:text-slate-100 text-sm leading-tight">Chicken Soup</h4>
<p class="text-xs text-slate-500 mt-1">Carrots, Pasta, Bread Roll</p>
</div>
<div class="mt-auto pt-2 flex flex-col gap-1.5">
<div class="flex justify-between text-xs">
<span class="text-slate-500">Calories</span>
<span class="font-medium text-slate-300">310 kcal</span>
</div>
<div class="flex justify-between text-xs">
<span class="text-slate-500">Allergens</span>
<span class="font-medium text-warning text-[10px] bg-warning/10 px-1.5 py-0.5 rounded">Gluten</span>
</div>
</div>
</div>
</div>
</section>
<!-- Main Grid: Distribution & Charts -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Col: Distribution Table (Span 2) -->
<div class="lg:col-span-2 flex flex-col gap-4">
<div class="flex items-center justify-between">
<h2 class="text-lg font-bold text-slate-900 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">local_shipping</span>
                                    Distribution Management
                                </h2>
<button class="text-sm text-primary hover:text-blue-400 font-medium">View All Transactions</button>
</div>
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left text-sm">
<thead class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-700 text-slate-500 dark:text-slate-400">
<tr>
<th class="px-6 py-3 font-medium">ID</th>
<th class="px-6 py-3 font-medium">Item</th>
<th class="px-6 py-3 font-medium">Movement</th>
<th class="px-6 py-3 font-medium">Qty</th>
<th class="px-6 py-3 font-medium">Date</th>
<th class="px-6 py-3 font-medium">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-700">
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-3 font-mono text-xs text-slate-500">#TR-405</td>
<td class="px-6 py-3 font-medium text-slate-900 dark:text-slate-200">White Rice (Type 1)</td>
<td class="px-6 py-3 text-slate-500">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary">warehouse</span>
<span class="text-[10px]">➜</span>
<span class="text-xs">School Unit 04</span>
</div>
</td>
<td class="px-6 py-3 font-bold text-slate-900 dark:text-white">50kg</td>
<td class="px-6 py-3 text-slate-500 text-xs">Oct 25, 08:30</td>
<td class="px-6 py-3">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-medium bg-blue-500/10 text-blue-400">
                                                        In Transit
                                                    </span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-3 font-mono text-xs text-slate-500">#TR-404</td>
<td class="px-6 py-3 font-medium text-slate-900 dark:text-slate-200">Whole Milk UHT</td>
<td class="px-6 py-3 text-slate-500">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-green-500">local_shipping</span>
<span class="text-[10px]">➜</span>
<span class="text-xs">Central Warehouse</span>
</div>
</td>
<td class="px-6 py-3 font-bold text-slate-900 dark:text-white">200L</td>
<td class="px-6 py-3 text-slate-500 text-xs">Oct 24, 14:15</td>
<td class="px-6 py-3">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-medium bg-success/10 text-success">
                                                        Completed
                                                    </span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-3 font-mono text-xs text-slate-500">#TR-403</td>
<td class="px-6 py-3 font-medium text-slate-900 dark:text-slate-200">Frozen Chicken Breast</td>
<td class="px-6 py-3 text-slate-500">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary">warehouse</span>
<span class="text-[10px]">➜</span>
<span class="text-xs">School Unit 12</span>
</div>
</td>
<td class="px-6 py-3 font-bold text-slate-900 dark:text-white">35kg</td>
<td class="px-6 py-3 text-slate-500 text-xs">Oct 24, 09:00</td>
<td class="px-6 py-3">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-medium bg-success/10 text-success">
                                                        Completed
                                                    </span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-3 font-mono text-xs text-slate-500">#TR-402</td>
<td class="px-6 py-3 font-medium text-slate-900 dark:text-slate-200">Black Beans</td>
<td class="px-6 py-3 text-slate-500">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-primary">warehouse</span>
<span class="text-[10px]">➜</span>
<span class="text-xs">School Unit 02</span>
</div>
</td>
<td class="px-6 py-3 font-bold text-slate-900 dark:text-white">60kg</td>
<td class="px-6 py-3 text-slate-500 text-xs">Oct 23, 16:45</td>
<td class="px-6 py-3">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-medium bg-warning/10 text-warning">
                                                        Pending
                                                    </span>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
<td class="px-6 py-3 font-mono text-xs text-slate-500">#TR-401</td>
<td class="px-6 py-3 font-medium text-slate-900 dark:text-slate-200">Fresh Tomatoes</td>
<td class="px-6 py-3 text-slate-500">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm text-danger">delete</span>
<span class="text-[10px]">➜</span>
<span class="text-xs">Disposal</span>
</div>
</td>
<td class="px-6 py-3 font-bold text-slate-900 dark:text-white">5kg</td>
<td class="px-6 py-3 text-slate-500 text-xs">Oct 23, 10:20</td>
<td class="px-6 py-3">
<span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-xs font-medium bg-slate-100 dark:bg-slate-700 text-slate-500">
                                                        Logged
                                                    </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- Right Col: Analytics (Span 1) -->
<div class="flex flex-col gap-6">
<!-- Consumption Chart Card -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-5 shadow-sm flex flex-col h-full">
<h3 class="font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-base">bar_chart</span>
                                    Consumption Analytics
                                </h3>
<p class="text-xs text-slate-500 dark:text-slate-400 mb-6">Meals served vs Attendance (Last 5 Days)</p>
<div class="flex items-end justify-between gap-2 h-40 mt-auto px-2">
<!-- Bar Group -->
<div class="flex flex-col items-center gap-2 w-full group">
<div class="relative w-full h-full flex items-end justify-center gap-1">
<div class="w-3 bg-slate-700 rounded-t-sm h-[60%] group-hover:bg-slate-600 transition-colors" title="Attendance"></div>
<div class="w-3 bg-primary rounded-t-sm h-[55%] group-hover:bg-blue-400 transition-colors" title="Meals Served"></div>
</div>
<span class="text-[10px] text-slate-500">Mon</span>
</div>
<div class="flex flex-col items-center gap-2 w-full group">
<div class="relative w-full h-full flex items-end justify-center gap-1">
<div class="w-3 bg-slate-700 rounded-t-sm h-[75%] group-hover:bg-slate-600 transition-colors"></div>
<div class="w-3 bg-primary rounded-t-sm h-[70%] group-hover:bg-blue-400 transition-colors"></div>
</div>
<span class="text-[10px] text-slate-500">Tue</span>
</div>
<div class="flex flex-col items-center gap-2 w-full group">
<div class="relative w-full h-full flex items-end justify-center gap-1">
<div class="w-3 bg-slate-700 rounded-t-sm h-[85%] group-hover:bg-slate-600 transition-colors"></div>
<div class="w-3 bg-primary rounded-t-sm h-[82%] group-hover:bg-blue-400 transition-colors"></div>
</div>
<span class="text-[10px] font-bold text-primary">Wed</span>
</div>
<div class="flex flex-col items-center gap-2 w-full group">
<div class="relative w-full h-full flex items-end justify-center gap-1">
<div class="w-3 bg-slate-700/50 rounded-t-sm h-[80%]"></div>
<div class="w-3 bg-primary/30 rounded-t-sm h-[75%]"></div>
</div>
<span class="text-[10px] text-slate-600">Thu</span>
</div>
<div class="flex flex-col items-center gap-2 w-full group">
<div class="relative w-full h-full flex items-end justify-center gap-1">
<div class="w-3 bg-slate-700/50 rounded-t-sm h-[65%]"></div>
<div class="w-3 bg-primary/30 rounded-t-sm h-[60%]"></div>
</div>
<span class="text-[10px] text-slate-600">Fri</span>
</div>
</div>
<div class="flex items-center justify-center gap-4 mt-4 pt-4 border-t border-slate-100 dark:border-slate-800">
<div class="flex items-center gap-1.5">
<div class="size-2.5 rounded-full bg-slate-700"></div>
<span class="text-xs text-slate-500">Attendance</span>
</div>
<div class="flex items-center gap-1.5">
<div class="size-2.5 rounded-full bg-primary"></div>
<span class="text-xs text-slate-500">Served</span>
</div>
</div>
</div>
<!-- Health Widget -->
<div class="bg-white dark:bg-surface-dark border border-slate-200 dark:border-slate-700 rounded-xl p-5 shadow-sm flex flex-col h-full">
<h3 class="font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-success text-base">health_and_safety</span>
                                    Inventory Health
                                </h3>
<div class="flex items-center gap-6">
<!-- CSS Doughnut Chart representation -->
<div class="relative size-24 shrink-0 rounded-full bg-slate-800" style="background: conic-gradient(#0bda5e 0% 75%, #fa6238 75% 90%, #f59e0b 90% 100%);">
<div class="absolute inset-2 bg-white dark:bg-surface-dark rounded-full flex items-center justify-center">
<span class="text-xl font-bold text-slate-900 dark:text-white">92%</span>
</div>
</div>
<div class="flex flex-col gap-2 w-full">
<div class="flex justify-between items-center text-xs">
<div class="flex items-center gap-2">
<div class="size-2 bg-success rounded-full"></div>
<span class="text-slate-400">Fresh</span>
</div>
<span class="font-medium text-slate-200">75%</span>
</div>
<div class="flex justify-between items-center text-xs">
<div class="flex items-center gap-2">
<div class="size-2 bg-danger rounded-full"></div>
<span class="text-slate-400">Critical</span>
</div>
<span class="font-medium text-slate-200">15%</span>
</div>
<div class="flex justify-between items-center text-xs">
<div class="flex items-center gap-2">
<div class="size-2 bg-warning rounded-full"></div>
<span class="text-slate-400">Near Exp.</span>
</div>
<span class="font-medium text-slate-200">10%</span>
</div>
</div>
</div>
<div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800">
<p class="text-xs text-slate-500">Next Audit: <span class="text-primary font-medium cursor-pointer hover:underline">Nov 01, 2023</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>