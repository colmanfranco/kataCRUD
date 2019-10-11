<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $fillable = ['name','headquarters','url_iframe','url_pic_hq','rating','review','anual_salary','job_offer_id'];

    
    public function opinion()
    {
        return HasMany(Opinion::class);
    }
}
