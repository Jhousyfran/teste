<?php

namespace App\Http\Controllers\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Repasse extends Controller
{
    protected $primaryKey = 'intrepasseid';
    protected $table = 'tblrepasse';
    public $timeStamps = false;
}
