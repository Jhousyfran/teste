<?php

namespace App\Http\Controllers\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tercerizado extends Controller
{
    protected $primaryKey = 'inttercerizadoid';
    protected $table = 'tbltercerizado';
    public $timeStamps = false;
}
