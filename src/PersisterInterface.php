<?php

namespace SpipRemix\Contracts;

/**
 * Undocumented interface.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface PersisterInterface
{
    public function quote(): void;

    public function count(): void;

    public function select(): void;

    public function fetch(): void;

    public function insert(): void;

    public function update(): void;

    public function delete(): void;

    public function free(): void;
}
