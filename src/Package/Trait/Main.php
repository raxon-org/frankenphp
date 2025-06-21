<?php
namespace Package\Raxon\Frankenphp\Trait;

use Raxon\App;

use Raxon\Module\Core;
use Raxon\Module\File;

use Raxon\Node\Module\Node;

use Exception;
trait Main {

    /**
     * @throws Exception
     */
    public function frankenphp_install(): void
    {
        Core::interactive();
        $object = $this->object();
        $source = $object->config('project.dir.vendor') . 'raxon/frankenphp/src/Data/frankenphp-linux-x86_64';
        $target = '/usr/local/bin/frankenphp';
        File::copy($source, $target);
        $command = 'chmod +x ' . $target;
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'frankenphp --version';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

