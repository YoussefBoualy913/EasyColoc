<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colocation – EasyColoc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(-2deg); }
            50% { transform: translateY(-12px) rotate(2deg); }
        }
        @keyframes float2 {
            0%, 100% { transform: translateY(0px) rotate(3deg); }
            50% { transform: translateY(-8px) rotate(-1deg); }
        }
        @keyframes float3 {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse-soft {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.05); }
        }

        .float-1 { animation: float 6s ease-in-out infinite; }
        .float-2 { animation: float2 8s ease-in-out infinite 1s; }
        .float-3 { animation: float3 5s ease-in-out infinite 0.5s; }

        .fade-in-1 { animation: fadeInUp 0.6s ease-out 0.1s both; }
        .fade-in-2 { animation: fadeInUp 0.6s ease-out 0.25s both; }
        .fade-in-3 { animation: fadeInUp 0.6s ease-out 0.4s both; }
        .fade-in-4 { animation: fadeInUp 0.6s ease-out 0.55s both; }

        .blob {
            animation: pulse-soft 4s ease-in-out infinite;
        }
        .blob-2 {
            animation: pulse-soft 5s ease-in-out infinite 1.5s;
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen">

    <!-- ========== SIDEBAR ========== -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-slate-200 transform -translate-x-full lg:translate-x-0 transition-transform duration-200">
        <div class="flex flex-col h-full">
            <div class="flex items-center gap-2 px-6 h-16 border-b border-slate-100">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>
                <span class="text-lg font-bold bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">EasyColoc</span>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <span class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Menu</span>
                <a href="dashboard.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm mt-2 transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    Dashboard
                </a>
                <!-- Active state -->
                <a href="colocation.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Ma Colocation
                </a>
                <a href="create-colocation.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Créer une Coloc
                </a>
                <div class="pt-6"><span class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Compte</span></div>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition mt-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    Mon Profil
                </a>
                <a href="admin.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Administration
                </a>
            </nav>
            <div class="p-4 border-t border-slate-100">
                <div class="flex items-center gap-3 px-3 py-2">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-violet-500 to-violet-600 flex items-center justify-center text-white font-bold text-sm">JD</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900 truncate">Jean Dupont</p>
                        <p class="text-xs text-slate-500 truncate">jean@example.com</p>
                    </div>
                    <a href="landing.html" class="p-1.5 rounded-lg hover:bg-red-50 text-slate-400 hover:text-red-500 transition" title="Déconnexion">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- ========== MAIN CONTENT ========== -->
    <div class="lg:pl-64">
        <!-- Top Navbar -->
        <header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-30">
            <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                <button onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')"
                    class="lg:hidden p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-6 h-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div>
                    <h1 class="text-xl font-bold text-slate-900">Ma Colocation</h1>
                    <p class="text-sm text-slate-500">Aucune colocation active</p>
                </div>
                <div></div>
            </div>
        </header>

        <!-- ========== EMPTY STATE ========== -->
        <main class="p-4 sm:p-6 lg:p-8 flex items-center justify-center min-h-[calc(100vh-4rem)]">
            <div class="w-full max-w-2xl mx-auto text-center">

                <!-- Floating illustration -->
                <div class="relative flex items-center justify-center mb-10 h-56">
                    <!-- Background blobs -->
                    <div class="blob absolute w-64 h-64 rounded-full bg-gradient-to-br from-emerald-100 to-sky-100 opacity-50"></div>
                    <div class="blob-2 absolute w-40 h-40 rounded-full bg-gradient-to-br from-violet-100 to-emerald-100 opacity-40 translate-x-16 translate-y-6"></div>

                    <!-- Floating mini cards in the background -->
                    <div class="float-2 absolute left-4 sm:left-10 top-4 bg-white rounded-2xl shadow-md border border-slate-100 px-4 py-3 flex items-center gap-2.5 opacity-60">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-sky-400 to-sky-600 flex items-center justify-center text-white text-xs font-bold">?</div>
                        <div class="text-left">
                            <p class="text-xs font-semibold text-slate-700">Colocataire</p>
                            <p class="text-[10px] text-slate-400">En attente…</p>
                        </div>
                    </div>

                    <div class="float-1 absolute right-4 sm:right-10 bottom-4 bg-white rounded-2xl shadow-md border border-slate-100 px-4 py-3 flex items-center gap-2.5 opacity-60">
                        <div class="w-8 h-8 rounded-xl bg-emerald-100 flex items-center justify-center">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                        </div>
                        <div class="text-left">
                            <p class="text-xs font-semibold text-slate-700">Dépenses</p>
                            <p class="text-[10px] text-slate-400">0.00 €</p>
                        </div>
                    </div>

                    <!-- Main house icon -->
                    <div class="float-3 relative z-10 w-28 h-28 rounded-3xl bg-white shadow-xl border border-slate-100 flex items-center justify-center">
                        <svg class="w-14 h-14 text-slate-200" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <!-- Small sad dot -->
                        <span class="absolute -top-1.5 -right-1.5 w-6 h-6 rounded-full bg-amber-100 border-2 border-white flex items-center justify-center text-sm">😶</span>
                    </div>
                </div>

                <!-- Text content -->
                <div class="fade-in-1">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Vous n'avez pas de colocation en cours</h2>
                </div>
                <div class="fade-in-2">
                    <p class="mt-3 text-base text-slate-500 max-w-md mx-auto leading-relaxed">
                        Rejoignez une colocation existante grâce à une invitation, ou créez la vôtre pour commencer à partager les dépenses avec vos colocataires.
                    </p>
                </div>

                <!-- Actions -->
                <div class="fade-in-3 mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="create-colocation.html"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-semibold text-sm hover:bg-emerald-700 transition shadow-lg shadow-emerald-200 w-full sm:w-auto justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Créer une colocation
                    </a>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-300 bg-white text-slate-700 font-semibold text-sm hover:bg-slate-50 transition w-full sm:w-auto justify-center">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        J'ai une invitation
                    </a>
                </div>

                <!-- Info note -->
                <div class="fade-in-4 mt-8">
                    <div class="inline-flex items-center gap-2 px-4 py-3 rounded-xl bg-sky-50 border border-sky-100 text-sky-700 text-sm">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span>Les invitations sont envoyées par email par le créateur de la colocation.</span>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>

</html>