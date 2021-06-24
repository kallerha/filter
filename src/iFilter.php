<?php

declare(strict_types=1);

namespace FluencePrototype\Filter;

/**
 * Interface iValidate
 * @package FluencePrototype\Filter
 */
interface iFilter
{

    /**
     * @param bool|float|int|string|null $value
     * @return bool|float|int|string|null
     */
    public function filter(bool|float|int|null|string $value): bool|float|int|null|string;

}