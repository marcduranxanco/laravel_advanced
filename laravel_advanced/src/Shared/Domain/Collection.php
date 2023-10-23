<?php

declare(strict_types=1);

namespace Core\Shared\Domain;

/**
 * Esta clase abstracte implementa la interface e implementa el método all
 * que devuelve un array con los $items de la clase
 */
abstract class Collection implements CollectionInterface
{
    public function __construct(private array $items = []) {}

    /**
     * Obtiene los elementos de db (por ejemplo cursos) y utilizar la colección
     * para mapearlos y devolver una respuesta del tipo de los elementos (cursos)
     */
    public function all(): array {
        return $this->items;
    }
}
