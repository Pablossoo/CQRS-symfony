<?php


namespace App\Tests\user\domain;


use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 * @author Paweł Łukowski <pawell.lukowski@gmail.com>
 */
class TestUserUUID extends TestCase
{
    public function testGenerateUUID()
    {
        $this->assertNotEmpty(Uuid::uuid5(Uuid::NAMESPACE_DNS,'user'));
        $this->assertNotEmpty(Uuid::uuid5(Uuid::NAMESPACE_DNS,'user1'));
        $this->assertNotEmpty(Uuid::uuid5(Uuid::NAMESPACE_DNS,'user2'));
        $this->assertNotEmpty(Uuid::uuid5(Uuid::NAMESPACE_DNS,'user3'));
        $this->assertNotEmpty(Uuid::uuid5(Uuid::NAMESPACE_DNS,'user4'));
    }
}