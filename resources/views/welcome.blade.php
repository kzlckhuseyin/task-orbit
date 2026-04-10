<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Orbit - Modern Staj Yönetimi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-navy-deep { background-color: #020617; }
        .glass { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(51, 65, 85, 0.4); }
    </style>
</head>
<body class="bg-navy-deep text-slate-50 overflow-x-hidden">

    <!-- Background Glows -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-indigo-600/5 rounded-full blur-[150px]"></div>
    </div>

    <!-- 1. HOŞGELDİN SAYFASI (WELCOME PAGE) -->
    <section id="welcome" class="min-h-screen relative z-10">
        <!-- Navigation -->
        <nav class="fixed top-0 z-50 w-full border-b border-slate-800/40 bg-slate-950/60 backdrop-blur-xl">
            <div class="container mx-auto flex h-20 items-center justify-between px-6 md:px-12">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">TASK ORBIT</span>
                </div>

                <div class="flex items-center gap-4">
                    <a href="#login" class="text-slate-400 hover:text-slate-50 font-bold text-sm transition-colors">Giriş Yap</a>
                    <a href="/login" class="bg-blue-600 text-white hover:bg-blue-500 rounded-full px-8 py-2.5 font-bold text-sm shadow-xl shadow-blue-600/20 transition-all active:scale-95">
                        Kayıt Ol
                    </a>
                </div>
            </div>
        </nav>

        <main class="container mx-auto px-6 pt-40 pb-20 md:px-12">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-600/10 border border-blue-600/20 text-blue-500 text-xs font-bold uppercase tracking-widest">
                    Yeni Nesil Staj Yönetimi
                </div>
                <h1 class="text-6xl md:text-8xl font-bold tracking-tighter leading-[0.9]">
    <span class="bg-gradient-to-r from-blue-400 to-emerald-400 bg-clip-text text-transparent opacity-90">
        HOŞGELDİNİZ!
    </span>

                </h1>
                <h2 class="text-6xl md:text-8xl font-bold tracking-tighter leading-[0.9]">
                    Geleceğin Yeteneklerini <br>
                    <span class="text-blue-500 italic">Yörüngeye Oturtun.</span>
                </h2>

                <p class="text-xl text-slate-400 max-w-2xl mx-auto font-medium leading-relaxed">
                    Task Orbit ile stajyer süreçlerini, eğitimleri ve görevleri tek bir merkezden,
                    modern ve güvenilir bir altyapı ile yönetin.
                </p>

                <div class="flex flex-wrap justify-center gap-6 pt-8">
                    <a href="#register" class="h-16 px-10 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm font-bold shadow-2xl shadow-blue-600/30 group">
                        Hemen Başlayın
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <button class="h-16 px-10 rounded-full border border-slate-800/60 hover:bg-slate-800 text-sm font-bold transition-colors">
                        Sistemi Keşfedin
                    </button>
                </div>
            </div>

            <!-- Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-40">
                <div class="glass rounded-3xl p-8 space-y-4 hover:border-blue-500/40 transition-colors">
                    <div class="h-12 w-12 rounded-2xl bg-blue-600/10 text-blue-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Modern Arayüz</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Kullanıcı dostu ve şık tasarım ile verimliliği artırın.</p>
                </div>
                <div class="glass rounded-3xl p-8 space-y-4 hover:border-blue-500/40 transition-colors">
                    <div class="h-12 w-12 rounded-2xl bg-blue-600/10 text-blue-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Güvenli Altyapı</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Verileriniz en üst düzey güvenlik standartları ile korunur.</p>
                </div>
                <div class="glass rounded-3xl p-8 space-y-4 hover:border-blue-500/40 transition-colors">
                    <div class="h-12 w-12 rounded-2xl bg-blue-600/10 text-blue-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Global Erişim</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Her yerden, her cihazdan stajyerlerinizi takip edin.</p>
                </div>
            </div>
        </main>
    </section>

    <div class="h-40"></div> <!-- Spacer -->

    <!-- 2. GİRİŞ SAYFASI (LOGIN PAGE) -->


    <div class="h-40"></div> <!-- Spacer -->

    <!-- 3. KAYIT SAYFASI (REGISTER PAGE) -->


    <!-- Footer -->
    <footer class="py-12 border-t border-slate-800/20 text-center relative z-10">
        <p class="text-xs font-bold text-slate-500 uppercase tracking-[0.3em]">
            © 2026 TASK ORBIT • Modern Management Solutions
        </p>
    </footer>

</body>
</html>
