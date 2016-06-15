<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
