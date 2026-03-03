@extends('layouts.calocation')


    
@section('body-class','bg-slate-50 min-h-screen')
    

@section('content')

    <!-- ========== SIDEBAR (same as dashboard) ========== -->
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
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                    </svg>
                    Toutes les Colocs
                </a>
                <a href="colocation.html"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Ma Colocation
                </a>
                <a href="{{ route('categories.create') }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Ajouter une category
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
                @if(auth()->user()->role === "admin")
                <a href="admin.html"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Administration
                </a>
                @endif
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
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                    <button type="submit"
                        class="p-1.5 rounded-lg hover:bg-red-50 text-slate-400 hover:text-red-500 transition"
                        title="Déconnexion">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </button>
                    </form>
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
                    
                    <h1 class="text-xl font-bold text-slate-900">{{$calocation->name}}</h1>
                    <p class="text-sm text-slate-500">{{$users->count()}} membres · {{$calocation->created_at}}</p>
                </div>
                <div class="flex items-center gap-2">
                    @if($isOwner) 
                    
                    <button onclick="document.getElementById('invite-modal').classList.remove('hidden')"
                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                        <span class="hidden sm:inline">Inviter</span>
                    </button>
                   
                    <button onclick="document.getElementById('cancel-modal').classList.remove('hidden')"
                        class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg border border-red-300 text-red-600 text-sm font-semibold hover:bg-red-50 transition">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="hidden sm:inline">Annuler</span>
                    </button>
                    @else 
                    <form action="{{ route('users.retreit',auth()->user()->id) }}" method="POST">
                        @csrf
                    <button type="submit"
                        class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg border border-amber-300 text-amber-600 text-sm font-semibold hover:bg-amber-50 transition">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        Quitter
                    </button>
                    </form>
                    @endif
                </div>
            </div>
        </header>

        <main class="p-4 sm:p-6 lg:p-8 space-y-8">

            <!-- ========== MEMBERS SECTION ========== -->
            <section>
                <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-violet-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    Membres
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($users as $user)

                  
                   
                   
                     <div
                        class="bg-white rounded-2xl border border-slate-100 p-5 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-3">
                            <div
                            @if($user->pivot->type !== 'owner')
                                class="w-9 h-9 rounded-full bg-gradient-to-br from-violet-400 to-violet-600 flex items-center justify-center text-white font-bold text-sm"
                            @else
                            class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white font-bold text-sm"
                            @endif
                            >
                                 {{$user->initials}}</div>
                            <span
                                class="px-2.5 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase">{{$user->pivot->type}}</span>
                        </div>
                        <p class="font-semibold text-slate-900">{{$user->name}}</p>
                        @if($user->id == auth()->id()) 
                        <p class="text-xs text-slate-500 mt-0.5">{{$user->email}}</p>
                        @endif
                        <div class="flex items-center justify-between mt-3">
                            @if($user->id == auth()->id()) 
                            <div class="flex items-center gap-2">
                                <span class="text-xs text-slate-500">Réputation :</span>
                                <span
                                    class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold">{{$user->reputation_score}}</span>
                            </div>
                            @endif
                             @if($isOwner  && $user->id !== auth()->id())
                             <form action="{{ route('users.retreit',$user->id) }}" method="POST">
                                @csrf
                            <button type="submit"
                                class="text-xs text-red-500 hover:text-red-700 font-medium transition">Retirer</button>
                             </form>   
                            @endif
                        </div>
                    </div>
                     @endforeach
                    
                </div>
            </section>

            <!-- ========== ADD EXPENSE FORM ========== -->
            <section id="add-expense">
                <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Ajouter une dépense
                </h2>
                <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm">
                    {{-- <!-- {{ route('expenses.store', $colocation) }} --> --}}
                    <form action="{{ route('depenses.store', $calocation->id) }}" method="POST">
                         @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div>
                                <label for="titre" class="block text-sm font-medium text-slate-700 mb-1.5">Titre</label>
                                <input type="text" name="titre" id="titre" placeholder="Ex: Courses" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition placeholder:text-slate-400">
                                      @error('name')
                                     <p class="text-red-500">{{ $message }}</p>
                                     @enderror
                            </div>
                            <div>
                                <label for="montant" class="block text-sm font-medium text-slate-700 mb-1.5">Montant
                                    (€)</label>
                                <input type="number" step="0.01" name="montant" id="montant" placeholder="0.00" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition placeholder:text-slate-400">
                                      @error('montant')
                                     <p class="text-red-500">{{ $message }}</p>
                                      @enderror
                            </div>
                            <div>
                                <label for="category_id"
                                    class="block text-sm font-medium text-slate-700 mb-1.5">payeur</label>
                                <select name="user_id" id="user_id" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-600">
                                    <option value="">Choisir…</option>
                                    @foreach($users as $user) 
                                    <option value="{{ $user->id}}">{{ $user->name }}</option>
                                   
                                    @endforeach 
                                </select>
                                  @error('user_id')
                                    <p class="text-red-500">{{ $message }}</p>
                                  @enderror
                            </div>
                            <div>
                                <label for="category_id"
                                    class="block text-sm font-medium text-slate-700 mb-1.5">Catégorie</label>
                                <select name="category_id" id="category_id" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-600">
                                    <option value="">Choisir…</option>
                                    @foreach($calocation->categories as $category) 
                                    <option value="{{ $category->id}}">{{ $category->name }}</option>
                                   
                                    @endforeach 
                                </select>
                                  @error('category_id')
                                     <p class="text-red-500">{{ $message }}</p>
                                  @enderror
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-medium text-slate-700 mb-1.5">Date</label>
                                <input type="date" name="date" id="date" required
                                    class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-600">
                                  @error('date')
                                       <p class="text-red-500">{{ $message }}</p>
                                  @enderror
                            </div>
                            
                        </div>
                        <div class="mt-4 flex justify-end">
                            <button type="submit"
                                class="inline-flex items-center gap-2 px-6 py-2.5 rounded-xl bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- ========== EXPENSES TABLE WITH MONTH FILTER ========== -->
            <section>
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-4 gap-3">
                    <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                        <svg class="w-5 h-5 text-sky-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        Dépenses
                    </h2>
                    <!-- Month filter -->
                    {{-- <!-- {{ route('colocations.show', $colocation) }} --> --}}
                    <form action="#" method="GET" class="flex items-center gap-2">
                        <select name="month"
                            class="px-3 py-2 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition text-slate-600">
                            <!-- <option value="">Tous les mois</option> -->
                            {{-- <!-- @foreach(range(1,12) as $m) --> --}}
                            <option value="">Tous les mois</option>
                            <option value="2026-02" selected>Février 2026</option>
                            <option value="2026-01">Janvier 2026</option>
                            <option value="2025-12">Décembre 2025</option>
                            {{-- <!-- @endforeach --> --}}
                        </select>
                        <button type="submit"
                            class="px-4 py-2 rounded-xl bg-slate-100 text-slate-700 text-sm font-medium hover:bg-slate-200 transition">
                            Filtrer
                        </button>
                    </form>
                </div>

                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50/50">
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Titre</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Payeur</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Catégorie</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Date</th>
                                    <th
                                        class="text-right px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Montant</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @foreach($calocation->categories as $category)
                                    @foreach($category->depenses as $depense)
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900">{{ $depense->titre}}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs font-bold">
                                                {{$depense->user->initials}}</div>
                                            <span class="text-slate-600">{{$depense->user->name}}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-medium">{{$category->name}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">{{$depense->created_at}}</td>
                                    <td class="px-6 py-4 text-right font-semibold text-slate-900">{{$depense->montant}} €</td>
                                    <td class="px-6 py-4 text-center">
                                       
                                        <form action="{{ route('depenses.destroy', $depense->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                        <button type="submit"
                                            class="p-1.5 rounded-lg hover:bg-red-50 text-slate-400 hover:text-red-500 transition"
                                            title="Supprimer">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                               
                                   @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ========== BALANCES & SETTLEMENTS ("Qui doit à qui") ========== -->
            <section id="settlements">
                <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                    </svg>
                    Balances & Remboursements
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Balances -->
                    <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm">
                        <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-4">Votre Solde
                            </h3>
                        <div class="space-y-3">
                         @foreach($users as $user)
                          @if($user->id == auth()->user()->id)

                          <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50">
                              <div class="flex items-center gap-3">
                                  <div
                                  @if($user->pivot->type === "owner" )
                                        class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white font-bold text-sm"
                                  @else
                                  class="w-9 h-9 rounded-full bg-gradient-to-br from-sky-400 to-sky-600 flex items-center justify-center text-white font-bold text-sm"
                                  @endif   
                                  >
                                        {{$user->initials}}</div>
                                    <span class="font-medium text-slate-900">{{$user->name}}</span>
                                </div>
                                @if($user->pivot->sold < 0)
                                <span class="font-bold text-red-500">{{number_format($user->pivot->sold,2)}} €</span>
                                @else
                                <span class="font-bold text-emerald-600">{{number_format($user->pivot->sold,2)}} €</span>

                                @endif
                            </div>
                         
                           @endif
                        @endforeach 
                        </div>
                    </div>

                    <!-- Settlements (qui doit à qui) -->
                    <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm">
                        <h3 class="text-sm font-semibold text-slate-500 uppercase tracking-wider mb-4">Qui doit à qui
                        </h3>
                        <div class="space-y-4">
                            @foreach($calocation->categories as $category)

                            @foreach ($category->depenses as $depense)

                            @foreach ($depense->payments as $payment)
                                
                            
                            <div
                            class="flex items-center justify-between p-4 rounded-xl border border-slate-100 hover:border-emerald-200 transition">
                            <div class="flex items-center gap-3">
                                <!-- Debtor -->
                                <div
                                @if($userservice->isOwner($payment->fromUser,$calocation))
                                 class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white font-bold text-sm"
                                 @else
                                    
                                 class="w-9 h-9 rounded-full bg-gradient-to-br from-violet-400 to-violet-600 flex items-center justify-center text-white font-bold text-sm"
                                 @endif
                                 >
                                {{$payment->fromUser->initials}}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">{{$payment->fromUser->name}}</p>
                                    <p class="text-xs text-slate-500">doit à <strong
                                        class="text-emerald-600">{{$payment->toUser->name}}</strong></p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="font-bold text-slate-900">{{number_format($payment->amount,2)}}€</span>
                                    @if (auth()->user()->id === $payment->fromUser->id)
                                   
                                    <form action="{{ route('payments.payer',$payment->id) }}" method="POST">
                                        @csrf 
                                        <button type="submit"
                                        class="px-3 py-1.5 rounded-lg bg-emerald-100 text-emerald-700 text-xs font-bold hover:bg-emerald-200 transition">
                                        Marquer payé
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                        
                        @endforeach
                        
                        @endforeach

                     @endforeach

                        
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <!-- ========== INVITE MODAL ========== -->
    <div id="invite-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"
            onclick="document.getElementById('invite-modal').classList.add('hidden')"></div>
        <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <button onclick="document.getElementById('invite-modal').classList.add('hidden')"
                class="absolute top-4 right-4 p-1 rounded-lg hover:bg-slate-100 text-slate-400">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="text-center mb-6">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900">Inviter un colocataire</h3>
                <p class="text-sm text-slate-500 mt-1">Un email d'invitation sera envoyé</p>
            </div>
           
            <form action="{{ route('colocations.invite',$calocation->id) }}" method="POST" class="space-y-4">
                 @csrf 
                <div>
                    <label for="invite-email" class="block text-sm font-medium text-slate-700 mb-1.5">Email du
                        colocataire</label>
                    <input type="email" name="email" id="invite-email" placeholder="coloc@example.com" required
                        class="w-full px-4 py-2.5 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition placeholder:text-slate-400">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="document.getElementById('invite-modal').classList.add('hidden')"
                        class="flex-1 py-2.5 rounded-xl border border-slate-300 text-slate-700 text-sm font-semibold hover:bg-slate-50 transition">
                        Annuler
                    </button>
                    <button type="submit"
                        class="flex-1 py-2.5 rounded-xl bg-emerald-600 text-white text-sm font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                        Envoyer l'invitation
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ========== CANCEL COLOCATION MODAL ========== -->
    <div id="cancel-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"
            onclick="document.getElementById('cancel-modal').classList.add('hidden')"></div>
        <div class="relative w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-6">
                <div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900">Annuler la colocation ?</h3>
                <p class="text-sm text-slate-500 mt-1">Cette action est définitive. Tous les membres seront retirés.</p>
            </div>
            <div class="p-3 rounded-xl bg-amber-50 border border-amber-200 text-amber-800 text-sm mb-6">
                <p class="font-semibold">⚠️ Attention</p>
                <p class="mt-1">Si des membres ont encore des dettes, leur réputation sera impactée.</p>
            </div>
            {{-- <!-- {{ route('colocations.cancel', $colocation) }} --> --}}
            <form action="{{ route('colocations.cancel',$calocation->id) }}" method="POST">
                @csrf @method('PATCH') 
                <div class="flex gap-3">
                    <button type="button" onclick="document.getElementById('cancel-modal').classList.add('hidden')"
                        class="flex-1 py-2.5 rounded-xl border border-slate-300 text-slate-700 text-sm font-semibold hover:bg-slate-50 transition">
                        Non, garder
                    </button>
                    <button type="submit"
                        class="flex-1 py-2.5 rounded-xl bg-red-600 text-white text-sm font-semibold hover:bg-red-700 transition shadow-md shadow-red-200">
                        Oui, annuler
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection