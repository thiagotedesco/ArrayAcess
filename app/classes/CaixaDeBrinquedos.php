<?php

namespace Tedesco\ArrayAccess\classes;

use ArrayAccess;

class CaixaDeBrinquedos implements ArrayAccess
{

    private array $brinquedos = [];

    public function offsetExists($offset): bool
    {
        return isset($this->brinquedos[$offset]);
    }

    public function offsetGet($offset): array|null
    {
        return $this->brinquedos[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->brinquedos[] = $value;
        } else {
            $this->brinquedos[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->brinquedos[$offset]);
    }
}