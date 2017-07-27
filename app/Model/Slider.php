<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'snt-tbl-slider';
    public $timestamps = false;
    protected $fillable = ['imageSlide', 'backgroundSlide','title', 'subTitle', 'description'];


    public static function getPrefixImageName() {
        return date('Y_m_d');
    }

    public static function getImageBasePath() {
        return 'images/slider';
    }
}
