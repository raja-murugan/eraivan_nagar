<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Booking;
use App\Models\BookingPlot;

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
        
    }
}
