<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class System extends Model
{


    use HasFactory;
     protected $table ='system';
//    use HasTranslations;

//    public $translatable = ['name'];
}
