<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>School Timetable Management</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#0a54ff",
                        "background-light": "#f5f6f8",
                        "background-dark": "#0f1523",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
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
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased">
<div class="flex h-screen w-full flex-col overflow-hidden">
<!-- Header -->
<header class="flex h-16 shrink-0 items-center justify-between border-b border-slate-200 bg-white px-6 dark:bg-slate-900 dark:border-slate-800">
<div class="flex items-center gap-4">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl">school</span>
<h1 class="text-lg font-bold tracking-tight text-slate-900 dark:text-white">Xinguara School Management</h1>
</div>
<div class="h-6 w-px bg-slate-200 dark:bg-slate-700"></div>
<nav class="hidden md:flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400">
<a class="hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Timetables</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="font-medium text-slate-900 dark:text-white">9th Grade - Class A</span>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-2 text-xs font-medium text-slate-500 animate-pulse">
<span class="material-symbols-outlined text-[18px]">cloud_sync</span>
<span>Auto-saving...</span>
</div>
<div class="h-6 w-px bg-slate-200 dark:bg-slate-700 mx-2"></div>
<button class="flex items-center gap-2 rounded-lg bg-slate-100 px-4 py-2 text-sm font-bold text-slate-700 hover:bg-slate-200 transition-colors dark:bg-slate-800 dark:text-slate-300">
<span>Save Draft</span>
</button>
<button class="flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-blue-600 transition-colors shadow-sm shadow-blue-200 dark:shadow-none">
<span class="material-symbols-outlined text-[18px]">publish</span>
<span>Publish Timetable</span>
</button>
<div class="ml-2 h-9 w-9 overflow-hidden rounded-full border border-slate-200 bg-slate-100 dark:border-slate-700">
<img alt="User Profile" class="h-full w-full object-cover" data-alt="Portrait of a smiling man with glasses" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBoXI8i88CUqa5hvg4kBolEXKxAqfYkPMNZDWDeIXPZhDmXBaQJ7jvSMb2v99GYgxnFh8np_DNiGaUuWI3aD9pz5wdLZAwYdPlNJusDDc30KagjNQN3YFYH8Wji_5PhZ4tmr06b646v21qBc7tnfx75M0ll3N0R6OoniuKoE6Qc6uRmHsq8uQq9AjWWXFghZ3ammKbJ9KyOW8VxWKCFtP-n80s8aJqBN1ZYbx5nIGXCA5c3pH0sfM2uGGg8z1UIZuprULAe-42am2Y"/>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex flex-1 overflow-hidden">
<!-- Sidebar (Draggable Resources) -->
<aside class="flex w-80 shrink-0 flex-col border-r border-slate-200 bg-white dark:bg-slate-900 dark:border-slate-800">
<div class="p-4 pb-2">
<h2 class="text-lg font-bold text-slate-900 dark:text-white">Resources</h2>
<p class="text-sm text-slate-500 mt-1">Drag items to the schedule grid</p>
<!-- Search -->
<div class="relative mt-4">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400 text-[20px]">search</span>
<input class="w-full rounded-lg border-slate-200 bg-slate-50 py-2 pl-10 pr-4 text-sm focus:border-primary focus:ring-primary dark:bg-slate-800 dark:border-slate-700 dark:text-white" placeholder="Search subjects or teachers..." type="text"/>
</div>
</div>
<!-- Tabs -->
<div class="flex border-b border-slate-200 px-4 dark:border-slate-800 mt-2">
<button class="flex-1 border-b-2 border-primary pb-3 text-sm font-bold text-primary">
                        Subjects
                    </button>
<button class="flex-1 border-b-2 border-transparent pb-3 text-sm font-medium text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200">
                        Teachers
                    </button>
