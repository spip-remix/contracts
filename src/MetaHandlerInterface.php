<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

use SpipRemix\Contracts\Exception\ExceptionInterface;

/**
 * Gestion des métas de SPIP.
 *
 * @template T of Meta
 *
 * @author JamesRezo <james@rezo.net>
 */
interface MetaHandlerInterface
{
    /**
     * Instancier un gestionnaire en lui affectant une liste de métas.
     *
     * @param list<Meta> $metas
     */
    public static function with(array $metas = []): static;

    /**
     * Démarrage du gestionnaire.
     *
     * @throws ExceptionInterface si le démarrage du gestionnaire n'est pas possible
     */
    public function boot(): void;

    /**
     * Récupérer la date de dernière mise à jour
     * de la plus récentes des métas d'une liste,
     * sous la forme d'un timestamp.
     *
     * @return null|positive-int null si le gestionnaire ne peut pas fournir de date
     */
    public function lastModified(): ?int;

    /**
     * Récupérer l'ensemble des métas.
     *
     * @return list<Meta>
     */
    public function all(): array;

    /**
     * Lire la valeur d'une méta donnée,
     * avec une valeur par défaut au besoin.
     */
    public function read(string $name, mixed $default = null): mixed;

    /**
     * Écrire une valeur pour créer ou mettre à jour une méta donnée.
     *
     * @return bool false si l'écriture n'est pas possible
     */
    public function write(string $name, mixed $value, bool $importable = true): bool;

    /**
     * Vider toutes les métas.
     */
    public function clean(): void;

    /**
     * Effacer une méta donnée.
     */
    public function erase(string $name): void;
}
