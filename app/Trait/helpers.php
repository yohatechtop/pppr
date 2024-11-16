<?php 

namespace PPPR\Trait;


trait helpers
{
    public function envExample()
    {
        $envExampleContent = <<<EOL
        # .env.example
        
        APP_ENV=production
        APP_DEBUG=false
        APP_KEY=base64:random_generated_key
        
        DB_CONNECTION=mysql
        DB_HOST=localhost
        DB_PORT=3306
        DB_DATABASE=my_database
        DB_USERNAME=root
        DB_PASSWORD=
        
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        
        LOG_CHANNEL=stack
        
        EOL;

        return $envExampleContent;
    }


    public function _config()
    {
        $configContent = <<<EOL
        <?php
        
        return [
            'app' => [
                'env' => 'production',
                'debug' => false,
                'key' => env('APP_KEY'),
            ],
            'database' => [
                'connection' => 'mysql',
                'host' => env('DB_HOST', 'localhost'),
                'port' => env('DB_PORT', 3306),
                'database' => env('DB_DATABASE'),
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
            ],
            'mail' => [
                'mailer' => 'smtp',
                'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
                'port' => env('MAIL_PORT', 2525),
                'username' => env('MAIL_USERNAME'),
                'password' => env('MAIL_PASSWORD'),
                'encryption' => env('MAIL_ENCRYPTION', null),
            ],
            'logging' => [
                'channel' => env('LOG_CHANNEL', 'stack'),
            ]
        ];
        EOL;


        return $configContent;
    }
}