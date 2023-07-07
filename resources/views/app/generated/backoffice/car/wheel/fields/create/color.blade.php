<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.wheel.fields.color') }}" for="28" :errors="$errors->get('wheel.color')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.wheel.fields.color')}}" name="wheel.color" id="28" wire:model.defer="car.color" />
</x-laragen::input.group>