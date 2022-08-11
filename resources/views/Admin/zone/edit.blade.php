@extends('layouts.master')
@section('title', 'Dashboard | Zone')
@section('page-heading', 'Create New Zone')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('zone.update',[$zone->id])}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Zone Name</label>
                    <input type="text" name="name" value="{{$zone->name}}" class="form-control" id="" placeholder="Zone name">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Zone Number</label>
                    <input type="text" name="number" value="{{$zone->number}}" class="form-control" placeholder="Zone Number">
                </div>
                @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
            <a href="{{route('zone.index')}}" class="btn btn-danger mr-2" style="float: right;">Close</a>
        </div>
    </form>
</div>
@stop
@section('js')

@stop