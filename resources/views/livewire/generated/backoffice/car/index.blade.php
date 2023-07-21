<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.backoffice.car.index.before_content')

    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                                                @includeIf('app.backoffice.car.index.id_before_header')
                            <th>
                                {{ trans('cruds.car.fields.id') }}                            </th>
                            @includeIf('app.backoffice.car.index.id_after_header')
                                                                                                                                                                                                                                                                    @includeIf('app.backoffice.car.index.name_before_header')
                            <th>
                                {{ trans('cruds.car.fields.name') }}                            </th>
                            @includeIf('app.backoffice.car.index.name_after_header')
                                                                                                            <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        @includeIf('app.backoffice.car.index.before_row', ['item' => $item])
                        <tr>
                                                                                            @includeIf('app.backoffice.car.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.fields.index.id',
                                            'app.generated.backoffice.car.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.fields.index.id_after')
                                </td>
                                @includeIf('app.backoffice.car.fields.index.id_after_column')
                                                                                                                                                                                                                                                                                                        @includeIf('app.backoffice.car.fields.index.name_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.fields.index.name',
                                            'app.generated.backoffice.car.fields.index.name'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.fields.index.name_after')
                                </td>
                                @includeIf('app.backoffice.car.fields.index.name_after_column')
                                                                                                                            <td>
                                <div class="form-group flex">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        @if(!$hideShowAction)

                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.car.show', ['car' => $item->id]) }}"></x-laragen::button>
                                        @endif

                                    
                                    
                                        @if(!$hideEditAction)

                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.car.edit', ['car' => $item->id]) }}"></x-laragen::button>
                                        @endif
                                    
                                    <x-laragen::modal title="Edit" hideActions="true">                                        <x-slot>                                        </x-slot>                                    </x-laragen::modal>
                                                                            @if(!$hideDeleteAction)
                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="confirm('delete', {{ $item->id }})"></x-laragen::button>                                        @endif
                                    
                                    @endif
                                    @includeIf('app.backoffice.car.index.actions')
                                </div>
                            </td>
                        </tr>
                        @includeIf('app.backoffice.car.index.after_row', ['item' => $item])
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-5 pagination">
                {{ $items->onEachSide(1)->links() }}
            </div>
        </div>
    </div>

    @includeIf('app.backoffice.car.index.after_content')
</div>

    @push('scripts')
        <script>
            Livewire.on('deleteNotAllowed', e => {
                alert('Delete not allowed, check related rows (' + e + ').');
            });
            Livewire.on('confirm', e => {
                if (!confirm("Are you sure?")) {
                    return
                }
            @this[e.callback](...e.argv)
            });
        </script>
    @endpush

@includeIf('app.backoffice.car.index.footer')
