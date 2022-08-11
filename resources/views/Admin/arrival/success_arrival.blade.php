@extends('layouts.master')
@section('title', 'Dashboard | Arrival')
@section('page-heading', 'Passed all Checks')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-striped datatable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Company Name</th>
                <th>Visitor</th>
                <th>Mobile</th>
                <th>Vehicle No</th>
                <th>Temperature</th>
                <th>Countries</th>
                <th>Supplier name - Description</th>
                <th>Symptoms</th>
                <th>Close Contact</th>
                <th>Agree to notify MJ</th>
                <th>Arrival Time</th>

                <th>Created</th>
                <th>Admit Entry</th>
                <th>Reason</th>
                <th>Department</th>
                <th>Zone</th>
                <th>Travel Alone?</th>
                <th>Passenger Name</th>
                <th>Passenger Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach($arrival as $arrivals)
            <tr>
                <td>{{$arrivals->date ?? "N/A"}}</td>
                <td>{{ $arrivals->freight_company ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->driver_name ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->driver_mobile ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->vehicle_number ?? "N/A"}}</td>
                <td>{{$arrivals->temperature ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->countries ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->freight_company ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->taste_and_smell ?? ""}}</td>
                <td>{{$arrivals->afterassessment->close_contact ?? ""}}</td>
                <td>{{$arrivals->afterassessment->diagnosed_with_Covid ?? ""}}</td>
                <td>{{$arrivals->afterassessment->time ?? ""}}</td>
                <td>{{ date('d-m-Y', strtotime($arrivals->created_at)) ?? "N/A"}}</td>
                <td>
                @if($arrivals->admit_entry == "yes" ?? "")
                        <span class="badge badge-success">Yes</span>
                        @else
                        <span class="badge badge-danger">No</span>
                        @endif      
                    </td>
                <td>{{$arrivals->reason ?? "N/A"}}</td>
                <td>{{$arrivals->department->name ?? "N/A"}}</td>
                <td>{{$arrivals->department->zone->name}} / {{$arrivals->department->zone->number}}</td>
                <td>
                @if($arrivals->afterassessment->travel_alone == "yes" ?? "")
                        <span class="badge badge-success">Yes</span>
                        @else
                        <span class="badge badge-danger">No</span>
                        @endif      
                    </td>
                <td>{{$arrivals->afterassessment->passenger_name ?? "N/A"}}</td>
                <td>{{$arrivals->afterassessment->passenger_contact ?? "N/A"}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
@section('js')

@stop