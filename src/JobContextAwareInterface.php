<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Job context aware interface
 *
 * Jobs that implement this interface will have the JobContextInterface injected
 * by the setter method.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface JobContextAwareInterface {

    public function setJobContext(JobContextInterface $context);

}
