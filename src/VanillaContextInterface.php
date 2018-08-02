<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Vanilla context interface
 *
 * Provides interfaces to both the configuration and locale objects.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface VanillaContextInterface {


    /**
     * Get site config
     *
     * @return ConfigInterface
     */
    public function getConfig(): ConfigInterface;

    /**
     * Get site locale
     *
     * @return ConfigInterface
     */
    public function getLocale(): ConfigInterface;

}
