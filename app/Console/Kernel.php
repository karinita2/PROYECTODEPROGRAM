<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Los comandos artisan proporcionados por su aplicación.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Definir el programa de comando de la aplicación
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Registre los comandos basados ​​en el cierre para la aplicación
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
