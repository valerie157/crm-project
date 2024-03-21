<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['type', 'subject','description', 'date'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }
}