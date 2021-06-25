<?php

declare(strict_types=1);

namespace FluencePrototype\Filter;

use FluencePrototype\Filesystem\NotAFilterException;

/**
 * Class FilterService
 * @package FluencePrototype\Filter
 */
class FilterService
{

    /** @var iFilter[] */
    private array $filters = [];

    /**
     * @param string $filterClassName
     * @return iFilter
     * @throws NotAFilterException
     */
    public function getFilter(string $filterClassName): iFilter
    {
        if (isset($this->filters[$filterClassName])) {
            return $this->filters[$filterClassName];
        }

        $filter = new $filterClassName();

        if (!$filter instanceof iFilter) {
            throw new NotAFilterException();
        }

        $this->filters[$filterClassName] = $filter;

        return $filter;
    }

    /**
     * @param string $value
     * @param string $filterClassName
     * @return bool|float|int|string|null
     * @throws NotAFilterException
     */
    public function filter(string $value, string $filterClassName): bool|float|int|null|string
    {
        return $this->getFilter($filterClassName)->filter($value);
    }

}