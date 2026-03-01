<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Colocation – EasyColoc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen">

    <!-- ========== SIDEBAR ========== -->
    <aside id="sidebar"
        class="fixed inset-y-0 left-0 z-40 w-64 bg-white border-r border-slate-200 transform -translate-x-full lg:translate-x-0 transition-transform duration-200">
        <div class="flex flex-col h-full">
            <div class="flex items-center gap-2 px-6 h-16 border-b border-slate-100">
                <div
                    class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </div>
                <span
                    class="text-lg font-bold bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">EasyColoc</span>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <span class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Menu</span>
                <a href="dashboard.html"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm mt-2 transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    Dashboard
                </a>
               <a href="{{ route('colocations.index')}}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm mt-2 transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                    </svg>
                    Toutes les Colocs
                </a>
                <a href="create-colocation.html"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Créer une Coloc
                </a>
                <div class="pt-6"><span
                        class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Compte</span></div>
                <a href="#"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition mt-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    Mon Profil
                </a>
            </nav>
            <div class="p-4 border-t border-slate-100">
                <div class="flex items-center gap-3 px-3 py-2">
                    <div
                        class="w-9 h-9 rounded-full bg-gradient-to-br from-violet-500 to-violet-600 flex items-center justify-center text-white font-bold text-sm">
                        {{auth()->user()->initials}}</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-900 truncate">{{auth()->user()->name}}</p>
                        <p class="text-xs text-slate-500 truncate">{{auth()->user()->email}}</p>
                    </div>
                    <a href="landing.html"
                        class="p-1.5 rounded-lg hover:bg-red-50 text-slate-400 hover:text-red-500 transition">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- ========== MAIN CONTENT ========== -->
    <div class="lg:pl-64">
        <header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-30">
            <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                <button onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')"
                    class="lg:hidden p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-6 h-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div>
                    <h1 class="text-xl font-bold text-slate-900">Créer une Colocation</h1>
                    <p class="text-sm text-slate-500">Définissez votre nouvel espace partagé</p>
                </div>
                <div></div>
            </div>
        </header>

        <main class="p-4 sm:p-6 lg:p-8">
            <!-- Alerte: déjà une colocation active -->
            {{-- <!-- @if($hasActiveColocation) --> --}}
            <div
                class="hidden mb-6 p-4 rounded-xl bg-amber-50 border border-amber-200 text-amber-800 text-sm flex items-start gap-3">
                <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                <div>
                    <p class="font-semibold">Vous avez déjà une colocation active</p>
                    <p class="mt-1">Vous devez quitter ou annuler votre colocation actuelle avant d'en créer une
                        nouvelle.</p>
                </div>
            </div>
            {{-- <!-- @endif --> --}}

            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <!-- Header -->
                    <div
                        class="p-8 bg-gradient-to-r from-emerald-500/5 via-sky-500/5 to-violet-500/5 border-b border-slate-100">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center shadow-lg shadow-emerald-200">
                                <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-slate-900">Nouvelle colocation</h2>
                                <p class="text-sm text-slate-500">Vous serez automatiquement le propriétaire (Owner)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="p-8">
                       
                        <form action="{{ route('colocations.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Nom -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Nom de la
                                    colocation <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" placeholder="Ex: Appart Bastille" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition placeholder:text-slate-400">
                                <p class="text-xs text-slate-400 mt-1">Choisissez un nom explicite pour vos colocataires
                                </p>
                            </div>

                          

                            <!-- Catégories initiales -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-3">Catégories de
                                    dépenses</label>
                                <p class="text-xs text-slate-400 mb-3">Sélectionnez les catégories par défaut. Vous
                                    pourrez en ajouter plus tard.</p>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="alimentation" checked
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">🛒 Alimentation</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="energie" checked
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">⚡ Énergie</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="menage" checked
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">🧹 Ménage</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="internet"
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">📶 Internet</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="loyer"
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">🏠 Loyer</span>
                                    </label>
                                    <label
                                        class="flex items-center gap-2 p-3 rounded-xl border border-slate-200 hover:border-emerald-300 cursor-pointer transition has-[:checked]:border-emerald-500 has-[:checked]:bg-emerald-50">
                                        <input type="checkbox" name="categories[]" value="autres"
                                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                        <span class="text-sm text-slate-700">📦 Autres</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Info box -->
                            <div
                                class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm">
                                <div class="flex items-start gap-2">
                                    <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                    </svg>
                                    <div>
                                        <p class="font-semibold">Bon à savoir</p>
                                        <p class="mt-1">Vous deviendrez automatiquement le propriétaire (Owner) de cette
                                            colocation. Vous pourrez ensuite inviter vos colocataires par email.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-3 pt-2">
                                <a href="{{ route('colocations.index')}}"
                                    class="flex-1 py-3 rounded-xl border border-slate-300 text-slate-700 text-sm font-semibold hover:bg-slate-50 transition text-center">
                                    Annuler
                                </a>
                                <button type="submit"
                                    class="flex-1 py-3 rounded-xl bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200 hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    Créer la colocation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>