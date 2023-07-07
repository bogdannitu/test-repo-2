<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.user.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.user.user.edit', ['user' => $user])

</x-layouts.app>