<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $table = 'pricings';


    protected $fillable = ['plan_title', 'plan_description', 'plan_price', 'plan_feature_1', 'plan_feature_2', 'plan_feature_3', 'plan_feature_4'];
}
