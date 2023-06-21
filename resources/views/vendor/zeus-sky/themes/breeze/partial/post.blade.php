<x-zeus.card>
    <article class="space-y-4" itemscope itemtype="https://schema.org/Movie">
        <aside>
            <a href="{{ route('post',$post->slug) }}" class="text-2xl md:text-3xl font-bold text-gray-700 dark:text-gray-200 hover:underline">
                {!! $post->title !!}
            </a>
            <div class="flex items-center justify-between">
                <span class="font-light text-sm text-gray-500 dark:text-gray-200">{{ optional($post->published_at)->diffForHumans() ?? '' }}</span>
                <div>
                    @unless ($post->tags->isEmpty())
                        @each($theme.'.partial.category', $post->tags->where('type','category'), 'category')
                    @endunless
                </div>
            </div>
            @if($post->description !== null)
                <p class="mt-2 text-gray-600 dark:text-gray-200">
                    {!! $post->description !!}
                </p>
            @endif
        </aside>
        <div class="flex items-center justify-between">
            <a href="{{ route('post',$post->slug) }}" class="text-blue-500 dark:text-blue-200 hover:underline">Read more</a>
            <div>
                <a class="flex items-center gap-2">
                    <img src="{{ \Filament\Facades\Filament::getUserAvatarUrl($post->author) }}" alt="avatar" class="hidden object-cover w-8 h-8 rounded-full sm:block">
                    <p class="text-gray-700 dark:text-gray-200 hover:underline">{{ $post->author->name ?? '' }}</p>
                </a>
            </div>
        </div>
    </article>
</x-zeus.card>

