<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyColoc – Gérez vos colocations simplement</title>
    <meta name="description" content="EasyColoc simplifie la gestion de vos dépenses en colocation. Suivi des dépenses, calcul automatique des soldes et remboursements simplifiés.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <!-- ========== NAVBAR ========== -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="landing.html" class="flex items-center gap-2">
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">EasyColoc</span>
                </a>
                <!-- Nav Links (desktop) -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#features" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition">Fonctionnalités</a>
                    <a href="#how" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition">Comment ça marche</a>
                    <a href="{{route('login')}}" class="text-sm font-medium text-slate-600 hover:text-emerald-600 transition">Connexion</a>
                    <a href="{{route('register')}}" class="inline-flex items-center px-4 py-2 rounded-lg bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                        S'inscrire
                    </a>
                </div>
                <!-- Mobile menu button -->
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden p-2 rounded-lg hover:bg-slate-100">
                    <svg class="w-6 h-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
                <a href="#features" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:bg-emerald-50 hover:text-emerald-700">Fonctionnalités</a>
                <a href="#how" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:bg-emerald-50 hover:text-emerald-700">Comment ça marche</a>
                <a href="login.html" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:bg-emerald-50 hover:text-emerald-700">Connexion</a>
                <a href="register.html" class="block px-3 py-2 rounded-lg text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 text-center">S'inscrire</a>
            </div>
        </div>
    </nav>

    <!-- ========== HERO SECTION ========== -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 via-sky-500/10 to-violet-500/10"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-300/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-sky-300/20 rounded-full blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center max-w-3xl mx-auto">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-semibold mb-6">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/></svg>
                    Gratuit & Open Source
                </span>
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight">
                    <span class="text-slate-900">La coloc,</span><br>
                    <span class="bg-gradient-to-r from-emerald-600 via-sky-600 to-violet-600 bg-clip-text text-transparent">sans prise de tête.</span>
                </h1>
                <p class="mt-6 text-lg md:text-xl text-slate-600 leading-relaxed">
                    Partagez vos dépenses, suivez vos soldes et simplifiez les remboursements entre colocataires. Tout en un seul endroit.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="register.html" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition-all shadow-lg shadow-emerald-200 hover:shadow-xl hover:shadow-emerald-300 hover:-translate-y-0.5">
                        Commencer gratuitement
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                    <a href="#features" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl border-2 border-slate-300 text-slate-700 font-semibold hover:border-emerald-400 hover:text-emerald-700 transition-all">
                        Découvrir
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FEATURES ========== -->
    <section id="features" class="py-20 md:py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-emerald-600 uppercase tracking-wider">Fonctionnalités</span>
                <h2 class="mt-3 text-3xl md:text-4xl font-bold text-slate-900">Tout ce dont votre coloc a besoin</h2>
                <p class="mt-4 text-lg text-slate-500 max-w-2xl mx-auto">Des outils simples et puissants pour une colocation sereine.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-5 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Suivi des dépenses</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Ajoutez vos dépenses en un clic. Montant, date, catégorie et payeur : tout est enregistré.</p>
                </div>
                <!-- Feature 2 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-sky-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Calcul automatique</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Les soldes sont recalculés automatiquement. Voyez en temps réel qui doit combien à qui.</p>
                </div>
                <!-- Feature 3 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-violet-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center mb-5 group-hover:bg-violet-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Gestion des membres</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Invitez vos colocataires par email, gérez les rôles et suivez les entrées et sorties.</p>
                </div>
                <!-- Feature 4 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-5 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Remboursements simplifiés</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Marquez les paiements effectués et réduisez le nombre de transactions nécessaires.</p>
                </div>
                <!-- Feature 5 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-sky-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center mb-5 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Système de réputation</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Encouragez le bon comportement financier grâce à un score de réputation transparent.</p>
                </div>
                <!-- Feature 6 -->
                <div class="group bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg hover:border-violet-200 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center mb-5 group-hover:bg-violet-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Administration globale</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Statistiques, modération et gestion des utilisateurs pour l'admin de la plateforme.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== HOW IT WORKS ========== -->
    <section id="how" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-sm font-semibold text-sky-600 uppercase tracking-wider">Simple & rapide</span>
                <h2 class="mt-3 text-3xl md:text-4xl font-bold text-slate-900">Comment ça marche ?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-600 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-emerald-200">1</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Créez votre coloc</h3>
                    <p class="text-slate-500 text-sm">Inscrivez-vous et créez votre espace de colocation en quelques secondes.</p>
                </div>
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-sky-500 to-sky-600 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-sky-200">2</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Invitez vos colocataires</h3>
                    <p class="text-slate-500 text-sm">Envoyez une invitation par email. Vos colocataires rejoignent en un clic.</p>
                </div>
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 to-violet-600 text-white flex items-center justify-center text-2xl font-bold mx-auto mb-6 shadow-lg shadow-violet-200">3</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Partagez les dépenses</h3>
                    <p class="text-slate-500 text-sm">Ajoutez vos dépenses, les soldes sont calculés automatiquement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CTA ========== -->
    <section class="py-20 md:py-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl bg-gradient-to-r from-emerald-600 via-sky-600 to-violet-600 p-12 md:p-16 text-center overflow-hidden">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMiIvPjwvZz48L2c+PC9zdmc+')] opacity-50"></div>
                <div class="relative">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Prêt à simplifier votre coloc ?</h2>
                    <p class="text-emerald-100 text-lg mb-8 max-w-lg mx-auto">Rejoignez des centaines de colocataires qui utilisent EasyColoc pour gérer leurs dépenses.</p>
                    <a href="{{route('register')}}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white text-emerald-700 font-bold hover:bg-slate-100 transition-all shadow-lg hover:-translate-y-0.5">
                        Créer mon compte
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                    </div>
                    <span class="text-white font-bold">EasyColoc</span>
                </div>
                <div class="flex items-center gap-6 text-sm">
                    <a href="#" class="hover:text-white transition">Confidentialité</a>
                    <a href="#" class="hover:text-white transition">Conditions</a>
                    <a href="#" class="hover:text-white transition">Contact</a>
                </div>
                <!-- {{ date('Y') }} pour Laravel -->
                <p class="text-sm">&copy; 2026 EasyColoc. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

</body>
</html>
