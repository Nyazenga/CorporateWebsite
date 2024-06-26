<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';


    protected $fillable = ['heading_title', 'heading_description', 'who_we_are', 'our_vision', 'our_history','picture'];
}
