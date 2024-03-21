<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
