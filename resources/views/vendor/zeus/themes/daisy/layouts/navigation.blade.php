<div class="navbar bg-base-100 shadow-xl rounded-2xl">
    {{--<div class="flex-none">
        <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>--}}
    <div class="flex-1">
        <a class="flex gap-2 btn btn-ghost normal-case text-xl" href="{{ url('/') }}">
            <img class="w-7 mx-auto" src="https://larazeus.com/images/zeus-logo.png" alt="{{ config('zeus.wind.name', config('app.name', 'Laravel')) }}">
            @zeus
        </a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            @if($menu !== null)
                @foreach($menu->items as $item)
                    <li>
                        {!! \App\Classes\RenderNavItem::render($item) !!}
                    </li>
                @endforeach
            @endif

            @include($artemisTheme.'.layouts.theme-switcher')

        </ul>
        {{--<button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
        </button>--}}
    </div>
</div>
