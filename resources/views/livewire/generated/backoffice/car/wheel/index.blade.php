<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.backoffice.wheel.index.before_content')
    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                                                @includeIf('app.backoffice.wheel.index.id_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.id') }}                            </th>
                            @includeIf('app.backoffice.wheel.index.id_after_header')
                                                                                @includeIf('app.backoffice.wheel.index.color_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.color') }}                            </th>
                            @includeIf('app.backoffice.wheel.index.color_after_header')
                                                                                @includeIf('app.backoffice.wheel.index.size_before_header')
                            <th>
                                {{ trans('cruds.wheel.fields.size') }}                            </th>
                            @includeIf('app.backoffice.wheel.index.size_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        @includeIf('app.backoffice.wheel.index.before_row', ['item' => $item])
                        <tr>
                                                                                            @includeIf('app.backoffice.wheel.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.wheel.fields.index.id',
                                            'app.generated.backoffice.wheel.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.backoffice.wheel.fields.index.id_after')
                                </td>
                                @includeIf('app.backoffice.wheel.fields.index.id_after_column')
                                                                                            @includeIf('app.backoffice.wheel.fields.index.color_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.wheel.fields.index.color',
                                            'app.generated.backoffice.wheel.fields.index.color'
                                        ]
                                    )
                                    @includeIf('app.backoffice.wheel.fields.index.color_after')
                                </td>
                                @includeIf('app.backoffice.wheel.fields.index.color_after_column')
                                                                                            @includeIf('app.backoffice.wheel.fields.index.size_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.backoffice.wheel.fields.index.size',
                                            'app.generated.backoffice.wheel.fields.index.size'
                                        ]
                                    )
                                    @includeIf('app.backoffice.wheel.fields.index.size_after')
                                </td>
                                @includeIf('app.backoffice.wheel.fields.index.size_after_column')
                                                        <td>
                                <div class="form-group">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.car.show', ['wheel' => $item->id]) }}"></x-laragen::button>
                                    
                                    
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.car.edit', ['wheel' => $item->id]) }}"></x-laragen::button>                                    
                                                                                <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="confirm('delete', {{ $item->id }})"></x-laragen::button>                                    
                                    @endif
                                    @includeIf('app.backoffice.wheel.index.actions')
                                </div>
                            </td>
                        </tr>
                        @includeIf('app.backoffice.wheel.index.after_row', ['item' => $item])
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

    @includeIf('app.backoffice.wheel.index.after_content')
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

@includeIf('app.backoffice.wheel.index.footer')
