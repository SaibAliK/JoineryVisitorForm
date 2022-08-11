@extends('layouts.master')
@section('title', 'Dashboard | Personnel')
@section('page-heading', 'Visitor form Links')
@section('css')
@stop

@section('dashboard-bar')
@stop

@section('content')
<div class="">
    <!--<a href="{{route('personnel.create')}}" class="btn btn-success mb-3" style="float: right;">Create New</a>-->

    <div class="table-responsive">
        <table class="table table-bordered table-striped datatable">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Language</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
                @foreach($langs as $lang)
                <tr >
                    <td class="text-center">{{$loop->iteration }}</td>
                    <td>{{$lang->name ?? ""}}</td>
                    <td>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control form-control-sm link" value="{{ route('home') }}?lang={{ $lang->short_code }}">
                          <div class="input-group-append">
                            <button class="btn btn-sm btn-primary copy-link">Copy</button>
                          </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    $(document).on("click",".copy-link", function(event) {
        var elm = $(this).closest('td').find('.link');
        $(elm).select();
        document.execCommand("copy");
        $('.copy-link').text('Copy');
        $(this).text('Copied');
});
</script>
@stop