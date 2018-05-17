<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

use Psr\Log\LoggerInterface;

/**
 * Job Bridge Interface
 *
 * Provides services to an abstract job.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface JobBridgeInterface {

    /**
     * Get the Logger interface
     *
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface;

    /**
     * Get the JobContext interface
     *
     * @return JobContextInterface
     */
    public function getJobContext(): JobContextInterface;
}
