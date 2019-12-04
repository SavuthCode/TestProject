@extends('layouts.app')
@section('content')
<div class="container">
@include('components.alert')
@include('components.sample_form')
<br>
<table class="table table-bordered table-striped">
    <thead>
        <th>{{ __('messages.name') }}</th>
        <th>{{ __('messages.code') }}</th>
        <th>{{ __('messages.action') }}</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ @$row->name }}</td>
            <td>{{ @$row->code }}</td>
            <td>
                <form action="{{ route('property_types.destroy', @$row->id) }}" method="post">
                    <a href="{{ route('property_types.edit', @$row->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
