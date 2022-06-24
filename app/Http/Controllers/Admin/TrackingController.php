<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracking;
use App\Imports\TrackingImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\MessageBroker;
use Illuminate\Support\Facades\Mail;

class TrackingController extends Controller
{
    public function index()
    {
        return view('admin.tracking');
    }
    public function list_track()
    {
        $track = Tracking::orderBy('created_at')->simplePaginate(9);   
        return view('admin.track-list',compact('track'));
    }
    public function importExcel(Request $request)
    {
        

        if ($request->hasFile('file')) {
            $import = new TrackingImport;
            Excel::import($import, $request->file);
            $x = $import->getData();
            Mail::to("wisnubaldas@gmail.com",)->send(new MessageBroker($this->rcfParse($x)));
        }
        
    }
    public function setTrack(Request $request)
    {
        $trk =  new Tracking;
        $trk->flag = strtoupper($request->flag);
        $trk->flight = $request->flight;
        $trk->awb = self::str_clean($request->awb);
        $trk->kolly = $request->kolly;
        $trk->btb = $request->btb;
        $trk->shipper = $request->shipper;
        $trk->remarks = $request->remarks;
        $trk->track_date = date('Y-m-d',strtotime($request->track_date));
        $trk->weight = $request->weight;
        $trk->save();
        return back();
    }
    protected static function getTrack($flag,$request){
        $validated = $request->validate([
            'track' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validated) {
            return Tracking::where('awb', self::str_clean($request->track))->where('flag',$flag)->first();
        }
    }
    public function getTrackExport(Request $request)
    {
        $data = self::getTrack('EXPORT',$request);
        return view('marello.page.track-result',['track'=>$data]);

    }
    public function getTrackImport(Request $request)
    {
        $data = self::getTrack('IMPORT',$request);
        return view('marello.page.track-result',['track'=>$data]);

    }
    public function searching(Request $request)
    {
        $orders = Tracking::search('Star Trek')->where('user_id', 1)->get();
    }
    protected static function str_clean($string){
        return preg_replace('/[^\w!@£]/', '', $string);
    }
}
