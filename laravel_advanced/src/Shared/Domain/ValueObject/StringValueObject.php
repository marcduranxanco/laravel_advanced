<?php

declare(strict_types=1);

namespace Core\Shared\Domain\ValueObjects;

/**
 * This class allows to define immutable values, wich will be used by UUID (generated independently of the db)
 * also, other classes could use this class to define their inmutable strings.
 */
abstract class StringValueObject
{
    public function __construct(protected string $value) {}

    public function value(): string {
        return $this->value;
    }
}
