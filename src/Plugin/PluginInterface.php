<?php
declare(strict_types=1);

namespace Inpsyde\Idealo\WooCommerce\Core\Plugin;

use Exception;
use Dhii\Package\PackageInterface;

interface PluginInterface extends PackageInterface
{
    /**
     * Retrieves the plugin basename.
     *
     * @return string The path to the plugin's main file, relative to the plugins directory.
     *
     * @throws Exception If problem retrieving.
     */
    public function getBaseName(): string;

    /**
     * Retrieves the plugin title.
     *
     * @return string The plugin title.
     *
     * @throws Exception If problem retrieving.
     */
    public function getTitle(): string;

    /**
     * @return string The plugin text domain. Slug format.
     */
    public function getTextDomain(): string;
}
