<?php

return [
    'name' => "JuneSwoole",
    'server' => [
        [
            'host' => '0.0.0.0',
            'port' => 9501,
            'server_type' => JUNESWOOLE_WEB_SERVER, //JUNESWOOLE_SERVER,JUNESWOOLE_WEB_SERVER,JUNESWOOLE_WEBSOCKET_SERVER,JUNESWOOLE_REDIS_SERVER
            'mode' => SWOOLE_PROCESS,
            'sock_type' => SWOOLE_SOCK_TCP,
            'config' => [
                'worker_num' => 8,
                'task_worker_num' => 8,
                'reload_async' => true,
                'task_enable_coroutine' => true,
                'max_wait_time' => 3
            ]
        ]
    ],
    'log' => [
        'file' => [
            // 日志记录方式
            'type'         => 'File',
            // 日志保存目录
            'path'         => null,
            // 日志级别
            'level'        => LOG_LEVEL_DEBUG,
        ],
    ],
    'temp_path' => null
];
