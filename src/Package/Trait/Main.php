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
//        $command = 'curl -fsSL https://deno.land/install.sh | sh';
//        exec($command, $output);
//        echo implode(PHP_EOL, $output) . PHP_EOL;
        $object = $this->object();
        $command = 'app zip extract -source=' . $object->config('project.dir.vendor') . 'raxon/deno/src/Data/deno.zip' . ' -target=/usr/local/bin/ -patch';
        echo $command . PHP_EOL;
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'chmod +x /usr/local/bin/deno';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
//        $command = 'cp ~/.deno/bin/deno /usr/local/bin/deno';
//        exec($command, $output);
//        echo implode(PHP_EOL, $output) . PHP_EOL;
        $command = 'deno --version';
        exec($command, $output);
        echo implode(PHP_EOL, $output) . PHP_EOL;
    }
}

