<?php

/**
 * @license MIT
 * @copyright 2016 Tim Gunter
 */

namespace Garden\QueueInterop;

/**
 * Job interface
 *
 * @author Tim Gunter <tim@vanillaforums.com>
 * @package queue-interop
 */
abstract class AbstractMessage implements MessageInterface {

    /**
     * Message GUID
     * @var string
     */
    protected $id;

    /**
     * Message headers
     * @var array
     */
    protected $headers;

    /**
     * Message body
     * @var array
     */
    protected $body;

    /**
     * Message priority level
     * @var int
     */
    protected $priority;

    /**
     *
     * @param int $guid optional. message guid.
     */
    public function __construct($guid = null): MessageInterface {
        if (!is_null($guid)) {
            $this->id = $guid;
        }
    }


    public function getID() {
        return $this->id;
    }


    public function setBody(array $body): MessageInterface {
        $this->body = $body;
        return $this;
    }


    public function getBody() {
        return $this->body;
    }


    public function setHeaders(array $headers) {
        $this->headers = $headers;
    }


    public function getHeaders() {
        return $this->headers;
    }

}