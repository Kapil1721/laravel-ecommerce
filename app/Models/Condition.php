<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $table = 'conditions';
    protected $fillable = ['name','slug'];

    public function columns() {
        return $this->belongsToMany(ColumnCondition::class, 'column_conditions_conditions', 'condition_id', 'column_id');
    }
}
