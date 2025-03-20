<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PlainHangar\PlainHangarContract;

class PlainController extends Controller
{
    private PlainHangarContract $plainHangar;

    public function __construct(PlainHangarContract $plainHangar)
    {
        $this->plainHangar = $plainHangar;
    }

    public function list(): array
    {
        return  $this->plainHangar->getCountPlains();
    }
}
