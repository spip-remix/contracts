<?php

declare(strict_types=1);

namespace SpipRemix\Contracts\Exception;

/**
 * Contrat d'interface pour les exceptions de SPIP
 * ou de ses plugins/composants.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface ExceptionInterface extends \Throwable
{
    /**
     * Instancie une exception et la lance.
     *
     * @param string $context liste de valeurs scalaires (null, bool, int, float, string)
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
     * MyException implémente ExceptionInterface
     * et produit un message "Une erreur s\'est produite avec le message "%s".
     *
     * ```php
     * if ($condition) {
     *     MyException::throw('texte d\'erreur'); // 'Une erreur s\'est produite avec le message "texte d\'erreur".'
     * }
     * ```
     */
    public static function throw(string ...$context): static;
}
