<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    # many to one 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    #Many to Many  Polymorphic
    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
}
