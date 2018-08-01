<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

use Garden\QueueInterop\Job\JobOrderReadOnlyInterface;

/**
 * Scheduler Interface
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface SchedulerInterface {

    /**
     * Add a job to be scheduled
     *
     * @param string $type
     * @param array $args
     * @return JobOrderReadOnlyInterface
     */
    public function addJob($type, $args = []);

}