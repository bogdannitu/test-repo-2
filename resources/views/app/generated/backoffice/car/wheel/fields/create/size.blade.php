<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.wheel.fields.size') }}" for="29" :errors="$errors->get('wheel.size')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.wheel.fields.size')}}" name="wheel.size" id="29" wire:model.defer="car.size" />
</x-laragen::input.group>