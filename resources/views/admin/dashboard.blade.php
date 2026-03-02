<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration – EasyColoc</title>
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
    
     @include('calocations.aside')
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
                    <h1 class="text-xl font-bold text-slate-900">Administration Globale</h1>
                    <p class="text-sm text-slate-500">Vue d'ensemble de la plateforme</p>
                </div>
                <span
                    class="px-3 py-1 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase">Admin</span>
            </div>
        </header>

        <main class="p-4 sm:p-6 lg:p-8 space-y-8">

            <!-- ========== GLOBAL STAT CARDS ========== -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Total Users -->
                <div
                    class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <span
                            class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">+12%</span>
                    </div>
                    <p class="text-sm text-slate-500">Utilisateurs</p>
                    {{-- <!-- {{ $usersCount }} --> --}}
                    <p class="text-2xl font-bold text-slate-900 mt-1">{{ count($users) }}</p>
                </div>

                <!-- Total Colocations -->
                <div
                    class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-600 bg-sky-50 px-2 py-1 rounded-full">+8%</span>
                    </div>
                    <p class="text-sm text-slate-500">Colocations</p>
                   
                    <p class="text-2xl font-bold text-slate-900 mt-1">{{ $calocationsCount }}</p>
                </div>

                <!-- Total Expenses -->
                <div
                    class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-violet-100 text-violet-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-slate-500">Total dépenses</p>
                      
                    <p class="text-2xl font-bold text-slate-900 mt-1"> {{ number_format($depensesCount, 2) }} €</p>
                </div>

                <!-- Banned Users -->
                <div
                    class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-xl bg-red-100 text-red-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-sm text-slate-500">Utilisateurs bannis</p>
                      
                    <p class="text-2xl font-bold text-red-600 mt-1">{{ $bannedCount }}</p>
                </div>
            </div>

            <!-- ========== USERS TABLE ========== -->
            <section>
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        Gestion des utilisateurs
                    </h2>
                </div>
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50/50">
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Utilisateur</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Email</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Réputation</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Rôle</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Statut</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Inscrit le</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @foreach($users as $user) 

                                <!-- User 1 – actif -->
                            @if ($user->status === "actif")
                                    
                              
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            @if ($user->role === "admin")
                                                
                                            <div
                                            class="w-9 h-9 rounded-full bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center text-white font-bold text-sm">
                                            {{$user->initials}}</div>
                                            @else
                                             <div
                                            class="w-9 h-9 rounded-full bg-gradient-to-br from-sky-400 to-sky-600 flex items-center justify-center text-white font-bold text-sm">
                                            {{$user->initials}}</div>
                                            @endif

                                            <span class="font-medium text-slate-900">{{$user->name}}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">{{$user->email}}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold">{{$user->reputation_score}}</span>
                                    </td>
                                  
                                        
                                    <td class="px-6 py-4 text-center">
                                          @if ($user->role === "admin")
                                        <span
                                        class="px-2.5 py-1 rounded-full bg-violet-100 text-violet-700 text-xs font-bold uppercase">{{$user->role}}</span>
                                        @else
                                        <span
                                        class="px-2.5 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold uppercase">{{$user->role}}</span>

                                         @endif
                                    </td>
                                   
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-600 text-xs font-semibold">{{$user->status}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">{{$user->created_at}}</td>
                                    <td class="px-6 py-4 text-center text-slate-400 text-xs">
                                        @if($user->role === "admin")
                                        —
                                        @else
                                           <form action="{{ route('users.banni',$user) }}" method="POST" class="inline">
                                             @csrf @method('PATCH') 
                                            <button type="submit"
                                                class="px-3 py-1.5 rounded-lg bg-red-50 text-red-600 text-xs font-bold hover:bg-red-100 transition">
                                                Bannir
                                            </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                             <!-- User 1 – banni -->
                            @if ($user->status === "banni")
                                 <tr class="hover:bg-slate-50/50 transition-colors bg-red-50/30">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-400 to-slate-500 flex items-center justify-center text-white font-bold text-sm">
                                                {{$user->initials}}</div>
                                            <span class="font-medium text-slate-500 line-through">{{$user->name}}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-slate-400">{{$user->email}}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-red-50 text-red-600 text-xs font-bold">{{$user->reputation_score}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-500 text-xs font-bold uppercase">{{$user->role}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2.5 py-1 rounded-full bg-red-100 text-red-600 text-xs font-semibold">{{$user->status}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-400">{{$user->created_at}}</td>
                                    <td class="px-6 py-4 text-center">
                                      
                                        <form action=" {{ route('users.unban', $user) }}" method="POST" class="inline">
                                             @csrf @method('PATCH') 
                                            <button type="submit"
                                                class="px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-600 text-xs font-bold hover:bg-emerald-100 transition">
                                                Débannir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        

                        @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ========== COLOCATIONS TABLE ========== -->
            <section>
                <h2 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-sky-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955a1.126 1.126 0 011.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    Toutes les colocations
                </h2>
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-slate-100 bg-slate-50/50">
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Nom</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Owner</th>
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Membres</th>
                                   
                                    <th
                                        class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Statut</th>
                                    <th
                                        class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                        Créée le</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">

                                 @foreach($colocations as $colocation)
                                 @if ($colocation->status === "active")
                                     
                                
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-900">{{$colocation->name}}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            @php
                                              $owner = $colocation->users->firstWhere('pivot.type', 'owner');
                                            @endphp
                                            <div
                                                class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs font-bold">
                                                {{$owner->initials}}</div>
                                            <span class="text-slate-600">  {{$owner->name}}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center font-medium text-slate-900">  {{count($colocation->users)}}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-600 text-xs font-semibold">{{($colocation->status)}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">{{$colocation->created_at}}</td>
                                </tr>
                                @else
                                
                                
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 font-medium text-slate-400">{{$colocation->name}}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                             @php
                                              $owner = $colocation->users->firstWhere('pivot.type', 'owner');
                                            @endphp
                                            <div
                                                class="w-7 h-7 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center text-xs font-bold">
                                                {{$owner->initials}}</div>
                                                <span class="text-slate-400">{{$owner->name}}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center font-medium text-slate-400">{{count($colocation->users)}}</td>
                        
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2.5 py-1 rounded-full bg-slate-100 text-slate-500 text-xs font-semibold">{{$colocation->status}}</span>
                                        </td>
                                        <td class="px-6 py-4 text-slate-400">{{$colocation->created_at}}</td>
                                    </tr>
                                    @endif
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

        </main>
    </div>

</body>

</html>