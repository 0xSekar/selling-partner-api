<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Authentication\AccessTokenAuthenticator;
use SellingPartnerApi\Authentication\InMemoryTokenCache;
use SellingPartnerApi\Contracts\TokenCache;

class InMemoryTokenCacheTest extends TestCase
{
    private TokenCache $cache;

    protected function setup(): void
    {
        $this->cache = new InMemoryTokenCache;
    }

    public function test_stores_token(): void
    {
        $token = new AccessTokenAuthenticator('access-token', expiresAt: new DateTimeImmutable('+1 hour'));
        $this->cache->set('token-1', $token);

        $fetched = $this->cache->get('token-1');
        $this->assertSame($token, $fetched);
    }

    public function test_expires_stored_token(): void
    {
        $token = new AccessTokenAuthenticator('access-token', expiresAt: new DateTimeImmutable('-1 hour'));
        $this->cache->set('token-1', $token);

        $fetched = $this->cache->get('token-1');
        $this->assertFalse($fetched);
    }

    public function test_deletes_key(): void
    {
        $this->cache->set('token-1', new AccessTokenAuthenticator('access-token', expiresAt: new DateTimeImmutable('+1 hour')));
        $this->cache->forget('token-1');
        $this->assertFalse($this->cache->get('token-1'));
    }

    public function test_clears_cache(): void
    {
        $this->cache->set('token-1', new AccessTokenAuthenticator('access-token-1', expiresAt: new DateTimeImmutable('+1 hour')));
        $this->cache->set('token-2', new AccessTokenAuthenticator('access-token-2', expiresAt: new DateTimeImmutable('+2 hours')));
        $this->cache->clear();
        $this->assertFalse($this->cache->get('token-1'));
        $this->assertFalse($this->cache->get('token-2'));
    }
}
