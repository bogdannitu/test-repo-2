<x-layouts.app>


    <x-slot:title>
        <h1>

            {{ trans('global.show') }}
            {{ trans('cruds.car.title_singular') }}
        </h1>

    </x-slot:title>

    @livewire('app.backoffice.car.show', ['car' => $car])

</x-layouts.app>