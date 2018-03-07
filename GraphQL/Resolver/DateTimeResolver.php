<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace BD\EzPlatformGraphQLBundle\GraphQL\Resolver;

use eZ\Publish\API\Repository\ContentService;
use Overblog\GraphQLBundle\Resolver\TypeResolver;
use eZ\Publish\API\Repository\Values\Content\ContentInfo;

class DateTimeResolver
{
    public function resolvePublishedDateTime(ContentInfo $object)
    {
        return $object->modificationDate->getTimestamp();
    }
    public function resolveModifiedDateTime(ContentInfo $object)
    {
        return $object->publishedDate->getTimestamp();
    }
}
