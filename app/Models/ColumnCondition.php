<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColumnCondition extends Model
{
    protected $table = 'column_conditions';
    protected $fillable    = ['name', 'conditions'];

    public function conditions() {
        return $this->belongsToMany(Condition::class, 'column_conditions_conditions', 'column_id', 'condition_id');
    }
}
