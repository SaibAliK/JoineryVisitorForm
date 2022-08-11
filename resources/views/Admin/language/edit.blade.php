@extends('layouts.master')
@section('title', 'Dashboard | Language')
@section('page-heading', 'Edit Language')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('language.update',[$language->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{$language->name}}" id="" placeholder="language name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="short_code" class="form-control" value="{{$language->short_code}}" id="" placeholder="language short code">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
            <a href="{{route('language.index')}}" class="btn btn-danger mr-2" style="float: right;">Close</a>
        </div>
    </form>
</div>
@stop
@section('js')

@stop