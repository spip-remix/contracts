<?php

declare(strict_types=1);

namespace SpipRemix\Contracts\Exception;

/**
 * Contrat d'interface pour les exceptions de SPIP
 * ou de ses plugins ou composants.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface ExceptionInterface extends \Throwable
{
    /**
     * Instancier une exception et la lancer.
     *
     * Usage:
     *
     * MyException implémente ExceptionInterface
     * et produit le message: Une erreur s'est produite (%s).
     *
     * ```php
     * if ($condition) {
     *     MyException::throw('texte d\'erreur');
     *     // -> Une erreur s'est produite (texte d'erreur).
     * }
     * ```
     *
     * @param string $context liste de valeurs scalaires
     * Toute valeur scalaire (bool, int, float, string) est valide
     * Le contenu, le type et l'ordre des valeurs sera à préciser
     * dans chaque implémentation.
     */
    public static function throw(string ...$context): static;
}
