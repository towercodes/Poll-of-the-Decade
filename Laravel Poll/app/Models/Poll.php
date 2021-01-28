<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\http\controllers\PollController;

class Poll extends Model
{
    use HasFactory;
protected $fillable = ['votes'];
}
