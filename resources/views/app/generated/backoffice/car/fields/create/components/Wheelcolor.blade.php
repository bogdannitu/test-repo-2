<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.car.fields.color') }}" for="28" :errors="$errors->get('car.color')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.car.fields.color')}}" name="car.color" id="28" wire:model.defer="car.color" />
</x-laragen::input.group>