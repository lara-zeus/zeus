<x-zeus.card>
    @if($sent)
        @include(app('wind-theme').'.submitted')
    @else
        <form wire:submit.prevent="store">
            <div class="max-w-4xl mx-auto my-4 px-4">
                {{ $this->form }}
                <div class="p-4 text-center">
                    <x-primary-button type="submit">
                        {{ __('Send') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    @endif
</x-zeus.card>
