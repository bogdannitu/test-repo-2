<div class="table-fieldset">

        
        <table class="w-full show-table">
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.id') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.id',
                            'app.generated.user.user.fields.show.id'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.id_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.name') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.name',
                            'app.generated.user.user.fields.show.name'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.name_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.email') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.email',
                            'app.generated.user.user.fields.show.email'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.email_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.email_verified_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.email_verified_at',
                            'app.generated.user.user.fields.show.email_verified_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.email_verified_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.password') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.password',
                            'app.generated.user.user.fields.show.password'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.password_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.created_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.created_at',
                            'app.generated.user.user.fields.show.created_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.created_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.updated_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.updated_at',
                            'app.generated.user.user.fields.show.updated_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.updated_at_after')
                                            <tr>
                    <th class="text-left">
                        {{ trans('cruds.user.fields.deleted_at') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.user.user.fields.show.deleted_at',
                            'app.generated.user.user.fields.show.deleted_at'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.user.user.fields.show.deleted_at_after')
                    </table>
    </div>

@includeIf('app.user.user.show.footer')
