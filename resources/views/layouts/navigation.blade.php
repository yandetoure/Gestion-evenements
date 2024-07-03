<style>
    .nav{
        width: 100%;
height: 80px;
flex-shrink: 0;
border-radius: 0px 0px 12px 12px;
background: #1E4C72;
    }
</style>

<nav x-data="{ open: false }" class=" nav bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        
                    <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.index') }}">Événements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.create') }}">Créer un événement</a>
                </li>
            </ul>
                    </x-nav-link>

                </div>
            </div>
            

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
  <path d="M7.59637 2.81516C7.74534 2.63961 7.81866 2.41338 7.80059 2.18505C7.78252 1.95672 7.67451 1.74448 7.49973 1.59391C7.32496 1.44333 7.09736 1.36641 6.8658 1.37967C6.63423 1.39293 6.41716 1.49531 6.26119 1.66482L4.73459 3.39149C3.86895 4.37099 3.3796 5.61979 3.35215 6.91949L3.2848 10.0917C3.27994 10.3237 3.36865 10.5482 3.5314 10.7157C3.69416 10.8832 3.91763 10.9799 4.15266 10.9847C4.38769 10.9895 4.61503 10.9019 4.78465 10.7412C4.95428 10.5805 5.0523 10.3599 5.05716 10.1278L5.12333 6.95682C5.14229 6.06751 5.4773 5.21308 6.06977 4.54299L7.59637 2.81516Z" fill="white"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.36949 8.98334C7.44884 7.73517 8.00697 6.56377 8.93026 5.70762C9.85355 4.85147 11.0726 4.37493 12.3392 4.37501H12.9973V3.50001C12.9973 3.19059 13.1218 2.89384 13.3434 2.67505C13.565 2.45626 13.8655 2.33334 14.1789 2.33334C14.4923 2.33334 14.7928 2.45626 15.0144 2.67505C15.236 2.89384 15.3605 3.19059 15.3605 3.50001V4.37501H16.0186C17.2852 4.37493 18.5043 4.85147 19.4276 5.70762C20.3509 6.56377 20.909 7.73517 20.9883 8.98334L21.2495 13.1063C21.349 14.6784 21.8836 16.1933 22.795 17.486C22.9833 17.7533 23.0983 18.0641 23.1289 18.3882C23.1596 18.7124 23.1047 19.0388 22.9697 19.3358C22.8347 19.6328 22.6241 19.8903 22.3585 20.0832C22.0929 20.2761 21.7812 20.3978 21.4539 20.4365L17.4282 20.9125V22.1667C17.4282 23.0176 17.0859 23.8336 16.4765 24.4353C15.8672 25.037 15.0407 25.375 14.1789 25.375C13.3171 25.375 12.4907 25.037 11.8813 24.4353C11.2719 23.8336 10.9296 23.0176 10.9296 22.1667V20.9125L6.90394 20.4353C6.57676 20.3965 6.26531 20.2748 5.99986 20.082C5.7344 19.8892 5.52396 19.6318 5.38899 19.335C5.25401 19.0382 5.19909 18.7119 5.22956 18.3879C5.26002 18.0639 5.37484 17.7532 5.56286 17.486C6.4742 16.1933 7.00878 14.6784 7.10836 13.1063L7.36949 8.98334ZM12.7019 22.1667C12.7019 22.5535 12.8575 22.9244 13.1345 23.1979C13.4115 23.4714 13.7872 23.625 14.1789 23.625C14.5706 23.625 14.9463 23.4714 15.2233 23.1979C15.5003 22.9244 15.6559 22.5535 15.6559 22.1667V21.2917H12.7019V22.1667Z" fill="white"/>
  <path d="M20.8466 1.58082C20.6696 1.73339 20.5612 1.94913 20.5452 2.1806C20.5292 2.41206 20.607 2.64031 20.7615 2.81515L22.2881 4.54182C22.8804 5.21238 23.215 6.06725 23.2334 6.95682L23.3007 10.1267C23.3031 10.2416 23.3284 10.3549 23.3752 10.4601C23.4219 10.5654 23.4892 10.6605 23.5732 10.7401C23.6572 10.8196 23.7562 10.8821 23.8647 10.9239C23.9731 10.9657 24.0888 10.9859 24.2052 10.9836C24.3216 10.9812 24.4363 10.9562 24.5429 10.91C24.6495 10.8639 24.7459 10.7974 24.8265 10.7145C24.907 10.6316 24.9703 10.5338 25.0126 10.4267C25.0549 10.3196 25.0755 10.2054 25.0731 10.0905L25.0057 6.91949C24.9783 5.61979 24.4889 4.37098 23.6233 3.39149L22.0967 1.66482C21.9422 1.49004 21.7237 1.38301 21.4892 1.36726C21.2548 1.3515 21.0236 1.42832 20.8466 1.58082Z" fill="white"/>
