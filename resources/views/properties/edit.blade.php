@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ route('properties.update', $data->id) }}" method="post">
    @csrf
    @method('PATCH')
    <input type="hidden" name="code" class="" id="">
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class=" @error('name') is-invalid @enderror" id="" value="{{ old('name') ?? $data->name }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select class="" id="" name="property_type_id">
            @foreach ($types as $type)
                <option value="{{ @$type->id }}" {{(@$data->property_type_id == @$type->id) ? 'selected':''}}>{{ @$type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Zone</label>
        <select class="" id="" name="zone_id">
            @foreach ($zones as $zone)
                <option value="{{ $zone->id }}" {{(@$data->zone_id == $zone->id) ? 'selected':''}}>{{ $zone->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Shape</label>
        <select class="" id="" name="shape_id">
            @foreach ($shapes as $shape)
                <option value="{{ $shape->id }}" {{(@$data->shape_id == $shape->id) ? 'selected':''}}>{{ $shape->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Rent Price</label>
        <input type="text" name="rent_price" class=" @error('rent_price') is-invalid @enderror" id="" value="{{ old('rent_price') ?? @$data->rent_price }}">
        @error('rent_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Sale Price</label>
        <input type="text" name="sale_price" class=" @error('sale_price') is-invalid @enderror" id="" value="{{ old('sale_price') ?? @$data->sale_price }}">
        @error('sale_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>List Price</label>
        <input type="text" name="list_price" class=" @error('list_price') is-invalid @enderror" id="" value="{{ old('list_price') ?? @$data->list_price }}">
        @error('list_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Sold Price</label>
        <input type="text" name="sold_price" class=" @error('sold_price') is-invalid @enderror" id="" value="{{ old('sold_price') ?? @$data->sold_price }}">
        @error('sold_price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="" id="" name="property_status_id">
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{(@$data->property_status_id == $status->id) ? 'selected':''}}>{{ $status->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
@endsection