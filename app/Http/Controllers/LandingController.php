<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slides = self::getSlides();
        return view('welcome',compact('slides'));
    }
    public function getPages($page = null)
    {
        switch ($page) {
            case 'bageround':
                return view('front.page.about');
                break;
            
            default:
                return abort(404);
                break;
        }
    }

}
