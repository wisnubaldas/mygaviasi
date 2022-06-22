<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Attributes\SearchUsingFullText;
// use Laravel\Scout\Attributes\SearchUsingPrefix;
// use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Scout\Searchable;

class Tracking extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['awb','flight','track_date','kolly','weight','btb','shipper','remarks','flag'];

    // #[SearchUsingPrefix(['id', 'email'])]
    // #[SearchUsingFullText(['bio'])]
    public function toSearchableArray()
    {
        return [
            'awb' => $this->awb,
        ];
    }
    // protected function flag(): Attribute
    // {
    //     return Attribute::make(
    //         // get: fn ($value) => ucfirst($value),
    //         set: fn ($value) => strtoupper($value),
    //     );
    // }
}
