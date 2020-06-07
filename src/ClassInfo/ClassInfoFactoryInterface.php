<?php

declare(strict_types=1);

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\Documenter\ClassInfo;

interface ClassInfoFactoryInterface
{
    public function getIterator(array $paths, array $whitelist): \Generator;

    public function createForClass(string $class): ClassInfoInterface;
}
