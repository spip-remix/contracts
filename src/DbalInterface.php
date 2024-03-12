<?php

namespace SpipRemix\Contracts;

/**
 * Undocumented interface.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface DbalInterface
{
    /**
     * @param array<string,mixed> $data
     */
    public function createOrUpdate(string $table, array $data): void;

    public function drop(string $table): void;
}
