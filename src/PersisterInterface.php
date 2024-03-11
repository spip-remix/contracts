<?php

namespace SpipRemix\Contracts;

/**
 * Undocumented interface.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface PeristerInterface
{
    public function quote();

    public function count();

    public function select();

    public function fetch();

    public function insert();

    public function update();

    public function delete();

    public function free();
}
