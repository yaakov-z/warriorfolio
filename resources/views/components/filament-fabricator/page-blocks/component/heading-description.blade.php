@aware(['page'])
@props(['is_active', 'heading' => null, 'content' => null, 'is_center' => false , 'heading_text_size' => 'text-3xl',
'content_text_size' => 'text-xl'])

<div class="px-4 py-4 md:py-8">
    <div class="mx-auto max-w-7xl">
        <section>
            <div class="mx-auto max-w-screen-xl {{ $is_center ? 'text-center':'text-left' }}">
                <div>

                    <h2 class="heading-module-title mb-2 font-bold tracking-tighter {{ $heading_text_size }}">
                        {!! $heading!!}
                    </h2>

                    <div class="heading-module-subtitle mb-4 font-light {{ $content_text_size }}">
                        {!! $content !!}
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
