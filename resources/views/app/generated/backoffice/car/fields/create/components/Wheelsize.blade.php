<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.car.fields.size') }}" for="29" :errors="$errors->get('car.size')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.car.fields.size')}}" name="car.size" id="29" wire:model.defer="car.size" />
</x-laragen::input.group>