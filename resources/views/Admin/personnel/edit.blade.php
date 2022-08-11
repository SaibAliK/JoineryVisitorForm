@extends('layouts.master')
@section('title', 'Dashboard | Personnel')
@section('page-heading', 'Edit Personnel')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('personnel.update',$personnel->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$personnel->name}}" id="" placeholder="Name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control" value="{{$personnel->contact}}" id="" placeholder="Contact">
                </div>
            </div>
            <div class="col-md-4 input-group mb-3">
                <div class="form-group">
                    <label for="">Language</label>
                    <select class="custom-select" name="language_id" id="inputGroupSelect01">
                        <option selected disabled>Choose Language</option>
                        @foreach($languages as $lang)
                        <option value="{{$lang->id}}" {{($personnel->language_id ==$lang->id) ? 'selected' : ''}}>{{$lang->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
                <a href="{{route('personnel.list')}}" class="btn btn-danger mr-2" style="float: right;">Close</a>
            </div>
        </div>
    </form>
</div>
@stop
@section('js')

@stop