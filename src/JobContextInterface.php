<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Job context interface
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface JobContextInterface {

    /**
     * Get job ID
     *
     * @return string
     */
    public function getID();

    /**
     * Set job ID
     *
     * @param string $id
     */
    public function setID($id);

    /**
     * Get entry from job payload
     *
     * @param string $name
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($name, $default = null);

    /**
     * Get job payload data
     *
     * @return array
     */
    public function getData();

    /**
     * Set job payload data
     *
     * @param array $data
     */
    public function setData(array $data);

    /**
     * Get job status
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set job status
     *
     * @param string $status
     */
    public function setStatus($status);

}
