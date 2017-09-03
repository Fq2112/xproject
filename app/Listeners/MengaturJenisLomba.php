<?php

namespace App\Listeners;

use App\Events\RegistrasiPeserta;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Lomba;

class MengaturJenisLomba
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegistrasiPeserta  $event
     * @return void
     */
    public function handle(RegistrasiPeserta $event)
    {
        $peserta = $event->peserta;
        $jenislomba = Lomba::where('kode', $event->jenislomba)->first();

        $peserta->lomba()->attach($jenislomba, [
            'token' => str_random(10),
            'username' => str_random(5) . '@' . $jenislomba->kode,
            'terkonfirmasi' => false
        ]);
    }
}
