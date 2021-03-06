<?php

/*
 * This file is part of the Drift Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Drift\PHPUnit\Tests\Service;

use function React\Promise\resolve;
use React\Promise\PromiseInterface;

/**
 * Class Service.
 */
class Service
{
    /**
     * @return PromiseInterface
     */
    public function getAValue(): PromiseInterface
    {
        return resolve()
            ->then(function () {
                return 'a value';
            });
    }
}
