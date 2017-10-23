<?php

declare(strict_types=1);

/*
 * This file is part of the RollerworksSearch package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Component\Search\Elasticsearch;

/**
 * Class QueryConversion.
 */
interface QueryConversion
{
    /**
     * Returns the query converted to a new form if required.
     * If null, no query conversion has taken place, use whatever is proper in the current context.
     *
     * @param string               $propertyName
     * @param mixed                $value
     * @param QueryConversionHints $hints
     *
     * @return array|null
     */
    public function convertQuery(string $propertyName, $value, QueryConversionHints $hints): ?array;
}
