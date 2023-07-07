<x-layouts.app>

    <x-slot:title>    <h1>
        {{ trans('global.edit') }}
        {{ trans('cruds.car.title_singular') }}    </h1>
    </x-slot:title>
    @livewire('app.backoffice.car.edit', ['car' => $car])

</x-layouts.app>