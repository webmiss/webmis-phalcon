<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Acl;

/**
 * Interface for ACL Component aware objects
 */
interface ComponentAwareInterface
{
    /**
     * Returns component name
     */
    public function getComponentName(): string;
}
