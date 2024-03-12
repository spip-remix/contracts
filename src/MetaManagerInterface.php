<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

/**
 * Gestion des métas de SPIP.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface MetaManagerInterface
{
    /**
     * Récupérer l'ensemble des métas.
     *
     * @return array<array{name:string,value:mixed,importable:bool}>
     */
    public function all(): array;

    /**
     * Récupérer la valeur méta pour une clé donnée,
     * avec une valeur par défaut au besoin.
     */
    public function get(string $name, mixed $default = null): mixed;

    /**
     * Affecter une valeur à une clé donnée.
     */
    public function set(string $name, mixed $value = null, bool $importable = false): void;

    /**
     * Effacer toutes les métas.
     */
    public function clear(): void;

    /**
     * Effacer la méta donnée.
     */
    public function unset(string $name): void;
}
