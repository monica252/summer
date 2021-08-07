<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        "name" => "required",
        "gender" => "required",
        "hobby" => "required",
        "introduction" => "required",
    ];

    public function edit()
    {
        return $this->hasMany("App\Edit");
    }
}
