@extends('layouts.master')
@section('title', 'Dashboard | Language')
@section('page-heading', 'Create New Language')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="mt-5">
    <form action="{{route('language.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Language Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Language name">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Language Short Code</label>
                    <input type="text" name="short_code" class="form-control" id="" placeholder="Language Short Code">
                </div>
                @error('short_code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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