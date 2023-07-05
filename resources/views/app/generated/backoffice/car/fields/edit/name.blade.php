<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.car.fields.name') }}" for="27" :errors="$errors->get('car.name')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.car.fields.name')}}" name="car.name" id="27" wire:model.defer="car.name" />
</x-laragen::input.group>