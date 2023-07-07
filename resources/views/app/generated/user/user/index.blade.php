<x-layouts.app>
    <x-slot:title>        <h1>
            {{ trans('cruds.user.title_multiple') }}        </h1>
    </x-slot:title>

    <x-slot:headerActions>                            <x-laragen::button href="{{ route('laragen.admin.users.create') }}">                {{ trans('global.create') }}
            </x-laragen::button>            </x-slot:headerActions>
    @livewire('app.user.user.index')

</x-layouts.app>