@extends('layouts.master')
@section('title', 'Dashboard | Department')
@section('page-heading', 'Department List')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="">
<a href="{{route('department.create')}}" class="btn btn-success mb-3" style="float: right;">Create New</a>

    <div class="table-responsive">
    <table class="table table-bordered table-striped datatable">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Zone</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $depart)
            <tr>
                <td class="text-center">{{$loop->iteration }}</td>
                <td>{{$depart->name ?? ""}}</td>
                <td>{{$depart->email ?? ""}}</td>
                @if($depart->zone)
                <td>{{$depart->zone->name}} - {{$depart->zone->number}}</td>
                @else
                <td>N/A</td>
                @endif
                <td class="td-actions text-right">
                    <a href="{{route('department.edit',[$depart->id])}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="fa fa-edit pt-1"></i>
                    </a>
                    <button type="button" onclick="deleteAlert('{{route('department.delete',[$depart->id])}}')" title="Delete" class="btn btn-sm btn-danger">  <i class="fa fa-trash pt-1"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@stop
@section('js')

@stop