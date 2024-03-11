<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

/**
 * Trait pour mise en commun de la gestion des métas.
 *
 * @author JamesRezo <james@rezo.net>
 */
trait MetaTrait
{
    public function __construct(
        /** @var array<string,mixed> $metas */
        private array $metas = []
    ) {
    }

    public function all(): array
    {
        return $this->metas;
    }

    public function get(string $name, mixed $default = null): mixed
    {
        if (array_key_exists($name, $this->metas)) {
            return $this->metas[$name];
        }

        return $default;
    }

    public function set(string $name, mixed $value = null): void
    {
        $this->metas[$name] = $value;
    }

    public function clear(): void
    {
        $this->metas = [];
    }

    public function delete(string $name): void
    {
        unset($this->metas[$name]);
    }

    public function __serialize(): array
    {
        return $this->metas;
    }

    public function __unserialize(array $data): void
    {
        $this->metas = $data;
    }
}
