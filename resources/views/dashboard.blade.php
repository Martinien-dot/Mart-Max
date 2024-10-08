<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

     <!-- Main Content -->
     <div class="flex flex-grow overflow-hidden">
        <!-- Sidebar: Gestion de matériel -->
        @include('components.SideBar')


        <!-- Main Area: Actualités et produits -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg flex-1 overflow-y-auto" id="main-area">
            @if(session()->has('success'))
                <div class="mb-4 p-4 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 border border-green-300 dark:border-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    
</x-app-layout>
