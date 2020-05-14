<?php
declare(strict_types=1);

namespace Dhii\Package\Version;

use Exception;

/**
 * Represents a SemVer-compliant version.
 */
interface VersionInterface
{
    /**
     * Retrieves the string representation of this object.
     *
     * @return string The string representation.
     *
     * @throws Exception If problem retrieving.
     */
    public function __toString();

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
     * @return string The pre-release identifier, e.g. "alpha1".
     *
     * @throws Exception If problem retrieving.
     */
    public function getPreRelease(): string;

    /**
     * Retrieves the version's build metadata.
     *
     * @return string The build metadata.
     *
     * @throws Exception If problem retrieving.
     */
    public function getBuild(): string;
}