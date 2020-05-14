<?php
declare(strict_types=1);

namespace Dhii\Package\Version;

use Dhii\Util\String\StringableInterface;
use Exception;

/**
 * Represents a SemVer-compliant version.
 */
interface VersionInterface extends StringableInterface
{
    /**
     * Retrieves the version's major number.
     *
     * @return int The major number.
     *
     * @throws Exception If problem retrieving.
     */
    public function getMajor(): int;

    /**
     * Retrieves the version's minor number.
     *
     * @return int The minor number.
     *
     * @throws Exception If problem retrieving.
     */
    public function getMinor(): int;

    /**
     * Retrieves the version's patch number.
     *
     * @return int The patch number.
     *
     * @throws Exception If problem retrieving.
     */
    public function getPatch(): int;

    /**
     * Retrieves the version's pre-release identifier.
     *
     * @return string[] The pre-release identifiers, e.g. "alpha1".
     *
     * @throws Exception If problem retrieving.
     */
    public function getPreRelease(): string;

    /**
     * Retrieves the version's build metadata.
     *
     * @return string[] A series of identifiers.
     *                  Each is a non-empty alphanumeric+hyphen string.
     *
     * @throws Exception If problem retrieving.
     */
    public function getBuild(): string;
}
