<?php

declare(strict_types=1);

namespace SpipRemix\Contracts;

use SpipRemix\Contracts\Exception\ExceptionInterface;

/**
 * Encodage/Décodage de valeurs vers ou depuis une chaîne de caractères.
 *
 * Sérialisation/Normalisation basée sur différents formats selon l'implémentation.
 *
 * @template T
 *
 * @author JamesRezo <james@rezo.net>
 */
interface EncoderInterface
{
    /**
     * Encode une valeur en chaîne de caractères.
     *
     * @param T $decoded
     *
     * @throws ExceptionInterface si l'encodage de la valeur n'est pas possible.
     */
    public function encode(mixed $decoded): string;

    /**
     * Décode une chaîne de caractères en valeur d'origine.
     *
     * @param string $encoded (cast implicite des numériques et des booléens.)
     *
     * @throws ExceptionInterface si le décodage de la chaîne n'est pas possible.
     *
     * @return T
     */
    public function decode(string $encoded): mixed;
}
