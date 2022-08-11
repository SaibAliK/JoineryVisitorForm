<table>
    <thead>
        <tr>
            <th>Driver</th>
            <th>Phone</th>
            <th>For temp check</th>
            <th>Symptoms</th>
            <th>Countries</th>
            <th>Contacts</th>
            <th>Notify</th>
            <th>Alone</th>
            <th>Signature</th>
            <th>Company</th>
            <th>Supplier</th>
            <th>Freight Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($assessments as $visit)
        <tr>
            <td>{{$visit->driver_name ?? ""}}</td>
            <td>{{$visit->driver_mobile ?? ""}}</td>
            <td>{{ $visit->check_temp ? 'Yes' : 'No' }}</td>
            <td>{{$visit->taste_and_smell ?? ""}}</td>
            <td>{{$visit->countries ?? ""}}</td>
            <td>{{$visit->close_contact ?? ""}}</td>
            <td>{{$visit->diagnosed_with_Covid ?? ""}}</td>
            <td>{{$visit->own_vehicle ?? ""}}</td>
            <td>
                <img src="{{ asset($visit->signature) }}" style="width: 80px;height:80px" alt="">
            </td>
            <td>{{$visit->freight_company ?? ""}}</td>
            <td>{{$visit->supplier_of_goods ?? ""}}</td>
            <td>{{$visit->description_of_freight ?? ""}}</td>
        </tr>
        @endforeach
    </tbody>
</table>