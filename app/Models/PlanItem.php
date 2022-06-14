<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanItem extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'plan_item';
    protected $primaryKey = 'plan_item_id';

    protected $fillable = [
        'plan_item_id',
        'plan_id',
        'type',
        'travel_item_id',
        'order',
        'day'
    ];
}
