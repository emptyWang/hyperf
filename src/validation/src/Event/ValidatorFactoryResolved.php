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

namespace Hyperf\Validation\Event;

use Hyperf\Validation\Contract\ValidatorFactoryInterface;

class ValidatorFactoryResolved
{
    /**
     * @var ValidatorFactoryInterface
     */
    public $validatorFactory;

    public function __construct(ValidatorFactoryInterface $validatorFactory)
    {
        $this->validatorFactory = $validatorFactory;
    }
}
