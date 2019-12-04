@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('shapes.update', $data->id) }}" method="post">
    @csrf
    @method('PATCH')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" id="" value="{{ $data->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
