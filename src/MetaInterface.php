<?php

namespace SpipRemix\Contracts;

/**
 * Undocumented interface.
 *
 * @author JamesRezo <james@rezo.net>
 */
interface MetaInterface
{
    /**
     * Undocumented function.
     *
     * @param string $meta
     * @param mixed $default
     * @return mixed
     */
    public function read(string $meta, mixed $default = null): mixed;

    /**
     * Undocumented function.
     *
     * @param string $meta
     * @param mixed $value
     * @return void
     */
    public function write(string $meta, mixed $value = null): void;

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function truncate(): void;

    /**
     * Undocumented function.
     *
     * @param string $meta
     * @return void
     */
    public function delete(string $meta): void;
}
