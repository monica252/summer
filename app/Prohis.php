<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prohis extends Model
{
    protected $table = "prohis";
    protected $gurded = ["id"];

    public static $rules = [
        "profile_id" => "required",
        "edited_at" => "required",
    ];
}
