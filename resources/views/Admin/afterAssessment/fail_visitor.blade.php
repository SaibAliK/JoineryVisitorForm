@extends('layouts.master')
@section('title', 'Dashboard | Visitor')
@section('page-heading', 'Pending Arrival')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-striped datatable">
        <thead>
            <tr>
                <th>Visitor</th>
                <th>Company Name</th>
                <th>Mobile</th>
                <th>Vehicle No</th>
                <th>Taste And Smell</th>
                <th>Close Contact</th>
                <th>Agree to notify MJ</th>
                <th>Arrival Date</th>
                <th>Arrival Time</th>
                <th>Countries</th>
                <th>Supplier name - Description</th>
                <th>Travel Alone</th>
                <th>Passenger Name</th>
                <th>Passenger Contact</th>
                <th>Department</th>
                <th>Zone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitor as $visit)
            <tr>
                <td>{{$visit->driver_name ?? "N/A"}}</td>
                <td>{{ $visit->freight_company ?? "N/A"}}</td>
                <td>{{$visit->driver_mobile ?? "N/A"}}</td>
                <th>{{$visit->vehicle_number ?? "N/A"}}</th>
                <td>{{$visit->taste_and_smell ?? ""}}</td>
                <td>{{$visit->close_contact ?? ""}}</td>
                <td>{{$visit->diagnosed_with_Covid ?? ""}}</td>
                <td>{{$visit->date ?? ""}}</td>
                <td>{{$visit->time ?? ""}}</td>
                <td>{{$visit->countries ?? "N/A"}}</td>
                <td>{{$visit->description_of_freight ?? "N/A"}}</td>

                <td>
                    @if($visit->travel_alone == "yes" ?? "")
                    <span class="badge badge-success">Yes</span>
                    @else
                    <span class="badge badge-danger">No</span>
                    @endif      
                </td>

                <td>{{$visit->passenger_name ?? "N/A"}}</td>
                <td>{{$visit->passenger_contact ?? "N/A"}}</td>
                <td>{{$visit->department->name ?? "N/A"}}</td>
                <td>{{$visit->department->zone->name ?? ""}} / {{$visit->department->zone->number ?? ""}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
@section('js')

@stop