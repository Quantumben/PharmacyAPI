<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Medication;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = fake()->randomDigitNotZero();

        return [
           'customer_id' => Customer::factory(),
           'medication_id' => Medication::factory(),
           'quantity' => $quantity,
           'total' => $quantity * 10,
        ];
    }
}