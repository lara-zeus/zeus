<div class="w-full mx-auto mb-10 pt-32 flex justify-between items-center px-10 py-4">
    <a href="{{ url('/') }}" class="text-secondary-500 text-xl whitespace-nowrap">
        {{ config('app.name') }}
    </a>
    <div>
        @php $menu = \LaraZeus\Sky\Models\Navigation::fromHandle(config('zeus.header_menu')); @endphp
        @if($menu !== null)
            @foreach($menu->items as $item)
                {!! \App\Classes\RenderNavItem::render($item,'px-3 py-2 text-lg font-karla text-primary-500 hover:text-secondary-500 dark:text-gray-400 transition-all ease-in-out duration-300') !!}
            @endforeach
        @endif
    </div>
</div>
