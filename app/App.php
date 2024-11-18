<?php

namespace PPPR;

use PPPR\Trait\helpers;
use Dotenv\Dotenv;

class App
{

    use helpers;

    private $envPath;
    private $configPath;

    /**
     * Constructor to initialize paths
     *
     * @param string $envPath The path to the .env.example file
     * @param string $configPath The path to the config.php file
     */
    public function __construct($envPath = '.env.example', $configPath = 'config.php')
    {
        $this->envPath = $envPath;
        $this->configPath = $configPath;
    }

    /**   
     * Generate or update the .env.example file
     */
    public function generateEnvExample()
    {
      
        // Write the content to the .env.example file
        file_put_contents($this->envPath, $this->envExample());
    }

    /**
     * Generate or update the config.php file for production
     */
    public function generateConfigFile()
    {
       
        // Write the config content to config.php
        file_put_contents($this->configPath, $this->_config());
    }

    /**
     * Update environment variables in .env file if exists
     */
    public function updateEnv()
    {
        if (!file_exists('.env')) {
            throw new \Exception("No .env file found to update.");
        }

        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $updatedContent = '';

        // Example of updating specific variables
        $updatedContent .= "APP_KEY=" . getenv('APP_KEY') . "\n";
        $updatedContent .= "DB_PASSWORD=" . getenv('DB_PASSWORD') . "\n";

        // Add more as needed...

        file_put_contents('.env', $updatedContent);
    }

    /**
     * Prepare the project for production
     */
    public function prepare()
    {
        try {
            echo "Generating or updating .env.example...\n";
            $this->generateEnvExample();

            echo "Generating or updating config.php...\n";
            $this->generateConfigFile();

            echo "Updating .env file...\n";
            $this->updateEnv();

            echo "Project is now configured for production!\n";
        } catch (\Exception $e) {
            echo "Error preparing project: " . $e->getMessage() . "\n";
        }
    }
}
