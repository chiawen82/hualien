<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelItem extends Model
{
    use HasFactory;
    
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'travel_item';
    protected $primaryKey = 'travel_item_id';

    protected $fillable = [
        'travel_item_id',
        'name',
        'estimated_minute',
        'category_id',
    ];

}
