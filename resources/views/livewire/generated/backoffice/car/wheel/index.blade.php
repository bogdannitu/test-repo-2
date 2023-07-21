<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.backoffice.car.wheel.index.before_content')

    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                                                @includeIf('app.backoffice.car.wheel.index.id_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.id') }}                            </th>
                            @includeIf('app.backoffice.car.wheel.index.id_after_header')
                                                                                @includeIf('app.backoffice.car.wheel.index.color_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.color') }}                            </th>
                            @includeIf('app.backoffice.car.wheel.index.color_after_header')
                                                                                @includeIf('app.backoffice.car.wheel.index.size_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.size') }}                            </th>
                            @includeIf('app.backoffice.car.wheel.index.size_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        @includeIf('app.backoffice.car.wheel.index.before_row', ['item' => $item])
                        <tr>
                                                                                            @includeIf('app.backoffice.car.wheel.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.wheel.fields.index.id',
                                            'app.generated.backoffice.car.wheel.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.wheel.fields.index.id_after')
                                </td>
                                @includeIf('app.backoffice.car.wheel.fields.index.id_after_column')
                                                                                            @includeIf('app.backoffice.car.wheel.fields.index.color_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.wheel.fields.index.color',
                                            'app.generated.backoffice.car.wheel.fields.index.color'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.wheel.fields.index.color_after')
                                </td>
                                @includeIf('app.backoffice.car.wheel.fields.index.color_after_column')
                                                                                            @includeIf('app.backoffice.car.wheel.fields.index.size_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.car.wheel.fields.index.size',
                                            'app.generated.backoffice.car.wheel.fields.index.size'
                                        ]
                                    )
                                    @includeIf('app.backoffice.car.wheel.fields.index.size_after')
                                </td>
                                @includeIf('app.backoffice.car.wheel.fields.index.size_after_column')
                                                        <td>
                                <div class="form-group flex">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        @if(!$hideShowAction)

                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.car.show', ['wheel' => $item->id]) }}"></x-laragen::button>
                                        @endif

                                    
                                    
                                        @if(!$hideEditAction)

                                                <x-laragen::modal title="Edit" hideActions="true">                                                <x-slot name="activator">                                                <x-laragen::button type="button" @click="open = true" variant="text" size="xs" icon="fa-light fa-edit">                                                </x-laragen::button>                                                </x-slot>                                                @livewire('app.backoffice.car.wheel.edit', ['wheel' => $item])
                                                </x-laragen::modal>
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.car.edit', ['wheel' => $item->id]) }}"></x-laragen::button>
                                        @endif
                                    
                                                                            @if(!$hideDeleteAction)
                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="confirm('delete', {{ $item->id }})"></x-laragen::button>                                        @endif
                                    
                                    @endif
                                    @includeIf('app.backoffice.car.wheel.index.actions')
                                </div>
                            </td>
                        </tr>
                        @includeIf('app.backoffice.car.wheel.index.after_row', ['item' => $item])
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

    @includeIf('app.backoffice.car.wheel.index.after_content')
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

@includeIf('app.backoffice.car.wheel.index.footer')
