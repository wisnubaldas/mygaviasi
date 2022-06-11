<?php

namespace App\Traits;
/**
 * trait for data structures
 */
use App\Models\LandingSlide;
trait ModelTrait
{
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
        $admin = URI['admin'];
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
                'name' => 'Settings',
                'icon' => 'file-text',
                'link' => '#',
                'children'=>[
                    [
                        'name' => 'Profile',
                        'icon' => 'home',
                        'link' => '/'.$admin.'/profile',
                    ],
                    [
                        'name' => 'child2',
                        'icon' => 'home',
                        'link' => 'admin/child2',
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
