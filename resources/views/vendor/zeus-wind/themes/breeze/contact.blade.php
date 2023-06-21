<div>
    <x-slot name="header">
        <h2>{{ __('Contact us') }}</h2>
    </x-slot>

    <livewire:contact-form :departmentSlug="$departmentSlug" />
</div>
