<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @return void
     */
    public function test_user_can_be_created()
    {
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();
        $response = $this->post('api/register', [
            'name' => 'John Doe',
            'last_name' => 'John Doe',
            'email' => 'mail1@mail.com',
            'password' => 'password',
            'phone' => '123456789',
            'department_id' => 1,
            'address' => '123 Main Street',
        ]);
        $response->assertOk();
    }

    /**
     * @return void
     */
    /** @test */
    public function list_of_users_can_be_retrieved(): void
    {
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $response = $this->get('api/users/list/?departmentId=5&perPage=10');
        $response->assertOk();
    }

    public function test_user_can_be_retrieved_by_id()
    {
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();


        $user = User::factory()->create([
            'name' => 'John Doe',
            'last_name' => 'John Doe',
            'email' => 'mail2@mail.com',
            'password' => 'password',
            'phone' => '123456789',
            'department_id' => 1,
            'address' => '123 Main Street',
        ]);


        $response = $this->get('api/users/' . $user->id);

        $response->assertOk();

        $response->assertJson([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'address' => $user->address,
        ]);
    }

    /** test **/
    public function test_user_can_be_updated()
    {
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'last_name' => 'John Doe',
            'email' => 'mail4@mail.com',
            'password' => 'password',
            'phone' => '123456789',
            'department_id' => 1,
            'address' => '123 Main Street',
        ]);

        $response = $this->put('api/users/' . $user->id, [
            'name' => 'John Does',
            'email' => 'mail4@mail.com',
            'address' => '122 Main Street',
            'phone' => '123456789',
            'department_id' => 8,
            'last_name' => 'John Doesss'
        ]);
        $response->assertOk();

        $user->refresh();

        $this->assertEquals('mail4@mail.com', $user->email);
    }

    /** test **/
    public function test_user_can_login()
    {
        $this->withoutExceptionHandling();
        $this->withoutMiddleware();


        $user = User::factory()->create([
            'name' => 'John Doe',
            'last_name' => 'John Doe',
            'email' => 'mail28@mail.com',
            'password' => 'password',
            'phone' => '123456789',
            'department_id' => 1,
            'address' => '123 Main Street',
        ]);

        $response = $this->post('api/login', [
            'email' => 'mail28@mail.com',
            'password' => 'password',
        ]);

        $response->assertOk();

        $this->assertAuthenticatedAs($user);
    }

}
