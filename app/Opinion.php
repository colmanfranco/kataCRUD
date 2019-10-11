<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Opinion extends Model
{
    protected $fillable = ['username', 'review', 'rate'];

    public function empresa()
    {
        return $this->BelongsTo(Empresa::class);
    }
}
