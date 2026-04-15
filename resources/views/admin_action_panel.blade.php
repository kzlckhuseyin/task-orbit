<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Hub - Task Orbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; } [x-cloak] { display: none !important; }</style>
</head>
<body class="bg-[#020617] text-slate-50 flex h-screen overflow-hidden" x-data="{ sidebarCollapsed: false }">

    <!-- Sidebar -->
    <aside :class="sidebarCollapsed ? 'w-20' : 'w-72'" class="border-r border-slate-800/40 bg-slate-950/40 backdrop-blur-xl flex flex-col transition-all duration-300 relative z-20">
        <div class="p-6 flex items-center gap-3" :class="sidebarCollapsed ? 'justify-center' : ''">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
            </div>
            <span x-show="!sidebarCollapsed" class="text-xl font-bold tracking-tight whitespace-nowrap">TASK ORBIT</span>
        </div>

        <div class="px-4 mb-4 flex justify-end">
            <button @click="sidebarCollapsed = !sidebarCollapsed" class="p-2 rounded-lg hover:bg-slate-800/40 text-slate-500 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" :class="sidebarCollapsed ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
            </button>
        </div>

        <nav class="flex-1 px-4 space-y-2">
            <a href="/admin-action-panel" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold bg-blue-600 text-white shadow-lg shadow-blue-600/20" :class="sidebarCollapsed ? 'justify-center' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg>
                <span x-show="!sidebarCollapsed">Dashboard</span>
            </a>
            <a href="/companies" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold text-slate-400 hover:bg-slate-800/40 hover:text-white transition-all" :class="sidebarCollapsed ? 'justify-center' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                <span x-show="!sidebarCollapsed">Companies</span>
            </a>
        </nav>

        <div class="p-6 border-t border-slate-800/40">
            <a href="/admin" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-bold text-red-400 hover:bg-red-500/10 transition-all" :class="sidebarCollapsed ? 'justify-center' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                <span x-show="!sidebarCollapsed">Log Out</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Bar -->
        <header class="h-20 border-b border-slate-800/40 bg-slate-950/20 backdrop-blur-md flex items-center justify-between px-8">
            <div class="text-sm font-medium text-slate-500">Yönetim Merkezi</div>

            <div class="flex items-center gap-6">
                <button class="relative h-10 w-10 flex items-center justify-center rounded-xl hover:bg-slate-800/40 transition-all text-slate-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                    <span class="absolute top-2 right-2 h-2 w-2 bg-blue-600 rounded-full border-2 border-[#020617]"></span>
                </button>

                <div class="h-8 w-[1px] bg-slate-800/40"></div>

                <!-- TAŞMA SORUNU GİDERİLMİŞ PROFİL KARTI -->
                <div class="relative group cursor-pointer flex items-center gap-3 pl-4 pr-2 py-1.5 rounded-2xl hover:bg-slate-800/30 transition-all border border-transparent hover:border-slate-800/40 max-w-[240px]">
                    <!-- Yazı Alanı (min-w-0 ve flex-1 taşmayı engeller) -->
                    <div class="text-right hidden sm:block min-w-0 flex-1">
                        <p class="text-sm font-bold text-slate-100 group-hover:text-blue-400 transition-colors truncate" title="AAA BBBB (Admin)">
                            AAA BBBB (Admin)
                        </p>
                        <p class="text-[10px] font-bold text-blue-500/80 uppercase tracking-widest truncate">
                            Süper Yönetici
                        </p>
                    </div>

                    <div class="relative flex-shrink-0">
                        <!-- Avatar -->
                        <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-blue-600 via-blue-500 to-indigo-600 flex items-center justify-center font-bold text-sm shadow-lg shadow-blue-500/30 border border-white/10 text-white">
                            AB
                        </div>
                        <!-- Online Status -->
                        <div class="absolute -bottom-1 -right-1 h-3.5 w-3.5 bg-emerald-500 rounded-full border-2 border-[#020617] shadow-sm"></div>
                    </div>

                    <!-- Chevron Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-500 group-hover:text-slate-300 transition-colors flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                </div>
            </div>
        </header>

        <div class="flex-1 p-8 space-y-8 overflow-y-auto">
            <h1 class="text-4xl font-extrabold tracking-tight">Hoşgeldiniz, AAA BBBB</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="/companies" class="group bg-slate-900/40 border border-slate-800/40 p-8 rounded-[2rem] hover:border-blue-500/40 transition-all">
                    <div class="h-14 w-14 rounded-2xl bg-blue-600/10 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h3 class="text-xl font-bold">Companies</h3>
                    <p class="text-slate-500 text-sm mt-2">Şirket kayıtlarını ve onay süreçlerini yönetin.</p>
                </a>
            </div>
        </div>
    </main>
</body>
</html>
