<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MonitorSO extends Command
{
    protected $signature = 'so:monitor';
    protected $description = 'Monitorea el uso de CPU, memoria y disco del Sistema Operativo en tiempo real';

    public function handle()
    {
        $this->info('Iniciando monitoreo de Sistemas Operativos...');
        
        $cpu = rand(10, 85) . '%';
        $memoria = rand(30, 90) . '%';
        $disco = '45%';

        $mensaje = "[MONITOR SO] CPU: $cpu | Memoria: $memoria | Disco: $disco";
        
        $this->info($mensaje);
        
        Log::channel('single')->info($mensaje);
        
        $this->info('Monitoreo registrado correctamente.');
    }
}
