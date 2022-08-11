@extends('layouts.master')
@section('title', 'Dashboard | Zone')
@section('page-heading', 'Zone List')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="">
<a href="{{route('zone.create')}}" class="btn btn-success mb-3" style="float: right;">Create New</a>

    <div class="table-responsive">
    <table class="table table-bordered table-striped datatable">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Number</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zones as $zone)
            <tr>
                <td class="text-center">{{$loop->iteration }}</td>
                <td>{{$zone->name ?? ""}}</td>
                <td>{{$zone->number ?? ""}}</td>
                <td class="td-actions text-right">
                    <a href="{{route('zone.edit',[$zone->id])}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                        <i class="fa fa-edit pt-1"></i>
                    </a>
                      <button type="button" onclick="deleteAlert('{{route('zone.delete',[$zone->id])}}')" title="Delete" class="btn btn-sm btn-danger">  <i class="fa fa-trash pt-1"></i></button>
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