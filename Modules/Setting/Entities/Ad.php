<?php
namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'slot','title','subtitle','button_text','button_url','image_path','enabled'
    ];
}

