<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use AutoNumberTrait;

    protected $table = 'brands';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_brand' => [
                'format' => function () {
                    return 'BRND/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]
        ];
    }
}
