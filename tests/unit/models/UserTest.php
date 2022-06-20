<?php

namespace tests\models;

use app\models\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        $this->assertInstanceOf(User::class, $user = User::findIdentity(100));
        $this->assertEquals('admin', $user->username);
        $this->assertEquals(100, $user->getId());

        $this->assertNull(User::findIdentity(999));
    }

    public function testFindUserByAccessToken()
    {
        $this->assertInstanceOf(User::class, $user = User::findIdentityByAccessToken('100-token'));
        $this->assertEquals('admin', $user->username);

        $this->assertNull(User::findIdentityByAccessToken('non-existing'));
    }

    public function testFindUserByUsername()
    {
        $this->assertInstanceOf(User::class, User::findByUsername('admin'));
        $this->assertNull(User::findByUsername('not-admin'));
    }

    /**
     * @depends testFindUserByUsername
     */
    public function testValidateUser()
    {
        $user = User::findByUsername('admin');
        $this->assertTrue($user->validateAuthKey('test100key'));
        $this->assertFalse($user->validateAuthKey('test102key'));

        $this->assertTrue($user->validatePassword('admin'));
        $this->assertFalse($user->validatePassword('123456'));
    }
}
