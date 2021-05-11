<?php

use Laravel\Lumen\Testing\DatabaseMigrations;

class CreateUserTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateInvalidUser()
    {
        $this->post('/users', [
            'name' => '',
            'email' => 'taylo@yahoo.com',
            'login' => 'taylor.test',
            'password' => 'admin'
        ])->seeJsonEquals([
            'error' => 'O nome do usuário não pode ser vazio.',
        ]);

        $this->post('/users', [
            'name' => 'Taylor',
            'email' => '',
            'login' => 'taylor.test',
            'password' => 'admin'
        ])->seeJsonEquals([
            'error' => 'O nome do usuário não pode ser vazio.',
        ]);
    }
}
