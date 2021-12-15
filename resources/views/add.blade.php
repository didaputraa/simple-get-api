@extends('layouts.app')

@push('css')
    <link href="{{ asset('asset/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="col-sm-12 bg-white p-3">
<form action="{{ route('insert') }}" method="post">
@csrf
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="name-f" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input type="text" name="name-l" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Organization</label>
        <input type="text" name="org" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" required />
    </div>
     <div class="form-group">
        <label>Province</label>
        <select id="prov" name="prov" class="form-control"></select>
    </div>
     <div class="form-group">
        <label>City</label>
        <select id="city" name="city" class="form-control"></select>
    </div>
    <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
     <div class="form-group float-right">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
</div>
@endsection

@push('script')
<script src="{{ asset('asset/select2/js/select2.min.js') }}"></script>
<script>

fetch("{{ route('api.prov') }}").then(e=> e.json())
.then(e=>{

    $('#prov').empty();

    e.forEach(row=>{
        $('#prov').append(`<option value="${row.kode}">${row.nama}</option>`);
    });
    $('#prov').select2();

    fetch("{{ route('api.city') }}").then(e=> e.json())
    .then(e=>{
        $('#city').empty();
        e.forEach(row=>{
            $('#city').append(`<option value="${row.kode}">${row.nama}</option>`);
        });
        $('#city').select2();
    });

});

</script>
@endpush
