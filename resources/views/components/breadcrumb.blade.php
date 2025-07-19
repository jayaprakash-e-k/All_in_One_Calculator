@props(['items' => [], 'theme' => 'blue'])

@php
$themeClasses = [
    'blue' => 'from-blue-50 to-indigo-50 border-blue-200',
    'purple' => 'from-purple-50 to-indigo-50 border-purple-200',
    'green' => 'from-green-50 to-emerald-50 border-green-200',
    'orange' => 'from-orange-50 to-red-50 border-orange-200',
    'teal' => 'from-teal-50 to-cyan-50 border-teal-200',
    'pink' => 'from-pink-50 to-rose-50 border-pink-200',
    'indigo' => 'from-indigo-50 to-purple-50 border-indigo-200',
    'yellow' => 'from-yellow-50 to-amber-50 border-yellow-200',
    'gray' => 'from-gray-50 to-slate-50 border-gray-200',
];

$themeClass = $themeClasses[$theme] ?? $themeClasses['blue'];
@endphp

<nav class="bg-gradient-to-r {{ $themeClass }} border-b py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Breadcrumb Navigation -->
            <div class="flex items-center space-x-2">
                @foreach($items as $index => $item)
                    @if($index > 0)
                        <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    @endif
                    
                    @if(isset($item['url']) && !$loop->last)
                        <a href="{{ $item['url'] }}" 
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 hover:bg-white/80 rounded-lg transition-all duration-200 group shadow-sm">
                            @if($index === 0)
                                <svg class="w-4 h-4 mr-2 text-gray-500 group-hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            @endif
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="inline-flex items-center px-3 py-2 text-sm font-semibold text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm">
                            @if($index === 0)
                                <svg class="w-4 h-4 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            @endif
                            {{ $item['label'] }}
                        </span>
                    @endif
                @endforeach
            </div>

            <!-- Page Actions -->
            <div class="hidden md:flex items-center space-x-3">
                <button class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 hover:bg-white/80 rounded-md transition-all duration-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                    </svg>
                    Share
                </button>
            </div>
        </div>
    </div>
</nav>