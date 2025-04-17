<?php

use App\Models\User;
use App\Models\Philosopher;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;


test("philosopher list can be retrieved", function () {
    Sanctum::actingAs(User::factory()->create());

    $response = $this->get("/api/philosopher");

    $response->assertOk();
});


test("philosopher can be added", function () {
    Sanctum::actingAs(User::factory()->create());

    $data = [
        "name" => "Carlito",
        "life" => "2004 - now",
        "school" => "Hogwarts",
        "notes" => "An excellent young wizard in training!"
    ];

    $response = $this->post("/api/philosopher", $data);

    $response->assertOk();

    $response->assertJson([
        "success" => true,
        "data" => $data,
    ]);

});

test("philosopher can be retrieved", function () {
    Sanctum::actingAs(User::factory()->create());

    $data = [
        "name" => "Carlito",
        "life" => "2004 - now",
        "school" => "Hogwarts",
        "notes" => "An excellent young wizard in training!"
    ];

    $philosopher = Philosopher::factory()->create($data);

    $response = $this->get("/api/philosopher/{$philosopher->id}");

    $response->assertOk();

    $response->assertJson([
        "success" => true,
        "data" => $data,
    ]);
});

test("philosopher can be updated", function () {
    Sanctum::actingAs(User::factory()->create());

    $data = [
        "name" => "Carlito",
        "life" => "2004 - now",
        "school" => "Hogwarts",
        "notes" => "An excellent young wizard in training!"
    ];

    $philosopher = Philosopher::factory()->create($data);

    $response = $this->put("/api/philosopher/{$philosopher->id}", ["name" => "James"]);

    $response->assertOk();

    $response->assertJson([
        "success" => true,
        "data" => [
            "name" => "James",
            "life" => "2004 - now",
            "school" => "Hogwarts",
            "notes" => "An excellent young wizard in training!"
        ],
    ]);
});


test("philosopher can be delete", function () {
    Sanctum::actingAs(User::factory()->create());

    $data = [
        "name" => "Carlito",
        "life" => "2004 - now",
        "school" => "Hogwarts",
        "notes" => "An excellent young wizard in training!"
    ];

    $philosopher = Philosopher::factory()->create($data);

    $response = $this->delete("/api/philosopher/{$philosopher->id}");

    $response->assertOk();
});