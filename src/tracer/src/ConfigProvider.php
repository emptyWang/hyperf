<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Tracer;

use GuzzleHttp\Client;
use OpenTracing\Tracer;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Tracer::class => TracerFactory::class,
                SwitchManager::class => SwitchManagerFactory::class,
                Client::class => Client::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for tracer.',
                    'source' => __DIR__ . '/../publish/opentracing.php',
                    'destination' => BASE_PATH . '/config/autoload/opentracing.php',
                ],
            ],
        ];
    }
}
