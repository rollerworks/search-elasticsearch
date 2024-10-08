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

namespace Rollerworks\Component\Search\Elasticsearch\Extension\Conversion;

use Rollerworks\Component\Search\Elasticsearch\ChildOrderConversion;

final class DateChildOrderConversion implements ChildOrderConversion
{
    public function convert(string $property, string $script): string
    {
        return \sprintf('%s.millis', $script);
    }
}
