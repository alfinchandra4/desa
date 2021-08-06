<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest_house extends Model
{
    use HasFactory;

    protected $table = 'guest_houses';

    protected $guarded = [];
}
