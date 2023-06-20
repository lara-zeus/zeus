<div class="py-2 space-y-4">
    @foreach($data['widgetViewData']['posts'] as $post)
        <a href="{{ route('post',$post->slug) }}" class="group flex items-center justify-center gap-4">
            @if($post->image() !== null && $data['show_thumbnail'])
                <img alt="{{ $post->title }}" src="{{ $post->image() }}" class="h-10 w-10 shadow-md rounded-[2rem] rounded-br-none z-0 object-cover"/>
            @endif
            <div class="w-full">
                <p class="text-lg font-semibold group-hover:text-primary-600 transition-all ease-in-out duration-200">{{ $post->title ?? '' }}</p>
                @if($data['show_description'])
                    <p class="text-sm">{{ $post->description ?? '' }}</p>
                @endif
            </div>
        </a>
    @endforeach
</div>
