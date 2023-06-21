@if(!$faqs->isEmpty())
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-center text-3xl font-extrabold tracking-tight sm:text-4xl text-primary-500 dark:text-primary-400">
                {{ __('frequently asked questions') }}
            </h2>
            <div class="space-y-8 mt-10">
                @foreach($faqs as $faq)
                    <x-zeus.card>
                        <x-slot name="title">
                            {{ $faq->question }}
                        </x-slot>
                        <div class="pb-4 px-6 prose dark:prose-invert max-w-none">
                            {!! $faq->answer !!}
                        </div>
                    </x-zeus.card>
                @endforeach
            </div>
        </div>
    </div>
@endif
