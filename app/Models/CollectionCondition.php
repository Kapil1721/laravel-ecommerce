<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionCondition extends Model
{
    protected $table = 'collection_column_conditions';
    protected $fillable = [
        'collection_id',
        'column_condition_id',
        'condition_id',
        'operator',
        'value'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }

    public function column_condition()
    {
        return $this->belongsTo(ColumnCondition::class, 'column_condition_id');
    }
    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }
}
