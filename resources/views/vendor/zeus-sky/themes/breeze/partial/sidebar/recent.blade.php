@unless($recent->isEmpty())
    <x-zeus.card>
        <x-slot name="title">
            <label for="search">{{ __('Recent Post') }}</label>
        </x-slot>
        <div class="flex flex-col gap-3">
            @foreach($recent as $post)
                <a href="{{ route('post',$post->slug) }}" class="transition duration-300">
                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                        @if($post->image() !== null)
                            <img alt="{{ $post->title }}" src="{{ $post->image() }}" class="h-10 w-10 shadow-sm rounded-full z-0 object-cover"/>
                        @endif
                        <div class="w-full text-md">{{ $post->title ?? '' }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </x-zeus.card>
@endunless
