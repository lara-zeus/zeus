<x-forms::field-wrapper
        :id="$getId()"
        :label="$getLabel()"
        :label-sr-only="$isLabelHidden()"
        :helper-text="$getHelperText()"
        :hint="$getHint()"
        :hint-icon="$getHintIcon()"
        :required="$isRequired()"
        :state-path="$getStatePath()"
>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }">
        @if(config('zeus-wind.enableDepartments'))
            @php $departments = config('zeus-wind.models.department')::whereIsActive(1)->orderBy('ordering')->get(); @endphp
            @if($departments->isEmpty())
                <x-filament::card>
                    <div class="text-red-400">
                        {{ __('no departments available!') }}
                    </div>
                </x-filament::card>
                <input type="hidden" name="{{ $getStatePath() }}" wire:model="{{ $getStatePath() }}" value="{{ config('zeus-wind.defaultDepartmentId') }}">
            @else
                <div class="max-w-4xl mx-auto text-primary-600 -mb-4 mt-4">
                    {{ __('Select Department') }}:
                    @error($getStatePath()) <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="max-w-4xl mx-auto my-6 grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-2 ">
                    @foreach($departments as $dept)
                        <div>
                            <label class="checkbox-wrapper">
                                <input wire:model="{{ $getStatePath() }}" {{--@checked($departments->count() === 1 || request('department') === $dept->slug)--}} type="radio" class="checkbox-input" name="group" value="{{ $dept->id }}"/>
                                <span class="checkbox-tile hover:border-secondary-500 p-4">
                                    <span class="text-primary-600 dark:text-primary-500 flex flex-col items-center justify-center gap-2">
                                        @if($dept->logo !== null)
                                            <img class="w-full h-32 object-center object-cover" src="{{ \Illuminate\Support\Facades\Storage::disk(config('zeus-wind.uploads.disk','public'))->url($dept->logo) }}">
                                        @endif
                                        {{ $dept->name ?? '' }}
                                    </span>
                                    <span class="text-gray-500 dark:text-gray-100 text-center px-2 overflow-clip overflow-hidden ">{{ $dept->desc ?? '' }}</span>
                                </span>
                            </label>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    </div>
</x-forms::field-wrapper>
