<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use AutoNumberTrait;

    protected $table = 'kategoris';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_kategori' => [
                'format' => function () {
                    return 'KTG/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]
        ];
    }
}
