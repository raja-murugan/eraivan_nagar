<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Booking;
use App\Models\BookingPlot;
use App\Models\Plot;
use App\Models\Reference;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use PDF;

class BookingController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $data = Booking::where('date', '=', $today)->where('soft_delete', '!=', 1)->get();
        $plot_terms = [];
        $bookings = [];
        foreach ($data as $key => $datas) {

            $BookingPlots = BookingPlot::where('booking_id', '=', $datas->id)->get();
            foreach ($BookingPlots as $key => $BookingPlots_arr) {

                $plot_id = Plot::findOrFail($BookingPlots_arr->plot_id);
                $plot_terms[] = array(
                    'projectname' => $BookingPlots_arr->projectname,
                    'block' => $BookingPlots_arr->block,
                    'plot_id' => $BookingPlots_arr->plot_id,
                    'plot_no' => $plot_id->plot_no,
                    'Sq_ft' => $plot_id->Sq_ft,
                    'rate_per_Sq_ft' => $plot_id->rate_per_Sq_ft,
                    'facing' => $plot_id->facing,
                    'booking_id' => $BookingPlots_arr->booking_id,
                    'id' => $BookingPlots_arr->id,
                );

            }

            $reference = Reference::findOrFail($datas->reference);

            $bookings[] = array(
                'unique_key' => $datas->unique_key,
                'date' => $datas->date,
                'customername' => $datas->customername,
                'fathername' => $datas->fathername,
                'husbandname' => $datas->husbandname,
                'mobileno' => $datas->mobileno,
                'idproofone' => $datas->idproofone,
                'idproof_no' => $datas->idproof_no,
                'proofimage_one' => $datas->proofimage_one,
                'idprooftwo' => $datas->idprooftwo,
                'proofimage_two' => $datas->proofimage_two,
                'address' => $datas->address,
                'street' => $datas->street,
                'area' => $datas->area,
                'city' => $datas->city,
                'pincode' => $datas->pincode,
                'dateof_site_visit' => $datas->dateof_site_visit,
                'reference' => $datas->reference,
                'block' => $datas->block,
                'referencename' => $reference->name,
                'id' => $datas->id,
                'plot_terms' => $plot_terms,
            );
        }

        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        return view('pages.backend.booking.index', compact('bookings', 'today', 'Reference', 'Plot'));
        
    }



    public function datefilter(Request $request) {
        $today = $request->get('from_date');


        $data = Booking::where('date', '=', $today)->where('soft_delete', '!=', 1)->get();
        $plot_terms = [];
        $bookings = [];
        foreach ($data as $key => $datas) {

            $BookingPlots = BookingPlot::where('booking_id', '=', $datas->id)->get();
            foreach ($BookingPlots as $key => $BookingPlots_arr) {

                $plot_id = Plot::findOrFail($BookingPlots_arr->plot_id);
                $plot_terms[] = array(
                    'projectname' => $BookingPlots_arr->projectname,
                    'block' => $BookingPlots_arr->block,
                    'plot_id' => $BookingPlots_arr->plot_id,
                    'plot_no' => $plot_id->plot_no,
                    'Sq_ft' => $plot_id->Sq_ft,
                    'rate_per_Sq_ft' => $plot_id->rate_per_Sq_ft,
                    'facing' => $plot_id->facing,
                    'booking_id' => $BookingPlots_arr->booking_id,
                    'id' => $BookingPlots_arr->id,
                );

            }

            $reference = Reference::findOrFail($datas->reference);

            $bookings[] = array(
                'unique_key' => $datas->unique_key,
                'date' => $datas->date,
                'customername' => $datas->customername,
                'fathername' => $datas->fathername,
                'husbandname' => $datas->husbandname,
                'mobileno' => $datas->mobileno,
                'idproofone' => $datas->idproofone,
                'idproof_no' => $datas->idproof_no,
                'proofimage_one' => $datas->proofimage_one,
                'idprooftwo' => $datas->idprooftwo,
                'proofimage_two' => $datas->proofimage_two,
                'address' => $datas->address,
                'street' => $datas->street,
                'area' => $datas->area,
                'city' => $datas->city,
                'pincode' => $datas->pincode,
                'dateof_site_visit' => $datas->dateof_site_visit,
                'reference' => $datas->reference,
                'block' => $datas->block,
                'referencename' => $reference->name,
                'id' => $datas->id,
                'plot_terms' => $plot_terms,
            );
        }

        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        return view('pages.backend.booking.index', compact('bookings', 'today', 'Reference', 'Plot'));
    }




    public function create()
    {
        $Reference = Reference::where('soft_delete', '!=', 1)->get();
        $Plot = Plot::where('soft_delete', '!=', 1)->get();
        $today = Carbon::now()->format('Y-m-d');

        return view('pages.backend.booking.create', compact('Reference', 'Plot', 'today'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);
        $Booking = new Booking();
        $Booking->unique_key = $randomkey;
        $Booking->date = $request->get('date');
        $Booking->customername = $request->get('customername');
        $Booking->fathername = $request->get('fathername');
        $Booking->mobileno = $request->get('mobileno');
        $Booking->idproofone = $request->get('idproofone');
        $Booking->idproof_no = $request->get('idproof_no');
        $Booking->address = $request->get('address');
        $Booking->street = $request->get('street');
        $Booking->area = $request->get('area');
        $Booking->city = $request->get('city');
        $Booking->pincode = $request->get('pincode');
        $Booking->dateof_site_visit = $request->get('dateof_site_visit');
        $Booking->reference = $request->get('reference');
        $Booking->block = $request->get('booking_block');
        $Booking->save();


        $insertedId = $Booking->id;

        foreach ($request->get('plot_id') as $key => $plot_id) {

            $Getplot = Plot::findOrFail($plot_id);

            $BookingPlot = new BookingPlot;
            $BookingPlot->booking_id = $insertedId;
            $BookingPlot->projectname = 'ERAIVAN NAGAR';
            $BookingPlot->block = $request->get('booking_block');
            $BookingPlot->plot_id = $plot_id;
            $BookingPlot->plot_no = $Getplot->plot_no;
            $BookingPlot->square_feet = $request->square_feet[$key];
            $BookingPlot->save();
        }

        return redirect()->route('booking.index')->with('message', 'booking Data added successfully!');
    }



   



    public function update(Request $request, $unique_key)
    {

    }




    public function delete($unique_key)
    {

    }



}
