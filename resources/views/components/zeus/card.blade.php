<div class="bg-white dark:bg-black shadow-sm mb-2 md:mb-6 mt-6 mx-1 py-3 px-4 hover:shadow-md transition-all ease-in-out duration-500 sm:rounded-lg border border-secondary-100 dark:border-secondary-700/50">
    @if(isset($title))
        <h5 class="py-2 font-bold text-sm lg:text-lg text-primary-600 dark:text-primary-100">
            {{ $title }}
        </h5>
    @endif
    {{ $slot }}
</div>