<?php

/**
 * @license MIT
 * @copyright 2016 Tim Gunter
 */

namespace Garden\Queue;

/**
 * Message trait
 *
 * @author Tim Gunter <tim@vanillaforums.com>
 * @package queue-interop
 */
trait MessageTrait {

    /**
     * Message GUID
     * @var string
     */
    protected $id;

    /**
     * Message priority level
     * @var int
     */
    protected $priority;

    /**
     * Message headers
     * @var array
     */
    protected $headers;

    /**
     * Message body
     * @var string
     */
    protected $body;

    /**
     * Message decoded payload
     * @var array
     */
    protected $payload;
}