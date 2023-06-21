<div class="container mx-auto px-2">
    <x-slot name="header">
        <span class="capitalize">{{ $post->title }}</span>
    </x-slot>

    <x-slot name="breadcrumps">
        <li>
            <a class="text-gray-500 dark:text-gray-100 capitalize" aria-current="page">{{ $post->title }}</a>
        </li>
    </x-slot>

    @if($post->image() !== null)
        <img alt="{{ $post->title }}" src="{{ $post->image() }}" class="aspect-video w-full h-full shadow-sm rounded-lg z-0 object-cover"/>
    @endif

    <x-zeus.card>
        <div class="flex flex-col items-start justify-start gap-2">
            <div>
                <a href="{{ route('post',$post->slug) }}" class="text-2xl md:text-3xl font-bold text-gray-700 dark:text-gray-200 hover:underline">
                    {!! $post->title !!}
                </a>

                <div class="flex items-center justify-between">
                    <span class="font-light text-sm text-gray-500 dark:text-gray-200">{{ optional($post->published_at)->diffForHumans() ?? '' }}</span>
                    <div>
                        @unless ($post->tags->isEmpty())
                            @each($theme.'.partial.category', $post->tags->where('type','category'), 'category')
                        @endunless
                        @unless ($post->tags->isEmpty())
                            @foreach($post->tags->where('type','tag') as $tag)
                                @include($theme.'.partial.tag')
                            @endforeach
                        @endunless
                    </div>
                </div>

                @if($post->description !== null)
                    <p class="mt-2 text-gray-600 dark:text-gray-200">
                        {!! $post->description !!}
                    </p>
                @endif

            </div>
            <a href="#" class="flex items-center gap-2">
                <img src="{{ \Filament\Facades\Filament::getUserAvatarUrl($post->author) }}" alt="avatar" class="object-cover w-10 h-10 rounded-full sm:block">
                <h1 class="font-bold text-gray-700 dark:text-gray-100 hover:underline">{{ $post->author->name ?? '' }}</h1>
            </a>
        </div>

        <div class="mt-6 lg:mt-12 prose dark:prose-invert max-w-none">
            {!! html_entity_decode($post->content) !!}
        </div>
    </x-zeus.card>

    <div class="py-6 flex flex-col mt-4 gap-4">
        <h1 class="text-xl font-bold text-gray-700 dark:text-gray-100 md:text-2xl">{{ __('Related Posts') }}</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($related as $post)
                @include($theme.'.partial.related')
            @endforeach
        </div>
    </div>
</div>