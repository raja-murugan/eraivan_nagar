<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlotController extends Controller
{
    public function index()
    {
        $data = Plot::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.plot.index', compact('data'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Plot();

        $data->unique_key = $randomkey;
        $data->plot_no = $request->get('plot_no');
        $data->Sq_ft = $request->get('Sq_ft');
        $data->rate_per_Sq_ft = $request->get('rate_per_Sq_ft');
        $data->facing = $request->get('facing');

        $data->save();


        return redirect()->route('plot.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $plotData = Plot::where('unique_key', '=', $unique_key)->first();

        $plotData->plot_no = $request->get('plot_no');
        $plotData->Sq_ft = $request->get('Sq_ft');
        $plotData->rate_per_Sq_ft = $request->get('rate_per_Sq_ft');
        $plotData->facing = $request->get('facing');

        $plotData->update();

        return redirect()->route('plot.index')->with('info', 'Updated !');
    }

    public function delete($unique_key)
    {
        $data = Plot::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('plot.index')->with('warning', 'Deleted !');
    }
}
