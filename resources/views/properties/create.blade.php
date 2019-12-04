@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('properties.store') }}" method="post" class="">
    @csrf
    <div class="form-group">
        <label>{{ __('messages.name') }}</label>
        <input type="text" name="name" class=" @error('name') is-invalid @enderror">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{{ __('messages.type') }}</label>
        <select class=" @error('property_type_id') is-invalid @enderror" id="" name="property_type_id">
            <option value="">-- Select Type --</option>
            @foreach ($types as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('property_type_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{{ __('messages.zone') }}</label>
        <select class=" @error('zone_id') is-invalid @enderror" id="" name="zone_id">
            <option value="">-- Select Zone --</option>
            @foreach ($zones as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('zone_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{{ __('messages.shape') }}</label>
        <select class=" @error('shape_id') is-invalid @enderror" id="" name="shape_id">
            <option value="">-- Select Shape --</option>
            @foreach ($shapes as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        @error('shape_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{{ __('messages.rent_price') }}</label>
        <input type="text" name="rent_price" class=" @error('rent_price') is-invalid @enderror" id="">
        @error('rent_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{{ __('messages.sale_price') }}</label>
        <input type="text" name="sale_price" class=" @error('sale_price') is-invalid @enderror" id="">
        @error('sale_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{{ __('messages.list_price') }}</label>
        <input type="text" name="list_price" class=" @error('list_price') is-invalid @enderror" id="">
        @error('list_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>{{ __('messages.sold_price') }}</label>
        <input type="text" name="sold_price" class=" @error('sold_price') is-invalid @enderror" id="">
        @error('sold_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">{{ __('messages.status') }}</label>
        <select class="" id="" name="property_status_id">
            <option value="">-- Select Status --</option>
            @foreach ($statuses as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection