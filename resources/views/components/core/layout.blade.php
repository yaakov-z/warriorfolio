@aware(['page'])
@props(['module_title' => null, 'module_subtitle' => null])

<section {{ $attributes->merge(['class' => 'w-full ']) }}>
    <div class="px-16 py-8 md:py-12">
        <div class="mx-auto max-w-7xl">
            <div class="header-title py-2">{{ $module_title }}</div>
            <div class="subtitle mx-auto mt-2 max-w-5xl text-center">{{ $module_subtitle }}</div>
            {{ $slot }}
        </div>
    </div>
</section>