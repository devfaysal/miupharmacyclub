<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function donor(){
        return $this->belongsTo(User::class, 'donor_id');
    }
}
