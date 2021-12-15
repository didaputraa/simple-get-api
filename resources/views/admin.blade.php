@extends('layouts.app')

@section('content')
<div class="col-sm-12 bg-white p-3">
    <a href="{{ route('add') }}" class="btn btn-outline-success">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Organization</th>
                <th>Province</th>
                <th>City</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($table as $no => $row)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $row->first }} {{ $row->last }}</td>
                <td>{{ $row->organization }}</td>
                <td>{{ $prov[$row->province] }}</td>
                <td>{{ $city[$row->city] }}</td>
                <td>{{ $row->address }}</td>
                <td>
                    <a href="{{ route('edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('del', $row->id) }}" onClick="return confirm('Hapus data ini')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('script')
<script>

</script>
@endpush
