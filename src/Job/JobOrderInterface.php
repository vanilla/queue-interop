<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop\Job;

/**
 * Job order interface.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface JobOrderInterface extends JobOrderReadOnlyInterface  {

    /**
     * Set the job ID
     *
     * @param string $id
     */
    public function setID($id);

    /**
     * Set the job status
     *
     * @param string $status
     */
    public function setStatus($status);

}
