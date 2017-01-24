@extends('adminlte::page')
@extends('layouts.master')
    
@section('title', 'Report History | TRACE')

@section('content_header')

    
@stop

@section('content')

    <table class="table table-striped table-bordered" id="reports-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Driver's Name</th>
                <th>Plate Number</th>
                <th>Description</th>
                <th>Screen Name Used</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#reports-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            { name: 'id' },
            { name: 'drivers_name' },
            { name: 'plate_number' },
            { name: 'description' },
            { name: 'partner_screen_name' },
            { name: 'created_at' },
            { name: 'updated_at' }
        ]
    });
});
</script>
@endpush


