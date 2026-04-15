<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Task Orbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-navy-deep { background-color: #020617; }
        .glass { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(51, 65, 85, 0.4); }

        /* Netflix Tarzı Profil Kartı Efektleri */
        .profile-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .profile-card:hover { transform: scale(1.02); border-color: rgba(37, 99, 235, 0.6); }
        .profile-card:hover .avatar-box { border-color: #2563eb; box-shadow: 0 0 20px rgba(37, 99, 235, 0.3); }
    </style>
</head>
<body class="bg-navy-deep text-slate-50 flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">

    <!-- Arka Plan Parlamaları -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-indigo-600/5 rounded-full blur-[150px]"></div>
    </div>

    <!-- SIDEBAR (Sol Menü) -->
    <aside
        :class="sidebarOpen ? 'w-72' : 'w-20'"
        class="glass border-r border-slate-800/40 transition-all duration-300 flex flex-col relative z-20 shrink-0 group/sidebar"
    >
        <!-- Sidebar Header & Toggle -->
        <div class="h-20 flex items-center px-6 justify-between shrink-0">
            <div class="flex items-center gap-3 overflow-hidden">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <span x-show="sidebarOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-x-2" x-transition:enter-end="opacity-100 translate-x-0" class="text-xl font-bold tracking-tight whitespace-nowrap">TASK ORBIT</span>
            </div>
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-lg hover:bg-slate-800/40 text-slate-500 hover:text-white transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" :class="sidebarOpen ? '' : 'rotate-180'" class="h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" /></svg>
            </button>
        </div>

        <nav class="flex-1 px-4 space-y-6 mt-8 overflow-y-auto">
            <div>
                <p x-show="sidebarOpen" class="px-4 text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 mb-4">Platform</p>
                <div class="relative group/item">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-blue-600/10 text-blue-500 border border-blue-600/20 transition-all hover:bg-blue-600/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        <span x-show="sidebarOpen" class="font-bold text-sm whitespace-nowrap">Dashboard</span>
                    </a>
                    <!-- Tooltip -->
                    <div x-show="!sidebarOpen" class="absolute left-full top-1/2 -translate-y-1/2 ml-4 px-3 py-2 bg-slate-900 text-white text-xs font-bold rounded-lg opacity-0 group-hover/item:opacity-100 pointer-events-none transition-all whitespace-nowrap z-[100] border border-slate-800 shadow-2xl">
                        Dashboard
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <div class="relative group/item">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/40 hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2z" /></svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium whitespace-nowrap">Repository</span>
                    </a>
                    <div x-show="!sidebarOpen" class="absolute left-full top-1/2 -translate-y-1/2 ml-4 px-3 py-2 bg-slate-900 text-white text-xs font-bold rounded-lg opacity-0 group-hover/item:opacity-100 pointer-events-none transition-all whitespace-nowrap z-[100] border border-slate-800 shadow-2xl">
                        Repository
                    </div>
                </div>
                <div class="relative group/item">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/40 hover:text-white transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        <span x-show="sidebarOpen" class="text-sm font-medium whitespace-nowrap">Documentation</span>
                    </a>
                    <div x-show="!sidebarOpen" class="absolute left-full top-1/2 -translate-y-1/2 ml-4 px-3 py-2 bg-slate-900 text-white text-xs font-bold rounded-lg opacity-0 group-hover/item:opacity-100 pointer-events-none transition-all whitespace-nowrap z-[100] border border-slate-800 shadow-2xl">
                        Documentation
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar Alt Profil (AAA) -->
        <div class="p-4 border-t border-slate-800/40">
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-900/40 border border-slate-800/60 overflow-hidden">
                <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center font-bold text-xs text-white shrink-0">A</div>
                <div x-show="sidebarOpen" class="min-w-0">
                    <p class="text-sm font-bold truncate">AAA</p>
                    <p class="text-[10px] text-slate-500 font-medium">github-user</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col min-w-0 overflow-hidden relative z-10">

        <!-- Topbar -->
        <header class="h-20 border-b border-slate-800/40 bg-slate-950/20 backdrop-blur-md flex items-center px-8 shrink-0">
            <div class="flex items-center gap-3 text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" /></svg>
                <span class="text-sm font-bold uppercase tracking-widest">Dashboard</span>
            </div>
        </header>

        <!-- PROFIL SEÇİM ALANI (Netflix Mantığı) -->
        <div class="flex-1 overflow-y-auto p-12 flex flex-col items-center justify-center">

            <div class="text-center mb-16">
                <h2 class="text-4xl font-black tracking-tight mb-4">SELECT YOUR PROFILE</h2>
                <p class="text-slate-500 font-medium">Please select the Task Orbit profile you wish to continue with.</p>
            </div>

            <!-- Profil Kartları Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 w-full max-w-6xl">

                <!-- 1. Ana Profil (Default) -->
                <a href="/user-panel" class="profile-card glass p-8 rounded-[2.5rem] flex flex-col items-center text-center group">
                    <div class="avatar-box h-24 w-24 mb-6 rounded-3xl border-2 border-slate-700 bg-slate-900 flex items-center justify-center transition-all duration-300">
                        <img src="https://github.com/identicons/jason.png" alt="Zerda" class="h-16 w-16 opacity-70 group-hover:opacity-100 transition-opacity">
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors">AAA (Main)</h3>
                </a>

                <!-- 2. Şirket Profili (TechNova - Intern) -->
                <a href="/company-view/technova" class="profile-card glass p-8 rounded-[2.5rem] flex flex-col items-center text-center group">
                    <div class="avatar-box h-24 w-24 mb-6 rounded-3xl border-2 border-slate-700 bg-blue-600/10 flex items-center justify-center transition-all duration-300">
                        <span class="text-3xl font-black text-blue-500">TN</span>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-blue-400 transition-colors">TechNova</h3>
                    <p class="text-xs text-blue-500/80 mt-2 font-bold uppercase tracking-widest">Intern (Stajyer)</p>
                </a>

                <!-- 3. Şirket Profili (Global Soft - Mentor) -->
                <a href="/company-view/global-soft" class="profile-card glass p-8 rounded-[2.5rem] flex flex-col items-center text-center group">
                    <div class="avatar-box h-24 w-24 mb-6 rounded-3xl border-2 border-slate-700 bg-emerald-600/10 flex items-center justify-center transition-all duration-300">
                        <span class="text-3xl font-black text-emerald-500">GS</span>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-emerald-400 transition-colors">Global Soft</h3>
                    <p class="text-xs text-emerald-500/80 mt-2 font-bold uppercase tracking-widest">Mentor (Rehber)</p>
                </a>


                <!-- 4. Şirket Profili (Orbit Lab - Intern) -->
                <a href="/company-view/orbit-lab" class="profile-card glass p-8 rounded-[2.5rem] flex flex-col items-center text-center group">
                    <div class="avatar-box h-24 w-24 mb-6 rounded-3xl border-2 border-slate-700 bg-amber-600/10 flex items-center justify-center transition-all duration-300">
                        <span class="text-3xl font-black text-amber-500">OL</span>
                    </div>
                    <h3 class="text-xl font-bold text-white group-hover:text-amber-400 transition-colors">Orbit Lab</h3>
                    <p class="text-xs text-amber-500/80 mt-2 font-bold uppercase tracking-widest">Intern (Stajyer)</p>
                </a>

            </div>

            <!-- Alt Bilgi -->
            <div class="mt-20">
                <button class="px-8 py-3 rounded-full border border-slate-800 text-slate-500 text-xs font-bold uppercase tracking-[0.3em] hover:bg-slate-800 hover:text-white transition-all">
                   Manage Profiles
                </button>
            </div>
        </div>
    </main>
</body>
</html>
