<?php

namespace Tests\Feature;

use DB;
use Tests\TestCase;
use Database\Seeders\DniLettersSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DniControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(DniLettersSeeder::class);
    }

    public function test_calculateDniWithValidNumber()
    {
        $response = $this->postJson('/api/calculate-dni', [
            'dniNumber' => 12345678,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'dniNumber' => 12345678,
                     'dniLetter' => 'Z',
                 ]);
    }

    public function test_returns_404_when_dni_letter_not_found()
    {
        DB::table('dni_letters')->truncate();

        $response = $this->postJson('/api/calculate-dni', [
            'dniNumber' => 12345678,
        ]);

        $response->assertStatus(404);
        $response->assertJson([
            'message' => 'No se pudo calcular la letra del DNI',
        ]);
    }

}
