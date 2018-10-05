<?php

namespace Ning\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new NingInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}