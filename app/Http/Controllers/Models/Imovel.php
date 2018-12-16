<?php

namespace App\Http\Controllers\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Imovel extends Controller
{
    protected $primaryKey = 'codigo';
    protected $table = 'tblimovel';
    public $timeStamps = false;
}
