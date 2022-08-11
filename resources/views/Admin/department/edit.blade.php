@extends('layouts.master')
@section('title', 'Dashboard | Department')
@section('page-heading', 'Edit Department')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('department.update',[$departments->id])}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Department Name</label>
                    <input type="text" name="name" class="form-control" value="{{$departments->name}}" id="" placeholder="department name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{$departments->email}}" class="form-control"  placeholder="Email">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Choose Zone</label>
                    <select name="zone_id" id="" class="form-control">
                        @foreach($zones as $zone)
                        <option value="{{$zone->id}}" @if($departments->zone_id == $zone->id) selected @endif>{{$zone->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
            <a href="{{route('department.index')}}" class="btn btn-danger mr-2" style="float: right;">Close</a>
        </div>
    </form>
</div>
@stop
@section('js')

@stop