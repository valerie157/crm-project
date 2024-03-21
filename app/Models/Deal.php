<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = ['name', 'amount', 'stage'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
