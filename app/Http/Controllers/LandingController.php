<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function getPages($page = null)
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
            default:
                return abort(404);
                break;
        }
    }

}
