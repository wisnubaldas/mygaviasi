<?php

namespace App\Imports;

use App\Models\Tracking;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Events\BeforeImport;



class TrackingImport implements ToModel, WithHeadingRow, WithEvents
{
    use Importable, RegistersEventListeners;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $data = [];

    public function model(array $row)
    {
        $x = [
            'awb'     => preg_replace('/[^\w!@£]/', '', $row['nomor_mawb']),
            'flight'    => explode('/',$row['flightdate'])[0], 
            'track_date' => date('Y-m-d',strtotime(explode('/',$row['flightdate'])[1])),
            'kolly' => $row['kolly'],
            'weight' => $row['weight'],
            'btb' => $row['nomor_btb_cwp'],
            'shipper' => $row['shipper'],
            'remarks' => $row['remarks'],
            'flag' => $row['tipe'],
        ];
        if(count($x) > 0){
            array_push($this->data, $x);
        }
        return new Tracking($x);
    }
    public function getData(): array
    {
        return $this->data;
    }
    
}
