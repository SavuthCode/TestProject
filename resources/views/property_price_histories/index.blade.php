@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-bordered table-striped">
    <thead>
        <th>Property Name</th>
        <th>Rent Price</th>
        <th>Sale Price</th>
        <th>List Price</th>
        <th>Sold Price</th>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ @$row->property->name }}</td>
            <td>{{ $row->rent_price }} $</td>
            <td>{{ $row->sale_price }} $</td>
            <td>{{ $row->list_price }} $</td>
            <td>{{ $row->sold_price }} $</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
