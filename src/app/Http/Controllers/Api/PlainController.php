<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Library\PlainHangarFactory;

class PlainController extends Controller
{

    public function list()
    {
        return PlainHangarFactory::getHangar()->getCountPlains();
    }
}
