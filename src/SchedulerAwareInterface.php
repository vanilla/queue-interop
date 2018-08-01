<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Scheduler Aware Interface
 *
 * Jobs that implement this interface will have the SchedulerInterface
 * injected by the setter method.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface SchedulerAwareInterface {

    /**
     * Set the scheduler
     *
     * @param SchedulerInterface $scheduler
     */
    public function setScheduler(SchedulerInterface $scheduler);

}
