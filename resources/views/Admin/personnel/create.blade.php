@extends('layouts.master')
@section('title', 'Dashboard | Personnel')
@section('page-heading', 'Add Personnel')
@section('css')
<style>
    .alert_message{
        width: 100% !important;
    }
</style>
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('personnel.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4 input-group mb-3">
                <div class="form-group w-100">
                    <label for="">Choose Language</label>
                    <select class="custom-select" name="language_id" id="inputGroupSelect01">
                        <option selected disabled>Choose Language</option>
                        @foreach($languages as $lang)
                        <option value="{{$lang->id}}">{{$lang->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('language_id')
                <div class="alert alert-danger alert_message">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Name">
                </div>
                @error('name')
                <div class="alert alert-danger alert_message">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control" id="" placeholder="contact">
                </div>
                @error('contact')
                <div class="alert alert-danger alert_message">{{ $message }}</div>
                @enderror
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