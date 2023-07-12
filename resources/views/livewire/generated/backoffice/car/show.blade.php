<div class="table-fieldset">

        
        <table class="w-full show-table">
                                                                                                                                                                                                                                    <tr>
                        <th class="text-left">
                            parent stuff
                        </th>
                        <td>
                            deci da
                        </td>
                    </tr>
                                                <tr>
                    <th class="text-left">
                        {{ trans('cruds.car.fields.carWheels') }}                    </th>
                    <td>

                        @includeFirst(
                            [
                            'app.backoffice.car.fields.show.carWheels_car_id',
                            'app.generated.backoffice.car.fields.show.carWheels_car_id'
                            ]
                        )
                    </td>
                </tr>
                @includeIf('app.backoffice.car.fields.show.carWheels_car_id_after')
                    </table>
    </div>

@includeIf('app.backoffice.car.show.footer')
