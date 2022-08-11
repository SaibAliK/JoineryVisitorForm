
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Visitor</th>
            <th>Mobile</th>
            <th>Vehicle No</th>
            <th>Temperature</th>
            <th>Countries</th>
            <th>Freight Company</th>
            <th>Taste And Smell</th>
            <th>Close Contact</th>
            <th>Diagnosed with Covid</th>
            <th>Arrival Time</th>

            <th>Created</th>
            <th>Admit Entry</th>
            <th>Travel Alone</th>
            <th>Reason</th>
            <th>Department</th>
            <th>Zone</th>
            <th>Passenger Name</th>
            <th>Passenger Contact</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arrivals as $arrival)
        <tr>
            <td>{{$arrival->date ?? ""}}</td>
            <td>{{$arrival->afterassessment->driver_name ?? ""}}</td>
            <td>{{$arrival->afterassessment->driver_mobile ?? ""}}</td>
            <td>{{$arrival->afterassessment->vehicle_number ?? ""}}</td>
            <td>{{$arrival->temperature ?? ""}}</td>
            <td>{{$arrival->afterassessment->countries ?? ""}}</td>
            <td>{{$arrival->afterassessment->freight_company ?? ""}}</td>
            <td>{{$arrival->afterassessment->taste_and_smell ?? ""}}</td>
            <td>{{$arrival->afterassessment->close_contact ?? ""}}</td>
            <td>{{$arrival->afterassessment->diagnosed_with_Covid ?? ""}}</td>
            <td>{{$arrival->afterassessment->time ?? ""}}</td>
            <td>{{ date('d-m-Y', strtotime($arrival->created_at)) ?? "N/A"}}</td>
            <td>
                @if($arrival->admit_entry == "yes" ?? "")
                Yes
                @else
                No
                @endif
            </td>
            <td>
                @if($arrival->afterassessment->travel_alone == "yes" ?? "")
                Yes
                @else
                No
                @endif
            </td>
            <td>{{$arrival->reason ?? "N/A"}}</td>
            <td>{{$arrival->department->name ?? ""}}</td>
            <td>{{$arrival->department->zone->name ?? ""}} / {{$arrival->department->zone->number ?? ""}}</td>
            <td>{{$arrival->afterassessment->passenger_name ?? "N/A"}}</td>
            <td>{{$arrival->afterassessment->passenger_contact ?? "N/A"}}</td>
        </tr>
        @endforeach
    </tbody>
</table>