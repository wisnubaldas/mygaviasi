<?php

namespace App\Imports;

use App\Models\Tracking;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class TrackingImport implements ToModel, WithHeadingRow, WithEvents, SkipsEmptyRows
{
    use Importable, RegistersEventListeners;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $data = [];
    public $tracking_status;
    public function rules(): array
    {
        return [
            'nomor_mawb' => [
                'required',
                'string',
            ],
        ];
    }

    public function model(array $row)
    {
        if($row['flightdate'])
        {
            $d = explode('/',$row['flightdate']);
        }else{
            $d = [null,'1978-01-01'];
        }
        $awb = preg_replace('/[^\w!@£]/', '', $row['nomor_mawb']);
        $x = [
            'awb'     => ($this->cek_value($awb) == 0)?'err-awb_'.rand(1,100000000):$awb,
            'flight'    => $this->cek_value($d[0]), 
            'track_date' => $this->cek_value(date('Y-m-d',strtotime($d[1]))),
            'kolly' => $this->cek_value($row['kolly']),
            'weight' => $this->cek_value($row['weight']),
            'btb' => $this->cek_value($row['nomor_btb_cwp']),
            'shipper' => $this->cek_value($row['shipper']),
            'remarks' => $this->cek_value($row['remarks']),
            'flag' => ($this->tracking_status == 'import')?1:2,
            'destination' => $row['destination']
        ];

        if(count($x) > 0){
            array_push($this->data, $x);
        }
        return new Tracking($x);
    }
    public function headingRow(): int
    {
        return 1;
    }
    public function getData(): array
    {
        return $this->data;
    }
    private function cek_value($value)
    {
        $value = trim($value);
        if(strpos($value, 'SUM(') !== false){
            $value = false;
        }
        return (!$value || '')? 0:$value;
    }
    
}
