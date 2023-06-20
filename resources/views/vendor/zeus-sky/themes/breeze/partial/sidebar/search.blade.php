<div class="my-4">
    <x-zeus.card>
        <x-slot name="title">
            <label for="search" class="mb-4 text-xl font-bold text-gray-700 dark:text-gray-200">{{ __('Search') }}</label>
        </x-slot>
        <div class="flex flex-col max-w-sm px-2 py-4 mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-sm">
            <form method="GET">
                <input class="w-full px-3 py-1.5 rounded" type="text" name="search" id="search" value="{{ request()->get('search') }}">
            </form>
        </div>
    </x-zeus.card>
</div>
