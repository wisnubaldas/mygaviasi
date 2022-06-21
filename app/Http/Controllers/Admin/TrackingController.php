<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Imports\TrackingImport;
use Maatwebsite\Excel\Facades\Excel;
class TrackingController extends Controller
{
    public function index()
    {
        return view('admin.tracking');
    }
    public function importExcel(Request $request)
    {
        if ($request->hasFile('file')) {
            Excel::import(new TrackingImport, $request->file);
        }        
        
        
    }
    public function getTrack(Request $request)
    {
        $validated = $request->validate([
            'track' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validated) {
            $track = preg_replace('/[^\w!@£]/', '', $request->track);
            $track = Tracking::where('awb', $track)->first();
            if($track){
                return back()->with(['dataTrack' => $track]);
            }else{
                return back()->with(['error' => 'Data tidak ditemukan.']);
            }
        }

    }
}
