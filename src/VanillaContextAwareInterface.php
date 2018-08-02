<?php

/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

/**
 * Vanilla context aware interface
 *
 * Jobs that implement this interface will have the VanillaContextInterface
 * injected by the setter method.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface VanillaContextAwareInterface {

    /**
     * Set Vanilla context
     *
     * @param VanillaContextInterface $vanillaContext
     */
    public function setVanillaContext(VanillaContextInterface $vanillaContext);

}
