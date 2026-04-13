<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies - Task Orbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-[#020617] text-slate-50 flex h-screen overflow-hidden"
      x-data="{
        sidebarCollapsed: false,
        activeTab: 'Active Companies',
        currentPage: 1,
        perPage: 5,
        companies: [],
        searchQuery: '', // Arama sorgusu için yeni state

        async init() {
            try {
                const response = await fetch('/api/companies');
                this.companies = await response.json();
            } catch (error) {
                console.error('Veri yüklenemedi:', error);
            }
        },

        // Arama sorgusuna göre filtrelenmiş liste
        get filteredCompanies() {
            if (!this.searchQuery) return this.companies;
            return this.companies.filter(c =>
                c.title.toLowerCase().includes(this.searchQuery.toLowerCase())
            );
        },

        get totalPages() {
            return Math.ceil(this.filteredCompanies.length / this.perPage) || 1;
        },

        get paginatedCompanies() {
            // Arama yapıldığında sayfa numarasını kontrol et
            let start = (this.currentPage - 1) * this.perPage;
            let end = start + this.perPage;
            return this.filteredCompanies.slice(start, end);
        }
      }">

    @include('sidebar')

    <main class="flex-1 flex flex-col overflow-hidden">
        <header class="h-20 border-b border-slate-800/40 bg-slate-950/20 backdrop-blur-md flex items-center justify-between px-8">
             <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Company Management</div>
        </header>

        <div class="flex-1 p-8 overflow-y-auto space-y-8">
            <div class="flex items-center justify-between">
                <h1 class="text-4xl font-extrabold tracking-tight">Companies</h1>

                <div class="flex items-center gap-4">
                    <!-- Arama Çubuğu (Yeni Eklendi) -->
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input
                            type="text"
                            x-model="searchQuery"
                            @input="currentPage = 1"
                            placeholder="Search companies..."
                            class="pl-10 pr-4 h-12 w-64 bg-slate-900/40 border border-slate-800/40 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-blue-500/40 text-slate-200 transition-all"
                        >
                    </div>

                    <button class="h-12 px-8 rounded-xl font-bold flex items-center gap-2 bg-blue-600 hover:bg-blue-500 transition-all shadow-lg shadow-blue-600/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Company
                    </button>
                </div>
            </div>

            <div class="bg-slate-900/20 border border-slate-800/40 backdrop-blur-xl rounded-[2rem] overflow-hidden shadow-xl">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-800/40 bg-slate-950/40">
                            <th class="px-8 py-5 text-[10px] font-black uppercase text-slate-500">No</th>
                            <th class="px-6 py-5 text-[10px] font-black uppercase text-slate-500">Company Name</th>
                            <th class="px-6 py-5 text-[10px] font-black uppercase text-slate-500">Status</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase text-slate-500 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/20">
                        <template x-for="company in paginatedCompanies" :key="company.id">
                            <tr class="hover:bg-slate-800/20 transition-colors group">
                                <td class="px-8 py-5 text-sm font-medium text-slate-500" x-text="company.id"></td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="h-9 w-9 rounded-xl bg-blue-600/10 text-blue-600 flex items-center justify-center text-[10px] font-bold border border-blue-600/20" x-text="company.title.substring(0,2).toUpperCase()"></div>
                                        <span class="text-sm font-bold" x-text="company.title"></span>
                                    </div>
                                </td>
                                <td class="px-6 py-5">
                                    <span class="px-3 py-1 rounded-lg text-[10px] font-bold uppercase bg-emerald-500/10 text-emerald-500">Active</span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button class="p-2 rounded-lg hover:bg-blue-500/10 text-blue-500 transition-all" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg hover:bg-red-500/10 text-red-500 transition-all" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </template>
                        <!-- Arama sonucu boşsa gösterilecek mesaj -->
                        <template x-if="filteredCompanies.length === 0">
                            <tr>
                                <td colspan="4" class="px-8 py-10 text-center text-slate-500 text-sm italic">
                                    No companies found matching your search.
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>

                <div class="px-8 py-5 border-t border-slate-800/40 flex items-center justify-between">
                    <div class="text-xs text-slate-500">
                        Showing <span class="font-bold text-slate-300" x-text="filteredCompanies.length"></span> Companies
                    </div>
                    <div class="flex gap-2">
                        <button @click="currentPage--" :disabled="currentPage === 1" class="px-4 py-2 rounded-lg bg-slate-800/40 text-xs font-bold hover:bg-slate-800 disabled:opacity-20 transition-all">Prev</button>
                        <button @click="currentPage++" :disabled="currentPage === totalPages" class="px-4 py-2 rounded-lg bg-slate-800/40 text-xs font-bold hover:bg-slate-800 disabled:opacity-20 transition-all">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
