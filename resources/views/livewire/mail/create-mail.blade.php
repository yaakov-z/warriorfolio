<div class="text-center">
    <form wire:submit="create" id="mail">
        {{ $this->form }}

        <x-ui.button :type="'submit'" class="mt-4 px-5 py-3 text-sm" :icon="'chevron-forward-outline'">
            {{ __('Send') }}
        </x-ui.button>

    </form>
    <x-filament-actions::modals />
</div>