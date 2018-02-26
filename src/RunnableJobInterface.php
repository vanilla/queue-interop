<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license GPLv2
 */

namespace Garden\QueueInterop;

/**
 * Runnable job interface
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface RunnableJobInterface {

    /**
     * Run job payload
     */
    public function run();

    /**
     * Setup job payload for execution
     *
     */
    public function setup();

    /**
     * Clean up after job execution
     *
     */
    public function teardown();

}
