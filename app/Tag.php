<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function projects()
    {
        return $this->morphByMany(Project::class,'taggable');
    }
}
