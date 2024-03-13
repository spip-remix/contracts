<?php

namespace SpipRemix\Contracts;

/**
 * Encodage/Décodage.
 *
 * @template T
 *
 * @author JamesRezo <james@rezo.net>
 */
interface EncoderInterface
{
    /**
     * Encode une valeur en chaîne de carctères.
     *
     * @param T $decoded
     *
     * @return string|null null si la valeur n'est pas encodable.
     */
    public function encode(mixed $decoded): ?string; // Stringable|string $encoded ?

    /**
     * Décode une chaîne de carctères en valeur d'origine.
     *
     * @param string $encoded cast implicite des numériques et des booléens.
     *
     * @return T|null null si la chaîne n'est pas décodable
     */
    public function decode(string $encoded): mixed;
}
