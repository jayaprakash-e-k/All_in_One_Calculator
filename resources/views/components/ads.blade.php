@props([
    'placement' => 'default',
    'href' => null,
    'label' => 'Advertisement',
])

<aside
    aria-label="{{ $label }}"
    data-ad-placement="{{ $placement }}"
    class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-4 text-center"
>
    @if($href)
        <a href="{{ $href }}" class="block rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2">
    @endif

    <span class="text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-400">{{ $label }}</span>
    <div class="mt-2 min-h-16 content-center text-sm text-slate-500">
        {{ $slot->isEmpty() ? 'Sponsored content' : $slot }}
    </div>

    @if($href)
        </a>
    @endif
</aside>