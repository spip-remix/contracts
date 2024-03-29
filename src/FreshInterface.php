<?php

declare(strict_types=1);

namespace SpipRemix\Component\Serializer;

/**
 * Gestion du cache d'un encodage.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface FreshInterface
{
    /**
     * Renvoyer le cache s'il est encore frais.
     *
     * @param int $now le timestamp de l'instant présent
     * @param int $ttl durée de vie du cache
     *
     * @return mixed null si le cache est invalidé
     */
    public function fresh(int $now, int $ttl): mixed;

    /**
     * Rafraichir le cache avec des nouvelles données.
     *
     * @param mixed $data les nouvelles données à mettre en cache.
     *
     * @return bool true si la mise en cache est s'est bien passée.
     */
    public function refresh(mixed $data): bool;
}
