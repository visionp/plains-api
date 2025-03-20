<?php

declare(strict_types=1);

namespace App\Services\PlainHangar;

use App\Library\PlainHangarFactory;

final class PlainHangar implements PlainHangarContract
{

    public function getCountPlains(): array
    {
        return PlainHangarFactory::getHangar()->getCountPlains();
    }
}