</svg>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
  <path d="M7.59637 2.81516C7.74534 2.63961 7.81866 2.41338 7.80059 2.18505C7.78252 1.95672 7.67451 1.74448 7.49973 1.59391C7.32496 1.44333 7.09736 1.36641 6.8658 1.37967C6.63423 1.39293 6.41716 1.49531 6.26119 1.66482L4.73459 3.39149C3.86895 4.37099 3.3796 5.61979 3.35215 6.91949L3.2848 10.0917C3.27994 10.3237 3.36865 10.5482 3.5314 10.7157C3.69416 10.8832 3.91763 10.9799 4.15266 10.9847C4.38769 10.9895 4.61503 10.9019 4.78465 10.7412C4.95428 10.5805 5.0523 10.3599 5.05716 10.1278L5.12333 6.95682C5.14229 6.06751 5.4773 5.21308 6.06977 4.54299L7.59637 2.81516Z" fill="white"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.36949 8.98334C7.44884 7.73517 8.00697 6.56377 8.93026 5.70762C9.85355 4.85147 11.0726 4.37493 12.3392 4.37501H12.9973V3.50001C12.9973 3.19059 13.1218 2.89384 13.3434 2.67505C13.565 2.45626 13.8655 2.33334 14.1789 2.33334C14.4923 2.33334 14.7928 2.45626 15.0144 2.67505C15.236 2.89384 15.3605 3.19059 15.3605 3.50001V4.37501H16.0186C17.2852 4.37493 18.5043 4.85147 19.4276 5.70762C20.3509 6.56377 20.909 7.73517 20.9883 8.98334L21.2495 13.1063C21.349 14.6784 21.8836 16.1933 22.795 17.486C22.9833 17.7533 23.0983 18.0641 23.1289 18.3882C23.1596 18.7124 23.1047 19.0388 22.9697 19.3358C22.8347 19.6328 22.6241 19.8903 22.3585 20.0832C22.0929 20.2761 21.7812 20.3978 21.4539 20.4365L17.4282 20.9125V22.1667C17.4282 23.0176 17.0859 23.8336 16.4765 24.4353C15.8672 25.037 15.0407 25.375 14.1789 25.375C13.3171 25.375 12.4907 25.037 11.8813 24.4353C11.2719 23.8336 10.9296 23.0176 10.9296 22.1667V20.9125L6.90394 20.4353C6.57676 20.3965 6.26531 20.2748 5.99986 20.082C5.7344 19.8892 5.52396 19.6318 5.38899 19.335C5.25401 19.0382 5.19909 18.7119 5.22956 18.3879C5.26002 18.0639 5.37484 17.7532 5.56286 17.486C6.4742 16.1933 7.00878 14.6784 7.10836 13.1063L7.36949 8.98334ZM12.7019 22.1667C12.7019 22.5535 12.8575 22.9244 13.1345 23.1979C13.4115 23.4714 13.7872 23.625 14.1789 23.625C14.5706 23.625 14.9463 23.4714 15.2233 23.1979C15.5003 22.9244 15.6559 22.5535 15.6559 22.1667V21.2917H12.7019V22.1667Z" fill="white"/>
  <path d="M20.8466 1.58082C20.6696 1.73339 20.5612 1.94913 20.5452 2.1806C20.5292 2.41206 20.607 2.64031 20.7615 2.81515L22.2881 4.54182C22.8804 5.21238 23.215 6.06725 23.2334 6.95682L23.3007 10.1267C23.3031 10.2416 23.3284 10.3549 23.3752 10.4601C23.4219 10.5654 23.4892 10.6605 23.5732 10.7401C23.6572 10.8196 23.7562 10.8821 23.8647 10.9239C23.9731 10.9657 24.0888 10.9859 24.2052 10.9836C24.3216 10.9812 24.4363 10.9562 24.5429 10.91C24.6495 10.8639 24.7459 10.7974 24.8265 10.7145C24.907 10.6316 24.9703 10.5338 25.0126 10.4267C25.0549 10.3196 25.0755 10.2054 25.0731 10.0905L25.0057 6.91949C24.9783 5.61979 24.4889 4.37098 23.6233 3.39149L22.0967 1.66482C21.9422 1.49004 21.7237 1.38301 21.4892 1.36726C21.2548 1.3515 21.0236 1.42832 20.8466 1.58082Z" fill="white"/>
</svg>
    </div>
</nav>
