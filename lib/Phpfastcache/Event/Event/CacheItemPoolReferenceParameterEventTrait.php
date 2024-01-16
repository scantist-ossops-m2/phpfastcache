<?php

/**
 *
 * This file is part of Phpfastcache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt and LICENCE files.
 *
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 * @author Contributors  https://github.com/PHPSocialNetwork/phpfastcache/graphs/contributors
 */

declare(strict_types=1);

namespace Phpfastcache\Event\Event;

use Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface;
use Phpfastcache\Event\EventReferenceParameter;

/**
 * @suppressWarnings(PHPMD.LongClassName)
 */
trait CacheItemPoolReferenceParameterEventTrait
{
    public function __construct(protected ExtendedCacheItemPoolInterface $itemPool, protected EventReferenceParameter $eventReferenceParameter)
    {
    }

    public function getEventReferenceParameter(): EventReferenceParameter
    {
        return $this->eventReferenceParameter;
    }
}
