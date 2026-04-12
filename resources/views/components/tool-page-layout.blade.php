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

<x-app-layout :title="$title" :description="$description" :showFooter="false">
    <x-breadcrumb :items="$breadcrumbs" />

    <style>
        #toolUiRoot :where(label) {
            font-size: 0.8125rem;
            line-height: 1.15rem;
        }

        #toolUiRoot :where(input:not([type='checkbox']):not([type='radio']), select, textarea) {
            padding: 0.48rem 0.72rem !important;
            font-size: 0.84rem !important;
            line-height: 1.2rem !important;
            border-width: 1px !important;
            border-color: #cbd5e1 !important;
        }

        #toolUiRoot :where(button) {
            padding: 0.48rem 0.72rem !important;
            font-size: 0.8rem !important;
            line-height: 1.1rem !important;
            border-width: 1px !important;
        }

        #toolUiRoot :where(input, select, textarea, button):focus {
            outline: none !important;
            box-shadow: none !important;
        }

        #toolUiRoot :where(.focus-within\:ring-2):focus-within {
            box-shadow: none !important;
        }

        @media (min-width: 1024px) {
            .tool-right-scroll {
                scroll-behavior: smooth;
                scrollbar-width: thin;
                scrollbar-color: #94a3b8 transparent;
                scrollbar-gutter: stable both-edges;
            }

            .tool-right-scroll::-webkit-scrollbar {
                width: 6px;
            }

            .tool-right-scroll::-webkit-scrollbar-track {
                background: transparent;
            }

            .tool-right-scroll::-webkit-scrollbar-thumb {
                border-radius: 9999px;
                border: 1px solid transparent;
                background: linear-gradient(180deg, #94a3b8 0%, #64748b 100%);
            }

            .tool-right-scroll::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(180deg, #64748b 0%, #475569 100%);
            }
        }

        @media (min-width: 1024px) {
            body.tool-layout-lock {
                overflow: hidden;
            }

            .tool-layout-viewport {
                height: calc(100dvh - var(--cp-nav-height, 0px) - var(--cp-breadcrumb-height, 0px));
                overflow: hidden;
            }

            .tool-layout-grid {
                height: 100%;
                overflow: hidden;
            }
        }
    </style>

    <section class="tool-layout-viewport bg-slate-50 py-2 sm:py-3 lg:py-1">
        <div class="mx-auto h-full max-w-7xl px-3 sm:px-4 lg:px-6">
            <div class="tool-layout-grid grid h-full gap-4 lg:min-h-0 lg:grid-cols-12 lg:grid-rows-[minmax(0,1fr)] lg:items-stretch">
                <div class="space-y-3 lg:col-span-7 lg:h-full lg:min-h-0 lg:overflow-hidden">
                    <section id="toolUiRoot" aria-label="Tool Interface" class="tool-ui-shell tool-ui-compact rounded-xl bg-white p-2.5 shadow-sm sm:p-3">
                        {{ $toolUiContent }}
                    </section>
                </div>

                <div class="tool-right-scroll space-y-4 lg:col-span-5 lg:h-full lg:min-h-0 lg:self-stretch lg:overflow-y-auto lg:pr-1">
                    <section id="quickReferenceColumn" aria-label="Quick Reference" class="hidden rounded-xl bg-white p-3 shadow-sm">
                        <h2 class="mb-3 text-base font-semibold text-slate-900">Quick Reference</h2>
                        <div id="quickReferenceTarget" class="space-y-4"></div>
                    </section>

                    <section aria-label="About This Tool" class="rounded-xl border border-slate-200 bg-white p-3 shadow-sm sm:p-4">
                        @if($aboutContentSlot)
                            <div id="aboutContentStack" class="space-y-4">
                                {{ $aboutContentSlot }}
                            </div>
                        @else
                            <h2 class="mb-3 text-lg font-semibold text-slate-900">About {{ $toolTitle }}</h2>
                            <p class="text-sm leading-7 text-slate-600">
                                {{ $toolDescription !== '' ? $toolDescription : ('This tool helps you perform accurate and reliable calculations for ' . $toolTitle . '.') }}
                            </p>
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

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const syncToolLayoutViewport = function () {
                    const isDesktop = window.matchMedia('(min-width: 1024px)').matches;
                    const nav = document.querySelector('header.sticky.top-0.z-40');
                    const breadcrumb = document.querySelector('nav[aria-label="Breadcrumb"]');

                    const navHeight = nav ? nav.offsetHeight : 0;
                    const breadcrumbHeight = breadcrumb ? breadcrumb.offsetHeight : 0;

                    document.documentElement.style.setProperty('--cp-nav-height', navHeight + 'px');
                    document.documentElement.style.setProperty('--cp-breadcrumb-height', breadcrumbHeight + 'px');

                    if (isDesktop) {
                        document.body.classList.add('tool-layout-lock');
                    } else {
                        document.body.classList.remove('tool-layout-lock');
                    }
                };

                syncToolLayoutViewport();
                window.addEventListener('resize', syncToolLayoutViewport);

                const toolUiRoot = document.getElementById('toolUiRoot');
                const quickReferenceColumn = document.getElementById('quickReferenceColumn');
                const quickReferenceTarget = document.getElementById('quickReferenceTarget');

                if (!toolUiRoot || !quickReferenceColumn || !quickReferenceTarget) {
                    return;
                }

                const headingNodes = Array.from(toolUiRoot.querySelectorAll('h2, h3, h4, h5, h6'));
                const referenceCards = [];

                headingNodes.forEach((heading) => {
                    const headingText = (heading.textContent || '').toLowerCase().replace(/\s+/g, ' ').trim();

                    if (!headingText.includes('reference') || headingText.includes('impedance')) {
                        return;
                    }

                    if (heading.closest('form')) {
                        return;
                    }

                    const cardCandidate = heading.closest('section.rounded-xl, section.rounded-lg, div.rounded-xl, div.rounded-lg');

                    if (!cardCandidate || cardCandidate.id === 'toolUiRoot' || !toolUiRoot.contains(cardCandidate)) {
                        return;
                    }

                    referenceCards.push(cardCandidate);
                });

                const uniqueReferenceCards = Array.from(new Set(referenceCards));

                if (!uniqueReferenceCards.length) {
                    return;
                }

                uniqueReferenceCards.forEach((card) => {
                    quickReferenceTarget.appendChild(card);
                });

                quickReferenceColumn.classList.remove('hidden');
            });
        </script>

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
