@unless($tags->isEmpty())
    <x-zeus.card>
        <x-slot name="title">
            {{ __('Categories') }}
        </x-slot>
        <div class="flex flex-col">
            <ul>
                @foreach($tags as $tag)
                    <li class="px-1 py-2">
                        <a href="{{ route('tags',['category',$tag->slug]) }}" class="flex items-center text-gray-600 cursor-pointer gap-2">
                            <span>{{ str($tag->name)->title() }}</span>
                            <span class="text-gray-500 ltr:ml-auto rtl:mr-auto">{{ $tag->posts_published_count }} <span class="text-xs">{{ __('Posts') }}</span></span>
                            <i class='text-gray-500 bx bx-right-arrow-alt ltr:ml-1 rtl:mr-1'></i>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-zeus.card>
@endunless
