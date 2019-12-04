@extends('layouts.app')
@section('content')
<div class="container">
@include('components.alert')
@include('components.sample_form')
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>Name</th>
        <th>Code</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->code }}</td>
            <td>
                <form action="{{ route('shapes.destroy', $row->id) }}" method="post">
                    <a href="{{ route('shapes.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
