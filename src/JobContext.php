<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Job context
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
class JobContext implements JobContextInterface {

    /**
     * Job ID
     *
     * @var string
     */
    private $id;

    /**
     * Job status
     *
     * @var string
     */
    private $status;

    /**
     * Job payload data
     *
     * @var array
     */
    private $data = [];

    /**
     * Set job id
     *
     * @param string $id
     */
    public function setID($id) {
        $this->id = $id;
    }

    /**
     * Get job ID
     *
     * @return string
     */
    public function getID(): string {
        return $this->id;
    }

    /**
     * Get job status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set job status
     *
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * Get job payload data
     *
     * @return array
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Set job payload data
     *
     * @param array $data
     */
    public function setData(array $data) {
        $this->data = $data;
    }

    /**
     * Get entry from job payload
     *
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($name, $default = null) {
        return $this->data[$name] ?? $default;
    }

}
