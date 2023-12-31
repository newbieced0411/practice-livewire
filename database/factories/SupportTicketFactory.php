<?php

namespace Database\Factories;

use App\Models\SupportTicket;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupportTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = SupportTicket::class;

    public function definition()
    {
        return [
            'question' => $this->faker->paragraph(),
        ];
    }
}
