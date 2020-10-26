<?php

namespace App\Models\Todo;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';

    protected $fillable = ['user_id','title','completed'];
}
