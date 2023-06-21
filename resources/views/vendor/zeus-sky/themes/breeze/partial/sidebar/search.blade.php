<div class="my-4">
    <x-zeus.card>
        <x-slot name="title">
            <label for="search">{{ __('Search') }}</label>
        </x-slot>
        <div class="flex flex-col">
            <form method="GET">
                <x-text-input id="search"
                              class="block mt-1 w-full"
                              type="text"
                              name="search"
                              value="{{ request()->get('search') }}"
                              required autocomplete="current-password" />
            </form>
        </div>
    </x-zeus.card>
</div>
