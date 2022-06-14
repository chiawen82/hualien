<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PlanItem;

class TravelPlan extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'travel_plan';
    protected $primaryKey = 'plan_id';

    protected $fillable = [
        'plan_id',
        'day',
        'author_id'
    ];
    public function planItems()
    {
        return $this->hasMany(PlanItem::class, 'plan_id', 'plan_id');
    }
}
