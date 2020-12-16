<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
