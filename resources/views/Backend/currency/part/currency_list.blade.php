<div class="table-responsive">
    <table class="table zero-configuration">
        <thead>
            <tr>
                <th>AED</th>
                <th>Dollar </th>
                <th>Euro </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($currencys as $currencys )
                <tr>

                    <td>AED {{$currencys->aed}}</td>
                    <td>$ {{$currencys->dollar}}</td>
                    <td>€ {{$currencys->euro}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
