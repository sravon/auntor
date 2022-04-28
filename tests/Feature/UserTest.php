<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication(){
        $user1 = User::make([
            'name' => 'md rafat',
            'email' => 'tuli@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'mre erafat',
            'email' => 'ilia@gmail.com'
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }

}
