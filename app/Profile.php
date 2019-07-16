<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/ryiIBJquQhl0gq3bwsT8kR5CuzoDas3McLKrgZXF.png';
        return '/storage/'. $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
