<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Ticket;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ticket = Ticket::factory()->create();
        return [
            //
            'order_id'=> Order::factory()->create()->id,
            'ticket_id'=> $ticket->id,
            'price_per'=>  $ticket->price,
            'total'=> $ticket->price 
        ];
    }
}
