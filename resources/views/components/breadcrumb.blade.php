@props(['items' => [], 'theme' => 'blue'])

@php
$themeClasses = [
    'blue' => 'border-blue-100 bg-blue-50/70',
    'purple' => 'border-purple-100 bg-purple-50/70',
    'green' => 'border-green-100 bg-green-50/70',
    'orange' => 'border-orange-100 bg-orange-50/70',
    'teal' => 'border-teal-100 bg-teal-50/70',
    'pink' => 'border-pink-100 bg-pink-50/70',
    'indigo' => 'border-indigo-100 bg-indigo-50/70',
    'yellow' => 'border-yellow-100 bg-yellow-50/70',
    'gray' => 'border-gray-200 bg-gray-50/70',
];

$themeTextClasses = [
    'blue' => 'text-blue-700',
    'purple' => 'text-purple-700',
    'green' => 'text-green-700',
    'orange' => 'text-orange-700',
    'teal' => 'text-teal-700',
    'pink' => 'text-pink-700',
    'indigo' => 'text-indigo-700',
    'yellow' => 'text-yellow-700',
    'gray' => 'text-gray-700',
];

$containerClass = $themeClasses[$theme] ?? $themeClasses['blue'];
$labelClass = $themeTextClasses[$theme] ?? $themeTextClasses['blue'];

$normalizedItems = [];
if (is_array($items)) {
    foreach ($items as $item) {
        if (!is_array($item)) {
            continue;
        }

        $label = $item['label'] ?? null;
        if (!is_string($label) || trim($label) === '') {
            continue;
        }

        $normalizedItems[] = [
            'label' => trim($label),
            'url' => (isset($item['url']) && is_string($item['url']) && trim($item['url']) !== '') ? trim($item['url']) : null,
        ];
    }
}

$backLink = null;
for ($index = count($normalizedItems) - 2; $index >= 0; $index--) {
    if (!empty($normalizedItems[$index]['url'])) {
        $backLink = $normalizedItems[$index];
        break;
    }
}
@endphp

@if(!empty($normalizedItems))
    <nav class="border-b border-slate-200 bg-white/70 backdrop-blur" aria-label="Breadcrumb">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <div class="min-w-0">
                        <ol class="flex min-w-0 items-center gap-1 overflow-x-auto whitespace-nowrap">
                            @foreach($normalizedItems as $item)
                                <li class="flex items-center gap-1">
                                    @if(!$loop->first)
                                        <svg class="h-3.5 w-3.5 flex-shrink-0 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    @endif

                                    @if(!empty($item['url']) && !$loop->last)
                                        <a
                                            href="{{ $item['url'] }}"
                                            class="inline-flex items-center rounded-md px-1.5 py-0.5 text-[13px] font-medium text-slate-600 transition-colors duration-200 hover:bg-white hover:text-slate-900"
                                        >
                                            @if($loop->first)
                                                <svg class="mr-1 h-3.5 w-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"></path>
                                                </svg>
                                            @endif
                                            {{ $item['label'] }}
                                        </a>
                                    @else
                                        <span
                                            class="inline-flex items-center rounded-md border border-white/80 bg-white/80 px-1.5 py-0.5 text-[13px] font-semibold text-slate-900"
                                            @if($loop->last) aria-current="page" @endif
                                        >
                                            @if($loop->first)
                                                <svg class="mr-1 h-3.5 w-3.5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"></path>
                                                </svg>
                                            @endif
                                            {{ $item['label'] }}
                                        </span>
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endif
