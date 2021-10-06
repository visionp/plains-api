<?php
namespace App\Library;

use Plains\Hangar;
use Plains\PlainFactory;

class PlainHangarFactory
{

    public static function getHangar(): Hangar
    {
        $hangar = new Hangar();

        for ($i = 0; $i < 5; $i++) {
            $hangar->addPlain(PlainFactory::buildAeropraktA24());
        }

        for ($i = 0; $i < 3; $i++) {
            $hangar->addPlain(PlainFactory::buildCurtissNc4());
        }

        for ($i = 0; $i < 2; $i++) {
            $hangar->addPlain(PlainFactory::buildBoeing747());
        }

        return $hangar;
    }
}
