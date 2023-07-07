<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">                    @includeIf('app.user.user.edit.fieldset.default-fieldset-5.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.user.user.edit.fieldset.default-fieldset-5.content_before')
                                    @includeIf('app.user.user.fields.edit.name_before')
                    @includeFirst([
                        'app.user.user.fields.edit.name',
                        'app.generated.user.user.fields.edit.name'
                    ])
                    @includeIf('app.user.user.fields.edit.name_after')
                                    @includeIf('app.user.user.fields.edit.email_before')
                    @includeFirst([
                        'app.user.user.fields.edit.email',
                        'app.generated.user.user.fields.edit.email'
                    ])
                    @includeIf('app.user.user.fields.edit.email_after')
                                @includeIf('app.user.user.edit.fieldset.default-fieldset-5.content_after')
            </div>

        </fieldset>
        @includeIf('app.user.user.edit.fieldset.default-fieldset-5.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.user.user.edit.footer')
