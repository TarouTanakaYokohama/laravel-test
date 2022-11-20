<?php

namespace App\Logging;

use Monolog\Logger;

use Illuminate\Support\Facades\Log;

class LogstashLogger
{
    public function __invoke(array $config)
    {
        $logger = new Logger($config['channel']);

        $server_info =  [
            'address' => config('logging.address'),
            'port' => config('logging.port')
        ];
        // Log::emergency();
        return $logger->pushHandler(new LogstashHandler($server_info, Logger::DEBUG, true));
    }
}
