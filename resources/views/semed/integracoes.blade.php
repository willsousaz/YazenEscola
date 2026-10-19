<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>API &amp; Webhooks Configuration - Xinguara LMS</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind Config -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#14a6f5",
                        "primary-dark": "#0d8ecf",
                        "background-light": "#f5f7f8",
                        "background-dark": "#101c23",
                        "surface-dark": "#182a34",
                        "surface-hover": "#223b49",
                        "border-dark": "#305569",
                        "text-secondary": "#8fb6cc",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "mono": ["JetBrains Mono", "monospace"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased overflow-x-hidden">
<div class="flex h-screen w-full overflow-hidden">
<!-- Sidebar (Reused and adapted from component list) -->
<aside class="flex w-72 flex-col bg-[#101c23] border-r border-border-dark hidden lg:flex h-full">
<div class="flex h-full flex-col justify-between p-4">
<div class="flex flex-col gap-4">
<div class="flex gap-3 items-center mb-6">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 bg-primary/20 flex items-center justify-center text-primary font-bold text-xl">
                        X
                    </div>
<div class="flex flex-col">
<h1 class="text-white text-base font-medium leading-normal">Admin Panel</h1>
<p class="text-text-secondary text-xs font-normal leading-normal">Xinguara Municipal School</p>
</div>
</div>
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">school</span>
<p class="text-sm font-medium">Students</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">class</span>
<p class="text-sm font-medium">Classes</p>
</a>
<div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-surface-hover text-white">
<span class="material-symbols-outlined fill-1">webhook</span>
<p class="text-sm font-medium">API &amp; Webhooks</p>
</div>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</div>
</div>
<div class="p-3 bg-surface-dark rounded-xl border border-border-dark">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-green-400 text-sm">check_circle</span>
<span class="text-xs font-mono text-green-400">System Operational</span>
</div>
<div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden">
<div class="bg-green-400 h-full w-[98%]"></div>
</div>
</div>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col h-full overflow-hidden bg-background-dark relative">
<!-- Top Navigation / Breadcrumbs -->
<header class="flex items-center justify-between px-8 py-5 border-b border-border-dark bg-background-dark/50 backdrop-blur-md sticky top-0 z-10">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 text-sm text-text-secondary">
<a class="hover:text-white transition-colors" href="#">Settings</a>
<span class="material-symbols-outlined text-[12px]">chevron_right</span>
<span class="text-white">API Configuration</span>
</div>
<h1 class="text-2xl font-bold text-white tracking-tight">API &amp; Webhooks</h1>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-dark border border-border-dark">
<span class="material-symbols-outlined text-primary text-sm">lock</span>
<span class="text-xs font-medium text-text-secondary">Protocol: <span class="text-white">OAuth2 / JWT</span></span>
</div>
<button class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors shadow-[0_0_15px_rgba(20,166,245,0.3)] flex items-center gap-2">
<span class="material-symbols-outlined text-lg">add</span>
                    Generate New Key
                </button>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
<div class="max-w-7xl mx-auto flex flex-col gap-8 pb-20">
<!-- Alert Banner -->
<div class="flex items-start gap-4 p-4 rounded-lg bg-yellow-500/10 border border-yellow-500/20 text-yellow-200 text-sm">
<span class="material-symbols-outlined text-yellow-500">warning</span>
<div>
<p class="font-medium text-yellow-500">Production Environment Active</p>
<p class="opacity-80 mt-1">Changes made to API keys or Webhooks will immediately affect live integrations with the Municipal Education Database.</p>
</div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
<!-- Left Column: API Keys & Webhooks -->
<div class="xl:col-span-2 flex flex-col gap-8">
<!-- Section 1: Active API Keys -->
<section>
<div class="flex items-center justify-between mb-4">
<h2 class="text-lg font-semibold text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">key</span>
                                    Active API Keys
                                </h2>
</div>
<div class="bg-surface-dark rounded-xl border border-border-dark overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-border-dark bg-[#14232e]">
<th class="p-4 text-xs font-medium text-text-secondary uppercase tracking-wider">Key Label</th>
<th class="p-4 text-xs font-medium text-text-secondary uppercase tracking-wider">Token Prefix</th>
<th class="p-4 text-xs font-medium text-text-secondary uppercase tracking-wider">Permissions</th>
<th class="p-4 text-xs font-medium text-text-secondary uppercase tracking-wider">Created</th>
<th class="p-4 text-xs font-medium text-text-secondary uppercase tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-border-dark">
<tr class="group hover:bg-surface-hover/50 transition-colors">
<td class="p-4 text-sm font-medium text-white">Xinguara-LMS-Connect</td>
<td class="p-4">
<div class="flex items-center gap-2 font-mono text-xs bg-black/30 px-2 py-1 rounded text-text-secondary w-fit">
<span>sk_live_...8x9s</span>
<button class="hover:text-white transition-colors" title="Copy full key">
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                                        Read / Write
                                                    </span>
</td>
<td class="p-4 text-sm text-text-secondary">Oct 24, 2023</td>
<td class="p-4 text-right">
<button class="text-red-400 hover:text-red-300 text-xs font-medium px-3 py-1.5 rounded hover:bg-red-500/10 transition-colors border border-transparent hover:border-red-500/20">
                                                        Revoke
                                                    </button>
</td>
</tr>
<tr class="group hover:bg-surface-hover/50 transition-colors">
<td class="p-4 text-sm font-medium text-white">Attendance-Sync-Bot</td>
<td class="p-4">
<div class="flex items-center gap-2 font-mono text-xs bg-black/30 px-2 py-1 rounded text-text-secondary w-fit">
<span>sk_live_...3k4j</span>
<button class="hover:text-white transition-colors" title="Copy full key">
<span class="material-symbols-outlined text-[14px]">content_copy</span>
</button>
</div>
</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                        Read Only
                                                    </span>
</td>
<td class="p-4 text-sm text-text-secondary">Dec 15, 2023</td>
<td class="p-4 text-right">
<button class="text-red-400 hover:text-red-300 text-xs font-medium px-3 py-1.5 rounded hover:bg-red-500/10 transition-colors border border-transparent hover:border-red-500/20">
                                                        Revoke
                                                    </button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- Section 2: Webhooks -->
<section>
<div class="flex items-center justify-between mb-4">
<h2 class="text-lg font-semibold text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary">hub</span>
                                    Webhooks Management
                                </h2>
<button class="text-sm text-primary hover:text-primary-dark font-medium flex items-center gap-1">
<span class="material-symbols-outlined text-lg">add</span>
                                    Add Endpoint
                                </button>
</div>
<div class="flex flex-col gap-4">
<!-- Webhook Item 1 -->
<div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col md:flex-row gap-6 items-start md:items-center justify-between group hover:border-primary/30 transition-colors">
<div class="flex-1 min-w-0">
<div class="flex items-center gap-3 mb-2">
<span class="font-mono text-sm text-white truncate bg-black/20 px-2 py-1 rounded">https://api.external-system.com/webhooks/enrollment</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wide bg-green-500/20 text-green-400">Active</span>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded bg-surface-hover text-text-secondary text-xs border border-border-dark">student.enrolled</span>
<span class="px-2 py-1 rounded bg-surface-hover text-text-secondary text-xs border border-border-dark">student.transferred</span>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-end">
<button class="px-3 py-2 text-xs font-medium text-text-secondary hover:text-white bg-surface-hover rounded-lg border border-transparent hover:border-border-dark transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-sm">bolt</span>
                                            Test
                                        </button>
<button class="p-2 text-text-secondary hover:text-white hover:bg-surface-hover rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-text-secondary hover:text-red-400 hover:bg-red-500/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
<!-- Webhook Item 2 -->
<div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col md:flex-row gap-6 items-start md:items-center justify-between group hover:border-primary/30 transition-colors">
<div class="flex-1 min-w-0">
<div class="flex items-center gap-3 mb-2">
<span class="font-mono text-sm text-white truncate bg-black/20 px-2 py-1 rounded">https://grades-analytics.xinguara.gov.br/listener</span>
<span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wide bg-gray-500/20 text-gray-400">Inactive</span>
</div>
<div class="flex flex-wrap gap-2">
<span class="px-2 py-1 rounded bg-surface-hover text-text-secondary text-xs border border-border-dark">grade.published</span>
</div>
</div>
<div class="flex items-center gap-3 w-full md:w-auto justify-end">
<button class="px-3 py-2 text-xs font-medium text-text-secondary hover:text-white bg-surface-hover rounded-lg border border-transparent hover:border-border-dark transition-all flex items-center gap-2 opacity-50 cursor-not-allowed">
<span class="material-symbols-outlined text-sm">bolt</span>
                                            Test
                                        </button>
<button class="p-2 text-text-secondary hover:text-white hover:bg-surface-hover rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-text-secondary hover:text-red-400 hover:bg-red-500/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Documentation & Status -->
<div class="xl:col-span-1 flex flex-col gap-8">
<!-- Documentation Card -->
<div class="bg-gradient-to-br from-surface-dark to-[#0f1a21] rounded-xl border border-border-dark p-6 relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
<span class="material-symbols-outlined text-9xl">menu_book</span>
</div>
<h3 class="text-lg font-semibold text-white mb-2 relative z-10">API Documentation</h3>
<p class="text-sm text-text-secondary mb-6 relative z-10">Access comprehensive Swagger UI and GraphQL playground for integration details.</p>
<a class="inline-flex items-center justify-center w-full px-4 py-3 bg-surface-hover hover:bg-surface-hover/80 border border-primary/30 text-primary hover:text-white rounded-lg text-sm font-medium transition-all group-hover:border-primary/60 relative z-10" href="#">
                                Open API Playground
                                <span class="material-symbols-outlined text-sm ml-2">open_in_new</span>
</a>
</div>
<!-- Integration Snippet -->
<div class="bg-surface-dark rounded-xl border border-border-dark p-0 overflow-hidden">
<div class="px-4 py-3 border-b border-border-dark bg-[#14232e] flex items-center justify-between">
<span class="text-xs font-medium text-text-secondary uppercase">Quick Start (cURL)</span>
<button class="text-text-secondary hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">content_copy</span>
</button>
</div>
<div class="p-4 bg-[#0d1216] overflow-x-auto">
<pre class="font-mono text-xs leading-relaxed"><code class="language-bash"><span class="text-purple-400">curl</span> -X GET \<br/>  https://api.xinguara.edu.br/v1/students \<br/>  -H <span class="text-green-400">"Authorization: Bearer &lt;YOUR_API_KEY&gt;"</span></code></pre>
</div>
</div>
<!-- Recent Webhook Logs (Mini) -->
<div class="bg-surface-dark rounded-xl border border-border-dark p-5">
<h3 class="text-sm font-semibold text-white mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-text-secondary text-base">history</span>
                                Recent Deliveries
                            </h3>
<div class="space-y-4">
<div class="flex items-start gap-3 text-xs">
<div class="mt-0.5 min-w-[6px] h-[6px] rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-white font-mono">POST /enrollment</span>
<span class="text-green-400 font-bold">200 OK</span>
</div>
<p class="text-text-secondary text-[11px]">Today, 10:42 AM</p>
</div>
</div>
<div class="flex items-start gap-3 text-xs">
<div class="mt-0.5 min-w-[6px] h-[6px] rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-white font-mono">POST /grades</span>
<span class="text-green-400 font-bold">200 OK</span>
</div>
<p class="text-text-secondary text-[11px]">Yesterday, 4:15 PM</p>
</div>
</div>
<div class="flex items-start gap-3 text-xs">
<div class="mt-0.5 min-w-[6px] h-[6px] rounded-full bg-red-500 shadow-[0_0_8px_rgba(239,68,68,0.6)]"></div>
<div class="flex-1">
<div class="flex justify-between mb-1">
<span class="text-white font-mono">POST /grades</span>
<span class="text-red-400 font-bold">504 Timeout</span>
</div>
<p class="text-text-secondary text-[11px]">Yesterday, 4:10 PM</p>
</div>
</div>
</div>
<button class="w-full mt-4 text-xs text-text-secondary hover:text-primary transition-colors text-center border-t border-border-dark pt-3">
                                View Full Logs
                            </button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>