</div>
<!-- List -->
<div class="flex-1 overflow-y-auto p-4 space-y-3 custom-scrollbar">
<!-- Subject Card: Math -->
<div class="group cursor-grab active:cursor-grabbing rounded-xl border border-slate-200 bg-white p-3 shadow-sm hover:border-primary hover:shadow-md transition-all dark:bg-slate-800 dark:border-slate-700">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<div class="flex h-8 w-8 items-center justify-center rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400">
<span class="material-symbols-outlined text-[18px]">calculate</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Mathematics</span>
</div>
<span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 dark:bg-slate-700 dark:text-slate-300">4 slots left</span>
</div>
<div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<span>Preferred: Morning</span>
<span class="font-medium text-primary">Prof. Sarah M.</span>
</div>
</div>
<!-- Subject Card: Portuguese -->
<div class="group cursor-grab active:cursor-grabbing rounded-xl border border-slate-200 bg-white p-3 shadow-sm hover:border-primary hover:shadow-md transition-all dark:bg-slate-800 dark:border-slate-700">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<div class="flex h-8 w-8 items-center justify-center rounded-lg bg-orange-100 text-orange-600 dark:bg-orange-900/30 dark:text-orange-400">
<span class="material-symbols-outlined text-[18px]">book_2</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Portuguese</span>
</div>
<span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 dark:bg-slate-700 dark:text-slate-300">2 slots left</span>
</div>
<div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<span>Preferred: Any</span>
<span class="font-medium text-primary">Prof. Carlos D.</span>
</div>
</div>
<!-- Subject Card: Science -->
<div class="group cursor-grab active:cursor-grabbing rounded-xl border border-slate-200 bg-white p-3 shadow-sm hover:border-primary hover:shadow-md transition-all dark:bg-slate-800 dark:border-slate-700">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<div class="flex h-8 w-8 items-center justify-center rounded-lg bg-green-100 text-green-600 dark:bg-green-900/30 dark:text-green-400">
<span class="material-symbols-outlined text-[18px]">experiment</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">Science</span>
</div>
<span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 dark:bg-slate-700 dark:text-slate-300">3 slots left</span>
</div>
<div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<span>Lab Required</span>
<span class="font-medium text-primary">Prof. Jane R.</span>
</div>
</div>
<!-- Subject Card: History -->
<div class="group cursor-grab active:cursor-grabbing rounded-xl border border-slate-200 bg-white p-3 shadow-sm hover:border-primary hover:shadow-md transition-all dark:bg-slate-800 dark:border-slate-700">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<div class="flex h-8 w-8 items-center justify-center rounded-lg bg-purple-100 text-purple-600 dark:bg-purple-900/30 dark:text-purple-400">
<span class="material-symbols-outlined text-[18px]">history_edu</span>
</div>
<span class="font-bold text-slate-800 dark:text-slate-100">History</span>
</div>
<span class="rounded-full bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-600 dark:bg-slate-700 dark:text-slate-300">2 slots left</span>
</div>
<div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<span>Preferred: Afternoon</span>
<span class="font-medium text-primary">Prof. Robert L.</span>
</div>
</div>
<!-- Separator -->
<div class="pt-4 pb-2">
<h3 class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-slate-500">Recently Modified</h3>
</div>
<!-- Subject Card: Arts (Modified) -->
<div class="group cursor-grab active:cursor-grabbing rounded-xl border border-l-4 border-slate-200 border-l-pink-500 bg-white p-3 shadow-sm hover:shadow-md transition-all dark:bg-slate-800 dark:border-slate-700">
<div class="flex items-center justify-between mb-2">
<div class="flex items-center gap-2">
<span class="font-bold text-slate-800 dark:text-slate-100">Arts</span>
</div>
<span class="rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-700 dark:bg-green-900/30 dark:text-green-300">Completed</span>
</div>
<div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
<span>Room 101</span>
<span class="font-medium text-slate-700 dark:text-slate-300">Prof. Anna K.</span>
</div>
</div>
</div>
</aside>
<!-- Main Workspace -->
<div class="flex flex-1 flex-col overflow-hidden bg-slate-50 dark:bg-background-dark relative">
<!-- Toolbar -->
<div class="flex shrink-0 items-center justify-between border-b border-slate-200 bg-white px-6 py-3 dark:bg-slate-900 dark:border-slate-800">
<div class="flex flex-col">
<h2 class="text-xl font-bold text-slate-900 dark:text-white leading-tight">9th Grade A</h2>
<span class="text-sm text-slate-500 dark:text-slate-400">Morning Shift • Room 204</span>
</div>
<div class="flex items-center gap-3">
<div class="flex items-center rounded-lg bg-slate-100 p-1 dark:bg-slate-800">
<button class="rounded-md bg-white px-3 py-1.5 text-sm font-medium text-slate-900 shadow-sm dark:bg-slate-700 dark:text-white">Weekly</button>
<button class="rounded-md px-3 py-1.5 text-sm font-medium text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white">Daily</button>
</div>
<div class="h-8 w-px bg-slate-200 dark:bg-slate-700"></div>
<button class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-400">
<span class="material-symbols-outlined text-[20px]">print</span>
</button>
<button class="flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-600 hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-400">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
<button class="flex h-9 w-9 items-center justify-center rounded-lg bg-red-50 text-red-600 hover:bg-red-100 dark:bg-red-900/20 dark:text-red-400">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
<!-- Timetable Grid Container -->
<div class="flex-1 overflow-auto p-6">
<div class="min-w-[800px] h-full rounded-xl bg-white shadow-sm ring-1 ring-slate-200 dark:bg-slate-900 dark:ring-slate-800 flex flex-col">
<!-- Grid Header (Days) -->
<div class="grid grid-cols-[80px_1fr_1fr_1fr_1fr_1fr] border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50 rounded-t-xl">
<div class="p-4 text-center text-xs font-bold uppercase tracking-wider text-slate-400">Time</div>
<div class="p-4 text-center font-bold text-slate-700 dark:text-slate-200">Monday</div>
<div class="p-4 text-center font-bold text-slate-700 dark:text-slate-200">Tuesday</div>
<div class="p-4 text-center font-bold text-slate-700 dark:text-slate-200">Wednesday</div>
<div class="p-4 text-center font-bold text-slate-700 dark:text-slate-200">Thursday</div>
<div class="p-4 text-center font-bold text-slate-700 dark:text-slate-200">Friday</div>
</div>
<!-- Grid Body -->
<div class="flex-1 overflow-y-auto">
<!-- Row 1: 07:30 - 08:20 -->
<div class="grid grid-cols-[80px_1fr_1fr_1fr_1fr_1fr] min-h-[120px] border-b border-slate-100 dark:border-slate-800">
<div class="flex flex-col items-center justify-center border-r border-slate-100 bg-slate-50/50 p-2 text-center text-xs text-slate-500 dark:bg-slate-800/30 dark:border-slate-800 dark:text-slate-400">
<span class="font-bold">07:30</span>
<span class="text-slate-400">-</span>
<span>08:20</span>
</div>
<!-- Mon 1: Math -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-blue-50 border-l-4 border-blue-500 p-3 shadow-sm cursor-grab hover:bg-blue-100 transition-colors dark:bg-blue-900/20 dark:border-blue-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Mathematics</p>
<span class="material-symbols-outlined text-[16px] text-blue-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Sarah M.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Tue 1: History -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-purple-50 border-l-4 border-purple-500 p-3 shadow-sm cursor-grab hover:bg-purple-100 transition-colors dark:bg-purple-900/20 dark:border-purple-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">History</p>
<span class="material-symbols-outlined text-[16px] text-purple-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Robert L.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Wed 1: Empty (Valid Drop Zone) -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800 relative group">
<div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 group-hover:border-primary/50 group-hover:bg-primary/5 transition-all dark:border-slate-700 dark:bg-slate-800/50">
<span class="text-xs font-medium group-hover:text-primary">Drop here</span>
</div>
</div>
<!-- Thu 1: Portuguese -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-orange-50 border-l-4 border-orange-500 p-3 shadow-sm cursor-grab hover:bg-orange-100 transition-colors dark:bg-orange-900/20 dark:border-orange-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Portuguese</p>
<span class="material-symbols-outlined text-[16px] text-orange-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Carlos D.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Fri 1: Science -->
<div class="p-2">
<div class="h-full w-full rounded-lg bg-green-50 border-l-4 border-green-500 p-3 shadow-sm cursor-grab hover:bg-green-100 transition-colors dark:bg-green-900/20 dark:border-green-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Science</p>
<span class="material-symbols-outlined text-[16px] text-green-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Jane R.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Lab 1</span>
</div>
</div>
</div>
<!-- Row 2: 08:20 - 09:10 -->
<div class="grid grid-cols-[80px_1fr_1fr_1fr_1fr_1fr] min-h-[120px] border-b border-slate-100 dark:border-slate-800">
<div class="flex flex-col items-center justify-center border-r border-slate-100 bg-slate-50/50 p-2 text-center text-xs text-slate-500 dark:bg-slate-800/30 dark:border-slate-800 dark:text-slate-400">
<span class="font-bold">08:20</span>
<span class="text-slate-400">-</span>
<span>09:10</span>
</div>
<!-- Mon 2: Math -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-blue-50 border-l-4 border-blue-500 p-3 shadow-sm cursor-grab hover:bg-blue-100 transition-colors dark:bg-blue-900/20 dark:border-blue-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Mathematics</p>
<span class="material-symbols-outlined text-[16px] text-blue-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Sarah M.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Tue 2: Empty -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800 relative group">
<div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 group-hover:border-primary/50 group-hover:bg-primary/5 transition-all dark:border-slate-700 dark:bg-slate-800/50">
<span class="text-xs font-medium group-hover:text-primary">Drop here</span>
</div>
</div>
<!-- Wed 2: Conflict Example -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg border border-red-200 bg-red-50 p-3 shadow-sm flex flex-col items-center justify-center text-center dark:bg-red-900/20 dark:border-red-800 opacity-90">
<span class="material-symbols-outlined text-red-500 mb-1">block</span>
<p class="text-xs font-bold text-red-700 dark:text-red-400">Teacher Unavailable</p>
<p class="text-[10px] text-red-500 mt-0.5">Prof. Sarah is in Class 8B</p>
</div>
</div>
<!-- Thu 2: Portuguese -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-orange-50 border-l-4 border-orange-500 p-3 shadow-sm cursor-grab hover:bg-orange-100 transition-colors dark:bg-orange-900/20 dark:border-orange-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Portuguese</p>
<span class="material-symbols-outlined text-[16px] text-orange-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Carlos D.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Fri 2: Science -->
<div class="p-2">
<div class="h-full w-full rounded-lg bg-green-50 border-l-4 border-green-500 p-3 shadow-sm cursor-grab hover:bg-green-100 transition-colors dark:bg-green-900/20 dark:border-green-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Science</p>
<span class="material-symbols-outlined text-[16px] text-green-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Jane R.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Lab 1</span>
</div>
</div>
</div>
<!-- Recess -->
<div class="grid grid-cols-[80px_1fr] min-h-[40px] border-b border-slate-200 bg-slate-100/50 dark:bg-slate-800/50 dark:border-slate-700">
<div class="flex flex-col items-center justify-center border-r border-slate-200 dark:border-slate-700 p-1 text-center text-xs text-slate-400">
<span>09:10</span>
</div>
<div class="flex items-center justify-center p-2">
<span class="text-xs font-bold uppercase tracking-widest text-slate-400">Morning Recess (20 min)</span>
</div>
</div>
<!-- Row 3: 09:30 - 10:20 -->
<div class="grid grid-cols-[80px_1fr_1fr_1fr_1fr_1fr] min-h-[120px] border-b border-slate-100 dark:border-slate-800">
<div class="flex flex-col items-center justify-center border-r border-slate-100 bg-slate-50/50 p-2 text-center text-xs text-slate-500 dark:bg-slate-800/30 dark:border-slate-800 dark:text-slate-400">
<span class="font-bold">09:30</span>
<span class="text-slate-400">-</span>
<span>10:20</span>
</div>
<!-- Mon 3: Empty -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800 relative group">
<div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 group-hover:border-primary/50 group-hover:bg-primary/5 transition-all dark:border-slate-700 dark:bg-slate-800/50">
<span class="text-xs font-medium group-hover:text-primary">Drop here</span>
</div>
</div>
<!-- Tue 3: Geography -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800">
<div class="h-full w-full rounded-lg bg-teal-50 border-l-4 border-teal-500 p-3 shadow-sm cursor-grab hover:bg-teal-100 transition-colors dark:bg-teal-900/20 dark:border-teal-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">Geography</p>
<span class="material-symbols-outlined text-[16px] text-teal-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. Amanda B.</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Room 204</span>
</div>
</div>
<!-- Wed 3: Ghost Preview of Drop -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800 relative bg-primary/5">
<div class="h-full w-full rounded-lg border-2 border-primary/40 bg-white/50 p-3 opacity-60 dark:bg-slate-800/50">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">English</p>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Prof. John D.</p>
</div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="rounded-full bg-primary px-3 py-1 text-xs font-bold text-white shadow-lg">Drop to assign</span>
</div>
</div>
<!-- Thu 3: Empty -->
<div class="p-2 border-r border-slate-100 dark:border-slate-800 relative group">
<div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 group-hover:border-primary/50 group-hover:bg-primary/5 transition-all dark:border-slate-700 dark:bg-slate-800/50">
<span class="text-xs font-medium group-hover:text-primary">Drop here</span>
</div>
</div>
<!-- Fri 3: PE -->
<div class="p-2">
<div class="h-full w-full rounded-lg bg-red-50 border-l-4 border-red-500 p-3 shadow-sm cursor-grab hover:bg-red-100 transition-colors dark:bg-red-900/20 dark:border-red-500">
<div class="flex justify-between items-start">
<p class="font-bold text-slate-800 dark:text-white text-sm">P.E.</p>
<span class="material-symbols-outlined text-[16px] text-red-500">more_horiz</span>
</div>
<p class="text-xs text-slate-500 mt-1 dark:text-slate-400">Coach Mike</p>
<span class="inline-block mt-2 rounded bg-white px-1.5 py-0.5 text-[10px] font-bold text-slate-600 shadow-sm dark:bg-slate-800 dark:text-slate-300">Gym</span>
</div>
</div>
</div>
<!-- Row 4: 10:20 - 11:10 -->
<div class="grid grid-cols-[80px_1fr_1fr_1fr_1fr_1fr] min-h-[120px]">
<div class="flex flex-col items-center justify-center border-r border-slate-100 bg-slate-50/50 p-2 text-center text-xs text-slate-500 dark:bg-slate-800/30 dark:border-slate-800 dark:text-slate-400">
<span class="font-bold">10:20</span>
<span class="text-slate-400">-</span>
<span>11:10</span>
</div>
<div class="p-2 border-r border-slate-100 dark:border-slate-800"><div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 dark:border-slate-700 dark:bg-slate-800/50"><span class="text-xs font-medium">Drop here</span></div></div>
<div class="p-2 border-r border-slate-100 dark:border-slate-800"><div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 dark:border-slate-700 dark:bg-slate-800/50"><span class="text-xs font-medium">Drop here</span></div></div>
<div class="p-2 border-r border-slate-100 dark:border-slate-800"><div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 dark:border-slate-700 dark:bg-slate-800/50"><span class="text-xs font-medium">Drop here</span></div></div>
<div class="p-2 border-r border-slate-100 dark:border-slate-800"><div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 dark:border-slate-700 dark:bg-slate-800/50"><span class="text-xs font-medium">Drop here</span></div></div>
<div class="p-2"><div class="h-full w-full rounded-lg border-2 border-dashed border-slate-200 flex items-center justify-center bg-slate-50/50 text-slate-400 dark:border-slate-700 dark:bg-slate-800/50"><span class="text-xs font-medium">Drop here</span></div></div>
</div>
</div>
</div>
</div>
<!-- Footer / Legend -->
<div class="absolute bottom-6 right-8 flex items-center gap-4 rounded-full bg-white px-4 py-2 shadow-lg ring-1 ring-slate-200 dark:bg-slate-800 dark:ring-slate-700">
<div class="flex items-center gap-2">
<div class="h-3 w-3 rounded-sm bg-blue-500"></div>
<span class="text-xs font-medium text-slate-600 dark:text-slate-300">Assigned</span>
</div>
<div class="flex items-center gap-2">
<div class="h-3 w-3 rounded-sm bg-red-500"></div>
<span class="text-xs font-medium text-slate-600 dark:text-slate-300">Conflict</span>
</div>
<div class="flex items-center gap-2">
<div class="h-3 w-3 rounded-sm border border-dashed border-slate-400"></div>
<span class="text-xs font-medium text-slate-600 dark:text-slate-300">Empty</span>
</div>
</div>
</div>
</main>
</div>
<style>
        /* Custom scrollbar for better aesthetic */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #475569;
        }
    </style>
</body></html>