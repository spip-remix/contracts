<?php

declare(strict_types=1);

namespace SpipRemix\Contracts\Exception;

/**
 * Contrat d'interface pour les exceptions SPIP.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface ExceptionInterface extends \Throwable
{
    /**
     * Instancie une exception à lancer.
     *
     * @param array<int|float|string> $context liste de valeurs scalaires (int, float, string)
     * à préciser dans chaque implémentation.
     *
     * Exemple:
     *
     * [
     *      $string_variable,
     *      'une circonstance',
     *      15,
     *      0.5,
     *      ...
     * ]
     *
     * Usage:
     *
     * ```php
     * if ($condition) {
     *     throw MyException::with('texte d\'erreur'); // 'Une erreur s\'est produite avec le message "texte d\'erreur".'
     * }
     * ```
     */
    public static function with(array ...$context): static;
}
