<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated implements ShouldBroadcast
{

    //define payload here
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order_name;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($order_name)
    {
        $this->order_name = $order_name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('orders');
        // return new PrivateChannel('orders');
    }
}
