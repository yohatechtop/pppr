<?php

use PPPR\App;

// Helper functions will be here

if (!function_exists('run')) {
    /**
     * Run the application by loading environment and configuration files.
     * 
     * @param string|null $envex   Path to the environment example file (default: '.env.example').
     * @param string|null $config  Path to the configuration file (default: 'config.php').
     * @return void
     */
    function run(?string $envex = '.env.example', ?string $config = 'config.php'): void
    {
        // Load the App from the PPPR namespace and prepare for production
        $app = new App($envex, $config);
        $app->prepare();
    }
}

if (!function_exists('getRoot')) {
    /**
     * Dynamically resolve the root directory of the project.
     * 
     * This function calculates the absolute path of the project root 
     * no matter where it's called from within the project folder.
     * 
     * @param int $levelsUp  Number of levels to move up from the current directory (default: 1).
     * @return string         Absolute path to the project root directory.
     */
    function getRoot(int $levelsUp = 1): string
    {
        return dirname(__DIR__, $levelsUp);
    }
}


