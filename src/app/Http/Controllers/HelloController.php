<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Elasticsearch\ClientBuilder;
use Illuminate\Support\Facades\Log;
use Monolog\Formatter\LogstashFormatter;
use Monolog\Handler\SocketHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class HelloController extends Controller
{
    public function index()
    {
        // $hosts = [
        //     'http://elasticsearch:9200'
        // ];

        // $client = ClientBuilder::create()
        //     ->setHosts($hosts)
        //     ->build();

        // $params = [
        //     'index' => 'test100',
        // ];

        // $response = $client->search($params);
        // dd($response);


        // $params = [
        //     'index' => 'test1',
        //     'body'  => [
        //         'userAgent' => 'aaa',
        //         'timestamp' => 'dd',
        //     ]
        // ];
        // $response = $client->index($params);

        // $handler = new SocketHandler("udp://elasticsearch:9200");

        // $handler = new SocketHandler("udp://{$config['host']}:{$config['port']}");
        // $handler->setFormatter(new LogstashFormatter(config('app.name')));
        // return new Logger('logstash.main', [$handler]);
        // Log::emergency('ログサンプル', ['memo1' => 'sample1', 'memo2' => 'sample1']);

        // $logstash = [
        //     'driver' => 'custom',
        //     'via'    => \App\LogstashLogger::class,
        //     'host'   => env('LOGSTASH_HOST', '127.0.0.1'),
        //     'port'   => env('LOGSTASH_PORT', 4718),
        // ];

        // $handler = new SocketHandler("udp://elastic:{50000");
        // $handler->setFormatter(new LogstashFormatter(config('app.name')));

        // Log::channel('logstash')->debug('Logging to logstash');
        // Log::channel('logstash')->info('aaa');

        \Log::channel('logstash')->info("HELLO");
        // 
        // Log::channel("logstash")->info([
        //     'user' => '1',
        //     'test' => '1112'
        // ]);
        // dd($logstash);
        return view('index');
    }
}
