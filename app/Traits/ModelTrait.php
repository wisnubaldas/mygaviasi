<?php

namespace App\Traits;
/**
 * trait for data structures
 */
use App\Models\LandingSlide;
use Carbon\Carbon;
trait ModelTrait
{
    protected static function str_clean($string){
        return preg_replace('/[^\w!@£]/', '', $string);
    }
    public static function rcfParse($data)
    {
        $result = array();
        foreach ($data as $key => $v) {
            $awb = substr_replace($v['awb'], '-',3,-strlen($v['awb']));
            $date = Carbon::parse($v['track_date']);
            $flight = self::str_clean($v['flight']);
            $parse = $awb.'CGKSIN/'.$flight.'RFC/QZ0262/'.$date->day.strtoupper($date->englishMonth).$date->year.'/SIN/'.
                    $flight.'//A1027';
            array_push($result,$parse);
            
        }
        return $result;
    }

    public function getGalery()
    {
        return [
            [
                'id'=>'1',
                'grp'=>'export',
                'img_f'=>'e1f.jpg',
                'img'=>'e1.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'2',
                'grp'=>'export',
                'img_f'=>'e2f.jpg',
                'img'=>'e2.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'3',
                'grp'=>'export',
                'img_f'=>'e3f.jpg',
                'img'=>'e3.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'4',
                'grp'=>'export',
                'img_f'=>'e4f.jpg',
                'img'=>'e4.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'5',
                'grp'=>'export',
                'img_f'=>'e5f.jpg',
                'img'=>'e5.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'6',
                'grp'=>'export',
                'img_f'=>'e6f.jpg',
                'img'=>'e6.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'7',
                'grp'=>'export',
                'img_f'=>'e7f.jpg',
                'img'=>'e7.jpg',
                'title'=>'Export',
                'head'=>'Export loading cargo',
                'desc' =>'Export loading cargo in progress',
            ],
            [
                'id'=>'8',
                'grp'=>'import',
                'img_f'=>'i1f.jpg',
                'img'=>'i1.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'9',
                'grp'=>'import',
                'img_f'=>'i2f.jpg',
                'img'=>'i2.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'10',
                'grp'=>'import',
                'img_f'=>'i2f.jpg',
                'img'=>'i2.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'11',
                'grp'=>'import',
                'img_f'=>'i3f.jpg',
                'img'=>'i3.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'12',
                'grp'=>'import',
                'img_f'=>'i4f.jpg',
                'img'=>'i4.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'13',
                'grp'=>'import',
                'img_f'=>'i5f.jpg',
                'img'=>'i5.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'14',
                'grp'=>'import',
                'img_f'=>'i6f.jpg',
                'img'=>'i6.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'15',
                'grp'=>'import',
                'img_f'=>'i7f.jpg',
                'img'=>'i7.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'16',
                'grp'=>'import',
                'img_f'=>'i8f.jpg',
                'img'=>'i8.jpg',
                'title'=>'Import',
                'head'=>'Import loading cargo',
                'desc' =>'Import loading cargo in progress',
            ],
            [
                'id'=>'17',
                'grp'=>'ramp',
                'img_f'=>'r1f.jpg',
                'img'=>'r1.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
            [
                'id'=>'18',
                'grp'=>'ramp',
                'img_f'=>'r2f.jpg',
                'img'=>'r2.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
            [
                'id'=>'19',
                'grp'=>'ramp',
                'img_f'=>'r3f.jpg',
                'img'=>'r3.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
            [
                'id'=>'20',
                'grp'=>'ramp',
                'img_f'=>'r4f.jpg',
                'img'=>'r4.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
            [
                'id'=>'21',
                'grp'=>'ramp',
                'img_f'=>'r5f.jpg',
                'img'=>'r5.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
            [
                'id'=>'22',
                'grp'=>'ramp',
                'img_f'=>'r6f.jpg',
                'img'=>'r6.jpg',
                'title'=>'Ramp Handling',
                'head'=>'Ramp Handling loading cargo',
                'desc' =>'Ramp loading cargo in progress',
            ],
        ];
    }
    public static function landingMenu()
    {
        $l = '/'.URI['landing'];
        return [
            [
                'name' => 'Home',
                'link' => '/',
                'children'=>null,
            ],
            [
                'name' => 'Services',
                'children'=>[
                    [
                        'name' => 'Ramp Handling',
                        'link' => $l.'/ramp',
                    ],
                    [
                        'name' => 'Warehouse Handling',
                        'link' => $l.'/warehouse',
                    ],
                ],
            ],
            [
                'name' => 'Facilities',
                'children'=>[
                    [
                        'name' => 'Flow Domestic',
                        'link' => $l.'/domestic',
                    ],
                    [
                        'name' => 'Flow International',
                        'link' => $l.'/international',
                    ],
                ],
            ],
            [
                'name' => 'Tracking & Traces',
                'link' => $l.'/track',
                'children'=>null,
            ],
            [
                'name' => 'About',
                'children'=>[
                    [
                        'name' => 'Bageround',
                        'link' => $l.'/bageround',
                    ],
                    [
                        'name' => 'Vision & Mission',
                        'link' => $l.'/visimisi',
                    ],
                    [
                        'name' => 'History',
                        'link' => $l.'/history',
                    ],
                    [
                        'name' => 'Galery',
                        'link' => $l.'/galery',
                    ],
                    [
                        'name' => 'License',
                        'link' => $l.'/License',
                    ],
                ],
            ],
            [
                'name' => 'Contacts',
                'link' => $l.'/contact',
                'children'=>null,
            ],
            [
                'name' => 'Login',
                'link' => '/login',
                'children'=>null,
            ],
            
        ];
    }
    public static function menu()
    {
        $admin = '/'.URI['admin'];
        return [
            [
                'name' => 'Landing',
                'icon' => 'box',
                'link' => '/',
                'children'=>null,
            ],
            [
                'name' => 'Dashboard',
                'icon' => 'home',
                'link' => '/home',
                'children'=>null,
            ],
            [
                'name' => 'Tracking',
                'icon' => 'home',
                'link' => '#',
                'children'=>[
                    [
                        'name' => 'Input Tracking',
                        'icon' => 'home',
                        'link' => $admin.'/track',
                    ],
                    [
                        'name' => 'List Tracking',
                        'icon' => 'home',
                        'link' => $admin.'/track-list',
                    ],
                ],
            ],
            [
                'name' => 'Settings',
                'icon' => 'file-text',
                'link' => '#',
                'children'=>[
                    [
                        'name' => 'Profile',
                        'icon' => 'home',
                        'link' => $admin.'/profile',
                    ],
                ],
            ],
        ];
    }
    public static function getSlides()
    {
        return LandingSlide::all();
    }
}
