<?php

namespace App\Imports;

use App\Models\Tracking;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class TrackingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tracking([
            'awb'     => preg_replace('/[^\w!@£]/', '', $row['nomor_mawb']),
            'flight'    => explode('/',$row['flightdate'])[0], 
            'track_date' => date('Y-m-d',strtotime(explode('/',$row['flightdate'])[1])),
            'kolly' => $row['kolly'],
            'weight' => $row['weight'],
            'btb' => $row['nomor_btb_cwp'],
            'shipper' => $row['shipper'],
            'remarks' => $row['remarks'],
            'flag' => $row['tipe'],
         ]);
    }
}
