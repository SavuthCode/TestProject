<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Zone;
use App\Models\PropertyType;
use App\Models\PropertyStatus;
use App\Models\Shape;
use App\Models\PropertyPriceHistory;
use App\Http\Requests\StoreProperty;
use App\Libraries\PropertyLib;

class PropertyController extends Controller
{
    protected $varShare;
    public function __construct()
    {
        $this->varShare = [
            'zones'    => Zone::get(),
            'types'    => PropertyType::get(),
            'statuses' => PropertyStatus::get(),
            'shapes'   => Shape::get(),
        ];
        view()->share($this->varShare);

    }
    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Property::with(['zone', 'shape', 'status', 'type'])->get();
        return view('properties.index', compact('data'));
        // dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = ['zones', 'types', 'statuses', 'shapes'];
        return view('properties.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProperty $request)
    {
        $validated = $request->validated();
        $property = Property::create($request->all());
        $property->property_price_histories()->create($request->only([
            'rent_price',
            'list_price',
            'sale_price',
            'sold_price',
        ]));
        return redirect('properties')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data         = ['zones', 'types', 'statuses', 'shapes'];
        $data['data'] = Property::findOrFail($id);
        return view('properties.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ['zones', 'types', 'statuses', 'shapes'];
        $data['data'] = Property::findOrFail($id);
        return view('properties.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProperty $request, Property $property)
    {
        $validated = $request->validated();
        $property->update($request->only([
            'name', 'name',
            'property_type_id', 'property_type_id',
            'zone_id', 'zone_id',
            'preperty_status_id', 'preperty_status_id',
            'shape_id', 'shape_id',
            'rent_price', 'rent_price',
            'list_price', 'list_price',
            'sale_price', 'sale_price',
            'sold_price', 'sold_price',
        ]));
    
        $property->property_price_histories()->create($request->only([
            'rent_price',
            'list_price',
            'sale_price',
            'sold_price',
        ]));
      
        return redirect('properties')->with('success', 'Data Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Property::findOrFail($id);
        $data->delete();
        return redirect('properties')->with('success', 'Data is successfully deleted');
    }
}
