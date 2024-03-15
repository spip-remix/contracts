<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerInterface;
use SpipRemix\Contracts\Exception\ExceptionInterface;

/**
 * Gestion des métas de SPIP.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface MetaManagerInterface extends LoggerAwareInterface
{
    /**
     * Démarrage du MetaManager.
     *
     * @throws ExceptionInterface Si le démarrage du MetaManager n'est pas possible.
     */
    public function boot(): void;

    /**
     * {@internal Pour transmettre le logger associé éventuel à un autre objet
     * (ex: Décorateur).}
     */
    public function getLogger(): ?LoggerInterface;

    /**
     * Récupérer l'ensemble des métas.
     *
     * @return list<array{name:non-empty-string,value:mixed,importable:bool}>
     */
    public function all(): array;

    /**
     * Récupérer la valeur pour une méta donnée,
     * avec une valeur par défaut au besoin.
     */
    public function get(string $name, mixed $default = null): mixed;

    /**
     * Affecter une valeur à une méta donnée.
     */
    public function set(string $name, mixed $value = null, bool $importable = true): void;

    /**
     * Effacer toutes les métas.
     */
    public function clear(): void;

    /**
     * Effacer la méta donnée.
     */
    public function unset(string $name): void;
}
