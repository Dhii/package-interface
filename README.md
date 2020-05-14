# Dhii - Package Interfaces
Interfaces for package-related interop.

## Details
Often, it is necessary to represent a generic package, or some specific kind of package,
like a WordPress plugin or a Drupal extension. In this case, it would be useful to have
an interop interface to represent the package, or a common ancestor of packages. This
package aims to address that need.

The idea is that packages are located somewhere, have a name, and a version.
A version is a SemVer-compliant comparable identifier.
Versions also need to be compared, so as to determine whether a version satisfies
a specific version constraint
