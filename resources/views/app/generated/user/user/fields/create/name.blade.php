<x-laragen::input.group  class="px-2 w-full" label="{{ @trans('cruds.user.fields.name') }}" for="12" :errors="$errors->get('user.name')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.user.fields.name')}}" name="user.name" id="12" wire:model.defer="user.name" />
</x-laragen::input.group>