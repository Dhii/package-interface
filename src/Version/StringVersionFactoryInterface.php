<?php
declare(strict_types=1);

namespace Dhii\Package\Version;

/**
 * Represents a factory that can create a version from a version string.
 */
interface StringVersionFactoryInterface
{
    /**
     * Creates a new version from a version string.
     *
     * @param string $version The SemVer compatible version string.
     *
     * @return VersionInterface The new version.
     */
    public function createVersionFromString(string $version): VersionInterface;
}
