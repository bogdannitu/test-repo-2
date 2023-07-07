<x-layouts.app>

    <x-slot:title>        <h1>
            {{ trans('global.create') }}            {{ trans('cruds.car.title_singular') }}        </h1>
    </x-slot:title>
    @livewire('app.backoffice.car.create')

</x-layouts.app>