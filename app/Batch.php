<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    public function members()
    {
        return User::where('batch', $this->name)->get();
    }

    public function path()
    {
        return "/members/{$this->name}";
    }
}
