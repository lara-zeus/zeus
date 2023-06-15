<div>
    @if($sent)
        @include(app('wind-theme').'.submitted')
    @else
        <form wire:submit.prevent="store">
            <div class="max-w-4xl mx-auto my-4 px-4">
                {{ $this->form }}
                <div class="p-4 text-center">
                    <x-filament::button type="submit">
                        {{ __('Send') }}
                    </x-filament::button>
                </div>
            </div>
        </form>
    @endif
</div>
