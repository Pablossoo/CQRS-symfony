<?php

namespace App\Tests\Unit\Domain;

use App\domain\exception\BadRoleException;
use App\domain\Role;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class RoleTests extends WebTestCase
{
    public function test_is_occurance_exception_if_we_get_role_another_than_available()
    {
        $role = new Role();
        $this->expectException(BadRoleException::WithTo($role->getRole('ROLE_TEST')));
    }

    public function test_if_get_default_roles_return_array()
    {
        $role = new Role();
        $this->assertIsArray($role->getDefaultRole());
    }
}
