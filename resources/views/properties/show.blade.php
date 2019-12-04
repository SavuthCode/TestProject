@extends('layouts.app')
@section('content')
<div class="container">
<form action="" method="post">
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="name" class="" id="" value="{{ $data->name }}" disabled>
    </div>
    <div class="form-group">
        <label>Code</label>
        <input type="text" name="name" class="" id="" value="{{ $data->code }}" disabled>
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select class="" id="" name="property_type_id" disabled>
            <option value="">-- Select Type --</option>
            @foreach ($types as $type)
                <option value="{{ @$type->id }}" {{(@$data->property_type_id == @$type->id) ? 'selected':''}}>{{ @$type->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Zone</label>
        <select class="" id="" name="zone_id" disabled>
            <option value="">-- Select Zone --</option>
            @foreach ($zones as $zone)
                <option value="{{ $zone->id }}" {{(@$data->zone_id == $zone->id) ? 'selected':''}}>{{ $zone->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Shape</label>
        <select class="" id="" name="shape_id" disabled>
            <option value="">-- Select Shape --</option>
            @foreach ($shapes as $shape)
                <option value="{{ $shape->id }}" {{(@$data->shape_id == $shape->id) ? 'selected':''}}>{{ $shape->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Rent Price</label>
        <input type="text" name="rent_price" class="" id="" value="{{ @$data->rent_price }}" disabled>
    </div>
    <div class="form-group">
        <label>Sale Price</label>
        <input type="text" name="sale_price" class="" id="" value="{{ @$data->sale_price }}" disabled>
    </div>
    <div class="form-group">
        <label>List Price</label>
        <input type="text" name="list_price" class="" id="" value="{{ @$data->list_price }}" disabled>
    </div>
    <div class="form-group">
        <label>Sold Price</label>
        <input type="text" name="sold_price" class="" id="" value="{{ @$data->sold_price }}" disabled>
    </div>
    <div class="form-group">
        <label for="">Status</label>
        <select class="" id="" name="property_status_id" disabled>
            <option value="">-- Select Status --</option>
            @foreach ($statuses as $status)
                <option value="{{ $status->id }}" {{(@$data->property_status_id == $status->id) ? 'selected':''}}>{{ $status->name }}</option>
            @endforeach
        </select>
    </div>
</form>
</div>
@endsection