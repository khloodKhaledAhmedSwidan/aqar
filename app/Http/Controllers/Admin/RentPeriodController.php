<?php

namespace App\Http\Controllers\Admin;

use App\Models\RentPeriod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RentPeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rentPeriods = RentPeriod::paginate(4);

        return view('admin.rent_periods.index', compact('rentPeriods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.rent_periods.create');
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
            'interval' => 'required',
        ]);
        RentPeriod::create($request->all());
        session()->flash('success', 'created successfully');
        return redirect()->route('rent-period.index');
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
        $rentPeriod = RentPeriod::find($id);
        return view('admin.rent_periods.edit', compact('rentPeriod'));
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
        $rentPeriod = RentPeriod::find($id);
        $request->validate(['interval' => 'required']);
        $rentPeriod->update($request->all());
        session()->flash('success', 'updated successfully');
        return redirect()->route('rent-period.index');
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
        $rentPeriod = RentPeriod::find($id);
        if (!$rentPeriod) {
            return responseJson(0, 'No data');
        }
        if (count($rentPeriod->advertisements) >= 1) {
            return responseJson(0, 'do not delete this interval ');
        } else {
            $rentPeriod->delete();
            return responseJson(1, 'Record deleted successfully!', $id);
        }
    }
}
