<?php

namespace SpipRemix\Contracts;

/**
 * Undocumented interface.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface DbalInterface
{
    public function createOrUpdate($table, array $data);

    public function drop(string $table);
}
