<?php

namespace App\Http\Controllers\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Gestor extends Controller
{
    protected $primaryKey = 'intgestorid';
    protected $table = 'tblgestor';
    public $timeStamps = false;
}
