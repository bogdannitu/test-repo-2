<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.id') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.id',
                            'app.generated.backoffice.car.fields.show.id'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.id_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.created_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.created_at',
                            'app.generated.backoffice.car.fields.show.created_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.created_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.updated_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.updated_at',
                            'app.generated.backoffice.car.fields.show.updated_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.updated_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.deleted_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.deleted_at',
                            'app.generated.backoffice.car.fields.show.deleted_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.deleted_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.name') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.name',
                            'app.generated.backoffice.car.fields.show.name'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.name_after')
                    </table>
    </div>

@includeIf('app.backoffice.car.show.footer')
