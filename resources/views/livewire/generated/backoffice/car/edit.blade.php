<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">                    @includeIf('app.backoffice.car.edit.fieldset.default-fieldset-6.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.backoffice.car.edit.fieldset.default-fieldset-6.content_before')
                                                        @includeIf('app.backoffice.car.fields.edit.name_before')
                    @includeFirst([
                        'app.backoffice.car.fields.edit.name',
                        'app.generated.backoffice.car.fields.edit.name'
                    ])
                    @includeIf('app.backoffice.car.fields.edit.name_after')
                                                                                                    @includeIf('app.backoffice.car.fields.edit.has_driver_before')
                    @includeFirst([
                        'app.backoffice.car.fields.edit.has_driver',
                        'app.generated.backoffice.car.fields.edit.has_driver'
                    ])
                    @includeIf('app.backoffice.car.fields.edit.has_driver_after')
                                @includeIf('app.backoffice.car.edit.fieldset.default-fieldset-6.content_after')
            </div>

        </fieldset>
        @includeIf('app.backoffice.car.edit.fieldset.default-fieldset-6.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.car.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.backoffice.car.edit.footer')
