<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LandingSlide;
class LandingSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->setData() as $v) {
            $lan = new LandingSlide;
            $lan->title = $v[0];
            $lan->caption = $v[1];
            $lan->description = $v[2];
            $lan->bg = $v[3];
            $lan->btn_title = $v[4];
            $lan->btn_link = $v[5];
            $lan->save();
        }
        
    }
    public function setData()
    {
        return [
            [
                "Ramp Handling",
                "On Time Performance Operations",
                "aktifitas pelayanan operational pesawat udara didarat, yang dilakukan pada
                saat tertentu pada suatu area (apron) oleh beberapa unit kerja, yang dimulai ketika parking break
                pesawat dalam posisi on chock (block on) hingga pesawat pada posisi (block off).",
                "/images/home/bg-home3-1.jpg",
                "View Details",
                "/ramp"
            ],
            [
                "Air Cargo Tracking",
                "Air Cargo Tracking made easy ",
                "Cargo Tracking refers to the verification of defined shipment conditions for high-value goods – such as pharmaceutical drugs, medical equipment, or consumer electronics – from manufacturer sites or distribution centers to their point of delivery.",
                "/images/home/bg-home3-2.jpg",
                "Search for",
                "/tracking"
            ]
        ];
    }
}
