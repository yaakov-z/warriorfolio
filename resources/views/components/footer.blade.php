{{-- Footer --}}
<x-content-section
:fatherClass="'justify-start'"
>
<div class="mt-24 mb-8 grid grid-cols-2 gap-24">
    <div>
       <x-ui.logo />
    </div>
    <div class="flex gap-2 justify-end text-zinc-500">
        @isset($social_links['github_link'])
                        <a href="{{ $social_links['github_link'] }}">
                            <span class="text-2xl hover:opacity-80 hover:cursor-pointer"><ion-icon name="logo-github"></ion-icon></span>
                        </a>
                    @endisset

                    @isset($social_links['medium_link'])
                        <a href="{{ $social_links['medium_link'] }}">
                            <span class="text-2xl hover:opacity-80 hover:cursor-pointer"><ion-icon name="logo-medium"></ion-icon></span>
                        </a>
                    @endisset

                    @isset($social_links['dribbble_link'])
                        <a href="{{ $social_links['dribbble_link'] }}">
                            <span class="text-2xl hover:opacity-80 hover:cursor-pointer"><ion-icon name="logo-dribbble"></ion-icon></span>
                        </a>
                    @endisset

                    @isset($social_links['twitter_link'])
                        <a href="{{ $social_links['twitter_link'] }}">
                            <span class="text-2xl hover:opacity-80 hover:cursor-pointer"><ion-icon name="logo-twitter"></ion-icon></span>
                        </a>
                    @endisset

                    @isset($social_links['linkedin_link'])
                        <a href="{{ $social_links['linkedin_link'] }}">
                            <span class="text-2xl hover:opacity-80 hover:cursor-pointer"><ion-icon name="logo-linkedin"></ion-icon></span>
                        </a>
                    @endisset
    </div>
</div>

</x-content-section>
{{-- Style --}}
<style>
.bg-footer {
    background-position: center center;
    background-repeat: no-repeat;
    background-image:url("{{ asset('/img/lights.png') }}");
}
</style>
