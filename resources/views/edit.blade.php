@extends('layouts.app')

@push('css')
    <link href="{{ asset('asset/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="col-sm-12 bg-white p-3">
<form action="{{ route('update', $row->id) }}" method="post">
@method('PUT')
@csrf
    <div class="form-group">
        <label>First name</label>
        <input type="text" name="name-f" value="{{ $row->first }}" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input type="text" name="name-l" value="{{ $row->last }}" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Organization</label>
        <input type="text" name="org" value="{{ $row->organization }}" class="form-control" required />
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{ $row->address }}" class="form-control" required />
    </div>
     <div class="form-group">
        <label>Province</label>
        <select id="prov" name="prov" class="form-control">
        @foreach($prov as $i=>$val)
            <option value="{{ $i }}" {{ $i == $row->province? 'selected': '' }} >{{ $val }}</option>
        @endforeach
        </select>
    </div>
     <div class="form-group">
        <label>City</label>
        <select id="city" name="city" class="form-control">
         @foreach($city as $i => $val)
            <option value="{{ $i }}" {{ $i == $row->city? 'selected': '' }} >{{ $val }}</option>
         @endforeach
        </select>
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
    $('#prov').select2();
    $('#city').select2();
</script>
@endpush
