@props([
    'title' => 'Tool Calculator',
    'description' => '',
    'subtitle' => null,
    'faqSchema' => [],
    'howToSchema' => [],
])

@php
$routeName = request()->route()?->getName();
$categories = config('conversion.categories', []);
$calculatorMap = config('conversion.calculators', []);

$currentCalculator = null;
foreach ($calculatorMap as $calculatorConfig) {
    if (($calculatorConfig['route_name'] ?? null) === $routeName) {
        $currentCalculator = $calculatorConfig;
        break;
    }
}

$toolTitle = (is_string($currentCalculator['title'] ?? null) && trim($currentCalculator['title']) !== '')
    ? trim($currentCalculator['title'])
    : trim((string) $title);

$toolDescription = trim((string) $description);
$toolSubtitle = is_string($subtitle) && trim($subtitle) !== ''
    ? trim($subtitle)
    : ($toolDescription !== '' ? $toolDescription : 'Use this professional tool for accurate and fast calculations.');

$categoryTitle = null;
$categorySlug = $currentCalculator['category_slug'] ?? null;
if (is_string($categorySlug) && $categorySlug !== '') {
    foreach ($categories as $category) {
        if (($category['slug'] ?? null) === $categorySlug) {
            $categoryTitle = $category['title'] ?? null;
            break;
        }
    }
}

$breadcrumbs = [
    ['label' => 'Home', 'url' => url('/')],
    ['label' => 'Conversion Tools', 'url' => route('conversion.index')],
];

if (is_string($categoryTitle) && trim($categoryTitle) !== '') {
    $breadcrumbs[] = [
        'label' => trim($categoryTitle),
        'url' => route('conversion.index'),
    ];
}

$breadcrumbs[] = ['label' => $toolTitle];

$toolUiContent = isset($toolUi) ? $toolUi : $slot;
$aboutContentSlot = isset($aboutContent) ? $aboutContent : null;
$seoContentSlot = isset($seoContent) ? $seoContent : null;

$breadcrumbSchemaItems = [];
foreach ($breadcrumbs as $index => $item) {
    $label = $item['label'] ?? null;

    if (!is_string($label) || trim($label) === '') {
        continue;
    }

    $itemUrl = $item['url'] ?? null;
    if (!is_string($itemUrl) || trim($itemUrl) === '') {
        $itemUrl = url()->current();
    }

    $breadcrumbSchemaItems[] = [
        '@type' => 'ListItem',
        'position' => count($breadcrumbSchemaItems) + 1,
        'name' => trim($label),
        'item' => $itemUrl,
    ];
}

$webApplicationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => $toolTitle,
    'description' => $toolDescription !== '' ? $toolDescription : ('Use ' . $toolTitle . ' for accurate online calculations.'),
    'url' => url()->current(),
    'applicationCategory' => 'UtilitiesApplication',
    'operatingSystem' => 'Any',
    'isAccessibleForFree' => true,
    'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD',
    ],
];

$faqSchemaPayload = [];
if (is_array($faqSchema)) {
    foreach ($faqSchema as $item) {
        $question = is_array($item) ? ($item['question'] ?? null) : null;
        $answer = is_array($item) ? ($item['answer'] ?? null) : null;

        if (!is_string($question) || trim($question) === '' || !is_string($answer) || trim($answer) === '') {
            continue;
        }

        $faqSchemaPayload[] = [
            '@type' => 'Question',
            'name' => trim($question),
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => trim($answer),
            ],
        ];
    }
}

$howToSchemaPayload = [];
if (is_array($howToSchema)) {
    foreach ($howToSchema as $index => $step) {
        $name = is_array($step) ? ($step['name'] ?? null) : null;
        $text = is_array($step) ? ($step['text'] ?? null) : null;

        if (!is_string($name) || trim($name) === '' || !is_string($text) || trim($text) === '') {
            continue;
        }

        $howToSchemaPayload[] = [
            '@type' => 'HowToStep',
            'position' => $index + 1,
            'name' => trim($name),
            'text' => trim($text),
        ];
    }
}
@endphp

<x-app-layout :title="$title" :description="$description">
    <x-breadcrumb :items="$breadcrumbs" />

    <section class="bg-slate-50 py-10 sm:py-12 min-h-screen">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl space-y-6">
                <header class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex items-start gap-3">
                        <div class="mt-0.5 inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="min-w-0">
                            <h1 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">{{ $toolTitle }}</h1>
                            <p class="mt-2 text-sm leading-6 text-slate-600">{{ $toolSubtitle }}</p>
                        </div>
                    </div>
                </header>

                <div class="space-y-6">
                    <section aria-label="Tool Interface" class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:p-6">
                        {{ $toolUiContent }}
                    </section>

                    <section aria-label="About This Tool" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        @if($aboutContentSlot)
                            {{ $aboutContentSlot }}
                        @else
                            <h2 class="mb-3 text-lg font-semibold text-slate-900">About {{ $toolTitle }}</h2>
                            <p class="text-sm leading-7 text-slate-600">
                                {{ $toolDescription !== '' ? $toolDescription : ('This tool helps you perform accurate and reliable calculations for ' . $toolTitle . '.') }}
                            </p>
                        @endif
                    </section>

                    <section aria-label="SEO Content" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        @if($seoContentSlot)
                            {{ $seoContentSlot }}
                        @else
                            <h2 class="mb-3 text-lg font-semibold text-slate-900">SEO Content</h2>
                            <div class="space-y-3 text-sm leading-7 text-slate-600">
                                <p>
                                    {{ $toolTitle }} is designed for fast, accurate, and user-friendly calculations. This page provides structured conversion details, practical references, and reliable computational logic.
                                </p>
                                <p>
                                    Users searching for {{ strtolower($toolTitle) }}, online converter tools, and precision unit conversion calculators can use this page for dependable results.
                                </p>
                            </div>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="scripts">
        @if(isset($scripts) && trim((string) $scripts) !== '')
            {{ $scripts }}
        @endif

        <script type="application/ld+json">{!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbSchemaItems,
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

        <script type="application/ld+json">{!! json_encode($webApplicationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

        @if(!empty($faqSchemaPayload))
            <script type="application/ld+json">{!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $faqSchemaPayload,
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
        @endif

        @if(!empty($howToSchemaPayload))
            <script type="application/ld+json">{!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'HowTo',
                'name' => $toolTitle,
                'step' => $howToSchemaPayload,
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
        @endif
    </x-slot>
</x-app-layout>
