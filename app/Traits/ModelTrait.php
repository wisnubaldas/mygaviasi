<?php

namespace App\Traits;
/**
 * trait for data structures
 */
use App\Models\LandingSlide;
trait ModelTrait
{
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
