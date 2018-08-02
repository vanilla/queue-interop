<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Config Interface
 *
 * @author Tim Gunter <tim@vanillaforums.com>
 * @package queue-interop
 */
interface ConfigInterface {

    /**
     * Get a config setting
     *
     * @param string $setting
     * @param mixed $default
     * @return mixed
     */
    public function get($setting, $default = null);

    /**
     * Set a config setting
     *
     * @param string $setting
     * @param mixed $value
     */
    public function set($setting, $value);

    /**
     * Delete a key from the config
     *
     * @param string $setting
     */
    public function remove($setting): bool;

    /**
     * Dump all settings from config
     *
     * @return array
     */
    public function dump(): array;

    /**
     * Save changes
     *
     * @param bool $force
     */
    public function save($force = false);

}
