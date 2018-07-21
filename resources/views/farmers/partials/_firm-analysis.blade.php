<div class="tab-pane" id="settings-b1">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-striped"">
            <tbody>

            @foreach([
                'location_of_farm' => 'Location of Farm',
                'no_of_yrs_in_farming' => 'Number of years in farming',
                'size_of_farm' => 'Size of farm',
                'farm_mechanization' => 'Farm mechanization',
                'soil_type' => 'Soil type',
                'crop_rotation' => 'Crop rotation',
                'farming_type' => 'Farming type',
                'irrigation_method' => 'Irrigation method',
                'no_of_employees' => 'Number of employees',
            ] as $field => $name)
                <tr>
                    <td>{{ $name }}</td>
                    <td>{{ $farmer->$field }}</td>
                    <td>{{ $creditScore->get($field, $farmer->$field) }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>