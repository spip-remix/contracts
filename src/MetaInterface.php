<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

/**
 * Gestion des métas de SPIP.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface MetaInterface
{
    /**
     * Récupérer l'ensemble des métas.
     *
     * @return array<string,mixed>
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
    public function set(string $name, mixed $value = null): void;

    /**
     * Effacer toutes les métas.
     */
    public function clear(): void;

    /**
     * Effacer la méta donnée.
     */
    public function unset(string $name): void;
}
