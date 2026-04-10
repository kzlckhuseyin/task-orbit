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
 <!-- 2. GİRİŞ SAYFASI (LOGIN PAGE) -->
    <section id="login" class="min-h-screen flex items-center justify-center p-6 relative z-10">
        <div class="w-full max-w-md glass rounded-[2.5rem] shadow-2xl overflow-hidden">
            <div class="p-10 space-y-8">
                <div class="text-center space-y-2">
                    <h2 class="text-3xl font-bold tracking-tight">Giriş Yap</h2>
                    <p class="text-slate-400 text-sm font-medium">Sisteme erişmek için GitHub hesabınızı kullanın.</p>
                </div>

                <div class="space-y-6">
                    <a href="{{ route('github.redirect') }}" class="w-full h-16 rounded-2xl bg-blue-600 text-white flex items-center justify-center gap-3 font-bold text-sm shadow-xl shadow-blue-600/20 hover:bg-blue-500 transition-all active:scale-[0.98]">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub ile Devam Et
                    </a>

                    <p class="text-[10px] text-center text-slate-500 font-medium uppercase tracking-widest leading-relaxed">
                        Giriş yaparak kullanım şartlarımızı ve <br> gizlilik politikamızı kabul etmiş olursunuz.
                    </p>
                </div>

            </div>

            <div class="bg-blue-600/5 p-6 border-t border-slate-800/20 flex items-center justify-center gap-2">
                <svg class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="text-[10px] font-black uppercase tracking-widest text-blue-500/70">Güvenli GitHub Doğrulaması</span>
            </div>
        </div>
    </section>
   <!-- Footer -->
    <footer class="py-12 border-t border-slate-800/20 text-center relative z-10">
        <p class="text-xs font-bold text-slate-500 uppercase tracking-[0.3em]">
            © 2026 TASK ORBIT • Modern Management Solutions
        </p>
    </footer>

</body>
</html>
