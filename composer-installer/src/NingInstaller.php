<?php

namespace Ning\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class NingInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'data/templates/'.$package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ning-library' === $packageType;
    }
}