<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}">
                        <svg class="h-8 w-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </a>
                </div>
                <div class="ml-4">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <h1 class="text-2xl font-bold text-gray-900">ConvertPro</h1>
                        <p class="text-sm text-gray-500">Professional Calculation Tools</p>
                    </a>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->is('/') ? 'text-primary-600 font-semibold' : '' }}">Home</a>
                
                <div class="relative group">
                    <button class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium flex items-center transition-colors duration-200">
                        Categories
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-1">
                            <a href="{{ route('conversion.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                                Conversion Tools
                            </a>
                            {{-- <a href="{{ route('construction.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Construction Tools
                            </a>
                            <a href="{{ route('financial.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Financial Tools
                            </a>
                            <a href="{{ route('health.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                Health & Fitness
                            </a>
                            <a href="{{ route('math.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                                Math & Science
                            </a>
                            <a href="{{ route('business.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Business Tools
                            </a> --}}
                        </div>
                    </div>
                </div>
                
                <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200">About</a>
                <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium transition-colors duration-200">Contact</a>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" id="mobile-menu-button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Open main menu</span>
                    <svg id="menu-icon" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-200">
                <a href="{{ url('/') }}" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium hover:text-gray-900 hover:bg-gray-50 {{ request()->is('/') ? 'bg-primary-50 text-primary-700' : '' }}">Home</a>
                
                <!-- Mobile Categories Submenu -->
                <div class="space-y-1">
                    <button id="mobile-categories-button" class="text-gray-700 w-full text-left px-3 py-2 rounded-md text-base font-medium hover:text-gray-900 hover:bg-gray-50 flex items-center justify-between">
                        Categories
                        <svg id="mobile-categories-icon" class="h-4 w-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-categories-menu" class="hidden pl-6 space-y-1">
                        <a href="{{ route('conversion.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Conversion Tools</a>
                        {{-- <a href="{{ route('construction.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Construction Tools</a>
                        <a href="{{ route('financial.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Financial Tools</a>
                        <a href="{{ route('health.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Health & Fitness</a>
                        <a href="{{ route('math.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Math & Science</a>
                        <a href="{{ route('business.index') }}" class="text-gray-600 block px-3 py-2 rounded-md text-sm hover:text-gray-900 hover:bg-gray-50">Business Tools</a> --}}
                    </div>
                </div>
                
                <a href="#" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium hover:text-gray-900 hover:bg-gray-50">About</a>
                <a href="#" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium hover:text-gray-900 hover:bg-gray-50">Contact</a>
            </div>
        </div>
    </div>
</header>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    }

    // Mobile categories submenu toggle
    const mobileCategoriesButton = document.getElementById('mobile-categories-button');
    const mobileCategoriesMenu = document.getElementById('mobile-categories-menu');
    const mobileCategoriesIcon = document.getElementById('mobile-categories-icon');

    if (mobileCategoriesButton) {
        mobileCategoriesButton.addEventListener('click', function() {
            const isHidden = mobileCategoriesMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileCategoriesMenu.classList.remove('hidden');
                mobileCategoriesIcon.classList.add('rotate-180');
            } else {
                mobileCategoriesMenu.classList.add('hidden');
                mobileCategoriesIcon.classList.remove('rotate-180');
            }
        });
    }
});
</script>
@endpush