<?php
/**
 * @copyright 2009-2018 Vanilla Forums Inc.
 * @license MIT
 */

namespace Garden\QueueInterop;

use Garden\Db\Db;

/**
 * Database aware interface
 *
 * Jobs that implement this interface will have the Garden Db object
 * injected by the setter method.
 *
 * @author Eric Vachaviolos <eric.v@vanillaforums.com>
 * @package queue-interop
 */
interface DatabaseAwareInterface {

    /**
     * Set the database
     *
     * @param Db $database
     */
    public function setDatabase(Db $database);

}
