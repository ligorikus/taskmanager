<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ["id,name,created_at,updated_at,is_active,id_users"];
}
