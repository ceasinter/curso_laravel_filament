<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Holiday extends Model
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function calendar():BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }
}
