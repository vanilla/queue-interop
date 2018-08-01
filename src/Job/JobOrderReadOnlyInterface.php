<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop\Job;

/**
 * Job order read-only interface.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface JobOrderReadOnlyInterface {

    /**
     * Get the job class type
     *
     * @return string The job class type
     */
    public function getType();

    /**
     * Get the job arguments
     *
     * @return array The job arguments
     */
    public function getArgs();

    /**
     * Get the job ID
     *
     * @return string The job ID
     */
    public function getID();


    /**
     * Get the job status
     *
     * @return string The job status
     */
    public function getStatus();

}
