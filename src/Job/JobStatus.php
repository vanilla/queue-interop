<?php

/**
 * @license MIT
 * @copyright 2018 Tim Gunter
 */

namespace Garden\QueueInterop\Job;

/**
 * Job Status
 *
 * @author Tim Gunter <tim@vanillaforums.com>
 * @package queue-interop
 * @version 1.0
 */
class JobStatus {

    const RECEIVED = 'received';
    const INPROGRESS = 'inprogress';
    const RETRY = 'retry';
    const COMPLETE = 'complete';

    const INVALID = 'invalid';
    const FAILED = 'failed';
    const MISMATCH = 'mismatch';
    const ABANDONED = 'abandoned';
    const ERROR = 'error';

}