<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RegistrasiPeserta
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $peserta;

    public $jenislomba;

    /**
     * Create a new event instance.
     *
     */
    public function __construct($peserta, $jenislomba)
    {
        $this->peserta = $peserta;
        $this->jenislomba = $jenislomba;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
