<?php

declare(strict_types=1);

namespace Core\Shared\Domain;

use Exception;

/**
 * This class will throw an exception when trying to add an existing element,
 * as it has already been created.
 */
abstract class DomainException extends Exception {}
