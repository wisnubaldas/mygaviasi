<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        
        return view('welcome');
    }
    public function getPages($page = null,Request $request )
    {
        switch ($page) {
            case 'ramp':
                return view('marello.page.ramp');
                break;
            case 'warehouse':
                return view('marello.page.warehouse');
                break;
            case 'domestic':
                    return view('marello.page.flow_domestic');
                    break;
            case 'international':
                return view('marello.page.flow-international');
                break;
            case 'bageround':
                return view('marello.page.bageround');
                break;
            case 'visimisi':
                return view('marello.page.visimisi');
                break;
            case 'history':
                return view('marello.page.history');
                break;
            case 'galery':
                $galery = self::getGalery();
                return view('marello.page.galery',compact('galery'));
                break;
            case 'License':
                return view('marello.page.license');
                break;
            case 'contact':
                if($request->method() == 'POST'){
                    // return $request->all();
                }
                return view('marello.page.contact');
                break;
            case 'track':
                return view('marello.page.tract');
                break;
            default:
                return abort(404);
                break;
        }
    }

}
