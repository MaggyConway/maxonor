<?php

$application = new Symfony\Component\Console\Application();

$path = __DIR__ . '/../lib/' ;

/**
 * Get dinamic files
 */
$files = array_merge(
    glob( $path."Commands/*.php" ?: [])
);

/**
 * Instance classes
 */
$commands = array_map(function ($file) use ($path) {
    include $path;
    $pathClass = str_replace([$path, '.php'], '', $file);
    $class = "Sntinvest\\Market\\".str_replace('/', '\\', $pathClass);
    return new $class;
}, $files);


/**
 * Add commands 
 */
foreach ($commands as $command)
{
    $application->add($command);
}

return $application;
