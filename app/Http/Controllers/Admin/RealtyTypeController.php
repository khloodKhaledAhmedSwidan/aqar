<?php

namespace App\Http\Controllers\Admin;

use App\Models\RealtyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealtyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $realtyTypes = RealtyType::paginate(4);

        return view('admin.realty_types.index', compact('realtyTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.realty_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);
        RealtyType::create($request->all());
        session()->flash('success', 'created successfully');
        return redirect()->route('realty-type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $realtyType = RealtyType::find($id);
        return view('admin.realty_types.edit', compact('realtyType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $realtyType = RealtyType::find($id);
        $request->validate(['name' => 'required']);
        $realtyType->update($request->all());
        session()->flash('success', 'updated successfully');
        return redirect()->route('realty-type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $realtyType = RealtyType::find($id);
        if (!$realtyType) {
            return responseJson(0, 'No data');
        }
        if (count($realtyType->advertisements) >= 1) {
            return responseJson(0, 'do not delete this type ');
        } else {
            $realtyType->delete();
            return responseJson(1, 'Record deleted successfully!', $id);
        }
    }
}
