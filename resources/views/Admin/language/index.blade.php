@extends('layouts.master')
@section('title', 'Dashboard | Language')
@section('page-heading', 'Language List')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="">
    <a href="{{route('language.create')}}" class="btn btn-success mb-3" style="float: right;">Create New</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Short Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($languages as $language)
                <tr>
                    <td class="text-center">{{$loop->iteration }}</td>
                    <td>{{ $language->name ?? ""}}</td>
                    <td>{{ $language->short_code ?? ""}}</td>
                    <td class="td-actions text-right">
                        <a href="{{route('language.add.translation',[$language->id])}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                            <i class="fa fa-edit pt-1"></i> Language Translation
                        </a>
                        <a href="{{route('language.edit',[$language->id])}}" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                            <i class="fa fa-edit pt-1"></i>
                        </a>
                        <button type="button" onclick="deleteAlert('{{ route('language.show', [$language->id]) }}')" title="Delete" class="btn btn-sm btn-danger">  <i class="fa fa-trash pt-1"></i></button>
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