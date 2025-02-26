<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Messenger\MessageHandler\BackendSearch;

use Contao\CoreBundle\Messenger\Message\BackendSearch\DeleteDocumentsMessage;
use Contao\CoreBundle\Messenger\Message\ScopeAwareMessageInterface;
use Contao\CoreBundle\Search\Backend\BackendSearch;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * @experimental
 */
#[AsMessageHandler]
class DeleteDocumentsMessageHandler
{
    public function __construct(private readonly BackendSearch $backendSearch)
    {
    }

    public function __invoke(DeleteDocumentsMessage $message): void
    {
        // Cannot run in a web request.
        if (ScopeAwareMessageInterface::SCOPE_CLI !== $message->getScope()) {
            return;
        }

        $this->backendSearch->deleteDocuments($message->getGroupedDocumentIds(), false);
    }
}
