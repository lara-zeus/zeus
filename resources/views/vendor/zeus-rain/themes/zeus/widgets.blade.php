<div class="container mx-auto">
    @if($widget->widgets !== null)
        <div class="grid grid-cols-1 md:grid-cols-12 gap-2 w-full">
            @foreach (\LaraZeus\Rain\Models\Columns::all() as $layout)
                <div class="w-full {{ $layout->class }}">
                    @if(isset($widget->widgets[$layout->key]))
                        @php
                            $widgetsItems = collect($widget->widgets[$layout->key])->sortBy('data.sort')->toArray();
                        @endphp
                        @foreach($widgetsItems as $key => $data)
                            @if(class_exists($data['data']['widget']))
                                @php
                                    $getWidget = new $data['data']['widget'];
                                @endphp
                                <div class="bg-white dark:bg-black shadow mb-2 md:mb-6 mt-6 mx-1 py-3 px-4 hover:shadow-lg transition-all ease-in-out duration-500 ltr:rounded-tr-none rtl:rounded-tl-none rounded-3xl border border-gray-100 dark:border-gray-700">
                                    @if($data['data']['title'])
                                        <h5 class="mb-2 bg-gray-100 dark:bg-gray-900 border border-secondary-200 dark:border-secondary-800 rounded-3xl ltr:rounded-tl-none rtl:rounded-tr-none absolute -mt-8 px-4 py-2 shadow font-bold text-sm lg:text-lg text-primary-600 dark:text-primary-300">
                                            {{ $data['data']['title'] }}
                                        </h5>
                                    @endif
                                    <div class="@if($data['data']['title']) pt-2 @endif">
                                        {!! $getWidget->render($data) !!}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
