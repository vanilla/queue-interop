<?php

/**
 * @license MIT
 * @copyright 2016 Tim Gunter
 */

namespace Garden\QueueInterop;

/**
 * Message interface
 *
 * @author Tim Gunter <tim@vanillaforums.com>
 * @package queue-interop
 */
interface MessageInterface {

    public function __construct($guid = null);

    public function getID(): string;

    public function setPriority(int $priority): MessageInterface;
    public function getPriority(): int;

    public function setHeaders(array $headers): MessageInterface;
    public function getHeaders(): array;

    public function setBody(array $body): MessageInterface;
    public function getBody(): array;

}