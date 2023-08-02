<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.car.fields.has_driver') }}" for="32" :errors="$errors->get('car.has_driver')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.car.fields.has_driver')}}" name="car.has_driver" id="32" wire:model.defer="car.has_driver" />
</x-laragen::input.group>