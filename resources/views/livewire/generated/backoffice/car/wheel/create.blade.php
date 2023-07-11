<x-laragen::form wire:submit.prevent="submit" class="pb-7 bg-white shadow rounded px-7">
                    @includeIf('app.backoffice.car.wheel.create.fieldset.default-fieldset-6.before')
        <fieldset>

            
            <div class="flex-1 -mx-2">
                @includeIf('app.backoffice.car.wheel.create.fieldset.default-fieldset-6.content_before')
                                    @includeIf('app.backoffice.car.wheel.fields.create.color_before')
                    @includeFirst([
                                'app.backoffice.car.wheel.fields.create.color',
                                'app.generated.backoffice.car.wheel.fields.create.color'
                            ])
                    @includeIf('app.backoffice.car.wheel.fields.create.color_after')
                                    @includeIf('app.backoffice.car.wheel.fields.create.size_before')
                    @includeFirst([
                                'app.backoffice.car.wheel.fields.create.size',
                                'app.generated.backoffice.car.wheel.fields.create.size'
                            ])
                    @includeIf('app.backoffice.car.wheel.fields.create.size_after')
                                @includeIf('app.backoffice.car.wheel.create.fieldset.default-fieldset-6.content_after')
            </div>

        </fieldset>
        @includeIf('app.backoffice.car.wheel.create.fieldset.default-fieldset-6.after')
    
    <div class="form-group">

        <x-laragen::button class="mr-2">        {{ trans('global.save') }}        </x-laragen::button>
                <a href="{{ route('laragen.admin.car.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>

</x-laragen::form>
@includeIf('app.backoffice.car.wheel.create.footer')
