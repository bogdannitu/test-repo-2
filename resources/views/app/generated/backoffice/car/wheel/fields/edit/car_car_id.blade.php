<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.wheel.fields.car') }}" for="5" :errors="$errors->get('wheel.car_id')" >
    <x-laragen::input.select name="wheel.car_id" id="5" wire:model.defer="wheel.car_id" >        <option value="" selected>{{ trans('global.choose') }}</option>
                    @foreach($cars as $item)
                <option value="{{ $item->id }}">
                                        {{$item->id}}                </option>
            @endforeach
            </x-laragen::input.select>
</x-laragen::input.group>