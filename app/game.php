<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [ 'id', 'created_at', 'updated_at'];
}
