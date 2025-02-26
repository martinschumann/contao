<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Search\Backend\Provider;

use Contao\CoreBundle\Search\Backend\Document;
use Contao\CoreBundle\Search\Backend\Hit;
use Contao\CoreBundle\Search\Backend\ReindexConfig;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * @experimental
 */
interface ProviderInterface
{
    /**
     * @return iterable<Document>
     */
    public function updateIndex(ReindexConfig $config): iterable;

    public function convertDocumentToHit(Document $document): Hit|null;

    public function supportsType(string $type): bool;

    public function isDocumentGranted(TokenInterface $token, Document $document): bool;
}
