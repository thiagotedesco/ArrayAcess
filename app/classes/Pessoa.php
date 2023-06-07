<?php

namespace Tedesco\ArrayAccess\classes;

use ArrayAccess;

class Pessoa implements ArrayAccess
{
    private array $dados = [];

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->dados[$offset]);
    }

    public function offsetGet(mixed $offset): array|null
    {
        return $this->dados[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->dados[] = $value;
        } else {
            $this->dados[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->dados[$offset]);
    }
}