<div>
    <x-slot name="header">
        <h2>{{ __('Contact us') }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto">
        <x-filament::card>
            {{ __('feel free to contact us.') }}
        </x-filament::card>
    </div>

    <livewire:contact-form :departmentSlug="$departmentSlug" />
</div>
