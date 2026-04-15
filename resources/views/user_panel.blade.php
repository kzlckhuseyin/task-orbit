<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel - Task Orbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-navy-deep { background-color: #020617; }
        .glass { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(51, 65, 85, 0.4); }
    </style>
</head>
<body class="bg-navy-deep text-slate-50 flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">

    <!-- Arka Plan Parlamaları -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-indigo-600/5 rounded-full blur-[150px]"></div>
    </div>

    <!-- SIDEBAR -->
    <aside :class="sidebarOpen ? 'w-72' : 'w-20'" class="glass border-r border-slate-800/40 transition-all duration-300 flex flex-col relative z-20 shrink-0">
        <div class="h-20 flex items-center px-6 gap-3 shrink-0">
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
            </div>
            <span x-show="sidebarOpen" class="text-xl font-bold tracking-tight whitespace-nowrap">TASK ORBIT</span>
        </div>

        <nav class="flex-1 px-4 space-y-2 mt-8 overflow-y-auto">
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                <span x-show="sidebarOpen" class="text-sm font-bold">Overview</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:bg-slate-800/40 hover:text-white transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg>
                <span x-show="sidebarOpen" class="text-sm font-medium">Advertisements</span>
            </a>
        </nav>

        <!-- Alt Profil -->
        <div class="p-4 border-t border-slate-800/40">
            <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-900/40 border border-slate-800/60">
                <div class="h-9 w-9 rounded-xl bg-blue-600 flex items-center justify-center font-bold text-xs text-white">A</div>
                <div x-show="sidebarOpen" class="min-w-0">
                    <p class="text-sm font-bold truncate">AAA</p>
                    <p class="text-[10px] text-slate-500 font-medium">Intern @ TechNova</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col min-w-0 overflow-hidden relative z-10">
        <header class="h-20 border-b border-slate-800/40 bg-slate-950/20 backdrop-blur-md flex items-center justify-between px-8 shrink-0">
            <h2 class="text-lg font-bold">Hoş Geldin, AAA </h2>
            <div class="flex items-center gap-4">
                <button class="p-2 rounded-xl hover:bg-slate-800/40 text-slate-400 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                </button>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 space-y-8">
            <!-- Ana Profil Özel Alanı: Şirketler ve İlanlar -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Task Orbit Şirketleri Bölümü -->
                <div class="glass rounded-[2rem] overflow-hidden">
                    <div class="p-6 border-b border-slate-800/40 flex items-center justify-between">
                        <h3 class="font-bold flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                            Task Orbit Companies
                        </h3>
                        <button class="text-xs font-bold text-blue-500 hover:underline">See All</button>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-blue-500/40 transition-all cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-xl bg-blue-600/10 text-blue-500 flex items-center justify-center font-black">TN</div>
                                <div>
                                    <p class="font-bold text-sm group-hover:text-blue-400 transition-colors">TechNova Solutions</p>
                                    <p class="text-[10px] text-slate-500 uppercase tracking-widest">4 Active Listing</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600 group-hover:text-blue-500 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-emerald-500/40 transition-all cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-xl bg-emerald-600/10 text-emerald-500 flex items-center justify-center font-black">GS</div>
                                <div>
                                    <p class="font-bold text-sm group-hover:text-emerald-400 transition-colors">Global Soft</p>
                                    <p class="text-[10px] text-slate-500 uppercase tracking-widest">2 Active Listing</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600 group-hover:text-emerald-500 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </div>
                        <div class="flex items-center justify-between p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-purple-500/40 transition-all cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-xl bg-purple-600/10 text-purple-500 flex items-center justify-center font-black">OL</div>
                                <div>
                                    <p class="font-bold text-sm group-hover:text-purple-400 transition-colors">Orbit Lab</p>
                                    <p class="text-[10px] text-slate-500 uppercase tracking-widest">6 Active Listing</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-600 group-hover:text-purple-500 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </div>
                    </div>
                </div>

                <!-- Staj İlanları Bölümü -->
                <div class="glass rounded-[2rem] overflow-hidden">
                    <div class="p-6 border-b border-slate-800/40 flex items-center justify-between">
                        <h3 class="font-bold flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            Featured Internship Opportunities
                        </h3>
                        <button class="text-xs font-bold text-amber-500 hover:underline">See All</button>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-amber-500/40 transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <p class="font-bold text-sm group-hover:text-amber-400 transition-colors">Orbit Lab - Frontend Intern</p>
                                    <p class="text-[10px] text-slate-500">Online • Full Time</p>
                                </div>
                                <span class="px-2 py-1 rounded-lg bg-amber-500/10 text-amber-500 text-[9px] font-bold uppercase">New</span>
                            </div>
                            <p class="text-xs text-slate-400 line-clamp-1">Interns will develop modern interfaces using React and Tailwind CSS....</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-blue-500/40 transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <p class="font-bold text-sm group-hover:text-blue-400 transition-colors">TechNova - Backend Developer</p>
                                    <p class="text-[10px] text-slate-500">İstanbul • Hibrit</p>
                                </div>
                                <span class="px-2 py-1 rounded-lg bg-blue-600/10 text-blue-500 text-[9px] font-bold uppercase">Popular</span>
                            </div>
                            <p class="text-xs text-slate-400 line-clamp-1">We are looking for colleagues to join our C# team...</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-slate-900/40 border border-slate-800/60 hover:border-emerald-500/40 transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <p class="font-bold text-sm group-hover:text-emerald-400 transition-colors">Global Soft - UI/UX Design</p>
                                    <p class="text-[10px] text-slate-500">Ankara • Office</p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-400 line-clamp-1">We are looking for Creative Graphic Designer interns...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
