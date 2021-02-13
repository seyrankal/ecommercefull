<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test_ApiModel extends Model
{
    protected $table = "test_api";

    public $timestamps = false;
    protected $fillable = [
        'ad',
        'soyad',
    ];
}
