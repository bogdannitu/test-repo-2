<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.user.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('app.user.user.create')

</x-layouts.app>