<div class="container mx-auto">
    @if($layout->widgets !== null)
        <div class="grid grid-cols-1 md:grid-cols-12 gap-2 w-full">
            @foreach (\LaraZeus\Rain\Models\Columns::all() as $column)
                <div class="w-full {{ $column->class }}">
                    @if(isset($layout->widgets[$column->key]))
                        @php
                            $widgetsItems = collect($layout->widgets[$column->key])->sortBy('data.sort')->toArray();
                        @endphp
                        @foreach($widgetsItems as $key => $data)
                            @if(class_exists($data['data']['widget']))
                                @php
                                    $getWidget = new $data['data']['widget'];
                                @endphp
                                <x-zeus.card>
                                    @if($data['data']['title'])
                                        <x-slot name="title">
                                            {{ $data['data']['title'] }}
                                        </x-slot>
                                    @endif
                                    <div class="@if($data['data']['title']) pt-2 @endif">
                                        {!! $getWidget->render($data['data']) !!}
                                    </div>
                                </x-zeus.card>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
