<?php

declare(strict_types=1);

namespace FluencePrototype\Filter;

/**
 * Class FilterService
 * @package FluencePrototype\Filter
 */
class FilterService
{

    /**
     * @param string $value
     * @param iFilter $filter
     * @return bool|float|int|string|null
     */
    public function filter(string $value, iFilter $filter): bool|float|int|null|string
    {
        return $filter->filter($value);
    }

}