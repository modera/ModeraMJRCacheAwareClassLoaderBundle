<?php

namespace Modera\MJRCacheAwareClassLoaderBundle\Contributions;

use Modera\ExpanderBundle\Ext\ContributorInterface;

/**
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2014 Modera Foundation
 */
class RoutingResourcesProvider implements ContributorInterface
{
    public function getItems(): array
    {
        return [
            '@ModeraMJRCacheAwareClassLoaderBundle/Resources/config/routing.yml',
        ];
    }
}
