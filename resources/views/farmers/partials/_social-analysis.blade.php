<div class="tab-pane" id="socials">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-striped"">
            <tbody>

            @foreach([
                'age' => 'Age',
                'accommodation_type' => 'Accommodation type',
                'no_of_dependents' => 'Number of dependents',
                'highest_level_of_education' => 'Highest level of education',
                'mobility_type' => 'Mobility type',
                'coop_membership_size' => 'Cooperative membership size',
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
