<?php

namespace Dbhurley\Cloudflare\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array load(int $type = \Dbhurley\Cloudflare\CloudflareProxies::IP_VERSION_ANY)
 *
 * @see \Dbhurley\Cloudflare\CloudflareProxies
 */
final class CloudflareProxies extends Facade
{
    /**
     * Get the registered name of the component.
     */
    #[\Override]
    protected static function getFacadeAccessor(): string
    {
        return \Dbhurley\Cloudflare\CloudflareProxies::class;
    }
}
