<div>
    <div wire:loading.delay>
        Loading...
    </div>
    @includeIf('app.user.user.index.before_content')

    <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-7">
        <div class="inline-block min-w-full py-2 align-middle px-6 lg:px-8">
            <div class="overflow-hidden shadow rounded">
                <table class="laragen-table">
                    <thead>
                    <tr>
                                                                                @includeIf('app.user.user.index.id_before_header')
                            <th>
                                {{ trans('cruds.user.fields.id') }}                            </th>
                            @includeIf('app.user.user.index.id_after_header')
                                                                                @includeIf('app.user.user.index.name_before_header')
                            <th>
                                {{ trans('cruds.user.fields.name') }}                            </th>
                            @includeIf('app.user.user.index.name_after_header')
                                                                                @includeIf('app.user.user.index.email_before_header')
                            <th>
                                {{ trans('cruds.user.fields.email') }}                            </th>
                            @includeIf('app.user.user.index.email_after_header')
                                                                                @includeIf('app.user.user.index.email_verified_at_before_header')
                            <th>
                                {{ trans('cruds.user.fields.email_verified_at') }}                            </th>
                            @includeIf('app.user.user.index.email_verified_at_after_header')
                                                                                @includeIf('app.user.user.index.password_before_header')
                            <th>
                                {{ trans('cruds.user.fields.password') }}                            </th>
                            @includeIf('app.user.user.index.password_after_header')
                                                                                @includeIf('app.user.user.index.created_at_before_header')
                            <th>
                                {{ trans('cruds.user.fields.created_at') }}                            </th>
                            @includeIf('app.user.user.index.created_at_after_header')
                                                                                @includeIf('app.user.user.index.updated_at_before_header')
                            <th>
                                {{ trans('cruds.user.fields.updated_at') }}                            </th>
                            @includeIf('app.user.user.index.updated_at_after_header')
                                                                                @includeIf('app.user.user.index.deleted_at_before_header')
                            <th>
                                {{ trans('cruds.user.fields.deleted_at') }}                            </th>
                            @includeIf('app.user.user.index.deleted_at_after_header')
                                                <th style="width: 120px">{{ trans('global.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        @includeIf('app.user.user.index.before_row', ['item' => $item])
                        <tr>
                                                                                            @includeIf('app.user.user.fields.index.id_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.id',
                                            'app.generated.user.user.fields.index.id'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.id_after')
                                </td>
                                @includeIf('app.user.user.fields.index.id_after_column')
                                                                                            @includeIf('app.user.user.fields.index.name_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.name',
                                            'app.generated.user.user.fields.index.name'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.name_after')
                                </td>
                                @includeIf('app.user.user.fields.index.name_after_column')
                                                                                            @includeIf('app.user.user.fields.index.email_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.email',
                                            'app.generated.user.user.fields.index.email'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.email_after')
                                </td>
                                @includeIf('app.user.user.fields.index.email_after_column')
                                                                                            @includeIf('app.user.user.fields.index.email_verified_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.email_verified_at',
                                            'app.generated.user.user.fields.index.email_verified_at'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.email_verified_at_after')
                                </td>
                                @includeIf('app.user.user.fields.index.email_verified_at_after_column')
                                                                                            @includeIf('app.user.user.fields.index.password_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.password',
                                            'app.generated.user.user.fields.index.password'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.password_after')
                                </td>
                                @includeIf('app.user.user.fields.index.password_after_column')
                                                                                            @includeIf('app.user.user.fields.index.created_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.created_at',
                                            'app.generated.user.user.fields.index.created_at'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.created_at_after')
                                </td>
                                @includeIf('app.user.user.fields.index.created_at_after_column')
                                                                                            @includeIf('app.user.user.fields.index.updated_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.updated_at',
                                            'app.generated.user.user.fields.index.updated_at'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.updated_at_after')
                                </td>
                                @includeIf('app.user.user.fields.index.updated_at_after_column')
                                                                                            @includeIf('app.user.user.fields.index.deleted_at_before_column')
                                <td>
                                    @includeFirst(
                                        [
                                            'app.user.user.fields.index.deleted_at',
                                            'app.generated.user.user.fields.index.deleted_at'
                                        ]
                                    )
                                    @includeIf('app.user.user.fields.index.deleted_at_after')
                                </td>
                                @includeIf('app.user.user.fields.index.deleted_at_after_column')
                                                        <td>
                                <div class="form-group flex">
                                    
                                    @if(!$hideDefaultActions)

                                    
                                        @if(!$hideShowAction)

                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-eye" href="{{ route('laragen.admin.users.show', ['user' => $item->id]) }}"></x-laragen::button>
                                        @endif

                                    
                                    
                                        @if(!$hideEditAction)

                                         
                                        
                                        <x-laragen::button variant="text" size="xs" icon="fa-light fa-pencil" href="{{ route('laragen.admin.users.edit', ['user' => $item->id]) }}"></x-laragen::button>
                                        @endif
                                    
                                                                            @if(!$hideDeleteAction)
                                            <x-laragen::button variant="text" size="xs" icon="fa-light fa-trash" color="error" wire:click="confirm('delete', {{ $item->id }})"></x-laragen::button>                                        @endif
                                    
                                    @endif
                                    @includeIf('app.user.user.index.actions')
                                </div>
                            </td>
                        </tr>
                        @includeIf('app.user.user.index.after_row', ['item' => $item])
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

    @includeIf('app.user.user.index.after_content')
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

@includeIf('app.user.user.index.footer')
