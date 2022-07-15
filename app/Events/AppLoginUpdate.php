<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AppLoginUpdate
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   public $applicant;

    public function __construct($applicant)
    {
        $this->applicant = $applicant;
    }


    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
