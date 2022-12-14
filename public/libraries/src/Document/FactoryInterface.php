<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Document;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Interface defining a factory which can create Document objects
 *
 * @since  4.0.0
 */
interface FactoryInterface
{
    /**
     * Creates a new Document object for the requested format.
     *
     * @param   string  $type        The document type to instantiate
     * @param   array   $attributes  Array of attributes
     *
     * @return  Document
     *
     * @since   4.0.0
     */
    public function createDocument(string $type = 'html', array $attributes = []): Document;

    /**
     * Creates a new renderer object.
     *
     * @param   Document  $document  The Document instance to attach to the renderer
     * @param   string    $type      The renderer type to instantiate
     * @param   string    $docType   The document type the renderer is part of
     *
     * @return  RendererInterface
     *
     * @since   4.0.0
     */
    public function createRenderer(Document $document, string $type, string $docType = ''): RendererInterface;
}
