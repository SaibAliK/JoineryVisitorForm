@extends('layouts.master')
@section('title', 'Dashboard | Visitor')
@section('page-heading', ' Arrival Links')
@section('css')
@stop
@section('dashboard-bar')
@stop

@section('content')
<div class="">
    <div class="table-responsive">
        <table class="table table-bordered table-striped datatable">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Url</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $dept)
                 <tr>
                    <td>{{ $dept->name }}</td>
                    <td>    
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm link" name="link" value="{{ route('arrival') }}?department={{ $dept->id }}">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary copy-link">Copy</button>
                            </div>
                        </div>
                    </td>
                </tr> 
                @endforeach
                <!-- <tr>
                    <td>Temp Check link</td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm link" value="{{ route('arrival') }}">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary copy-link">Copy</button>
                            </div>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
@stop
@section('js')
<script type="text/javascript">
    $(document).on("click", ".copy-link", function(event) {
        var elm = $(this).closest('td').find('.link');
        $(elm).select();
        document.execCommand("copy");
        $('.copy-link').text('Copy');
        $(this).text('Copied');

    });
    $('#lang').change(function() {
        var item = $(this).val();
        var inpu = $('input[name="link"]').val("http://localhost:8000/arrival?department=" + item);
    });
</script>
@stop