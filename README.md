# PPPR - Prepare PHP Project Production Ready

[![Latest Version](https://img.shields.io/packagist/v/yohaw/pppr.svg)](https://packagist.org/packages/yohaw/pppr)
[![License](https://img.shields.io/github/license/yohatechtop/pppr.svg?cache_bust=1)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/yohaw/pppr.svg)](https://packagist.org/packages/yohaw/pppr)
[![PHP Package CI](https://github.com/yohatechtop/pppr/actions/workflows/main.yml/badge.svg?branch=main)](https://github.com/yohatechtop/pppr/actions/workflows/main.yml)

## Description

`PPPR` is a PHP package that helps you prepare your PHP project for production. It handles tasks such as setting up configuration files, copying `.env` files, and preparing your project structure, making it easier to deploy to a production environment.



# PPPR - Prepare PHP Project Production Ready

`PPPR` is a PHP package that helps you prepare your PHP project for production. It handles tasks such as setting up configuration files, copying `.env` files, and preparing your project structure, making it easier to deploy to a production environment.

## Features

- Automatically prepares your PHP project for production.
- Sets up necessary files like `.env`, `.env.example`, and other configurations.
- Can be easily installed and integrated into any PHP project.

## Installation

You can install `PPPR` via Composer, which is the preferred method of installation.

### 1. Install via Composer

To install the package, run the following command in the root directory of your PHP project:

```bash
composer require yohaw/pppr
```

This will add the `PPPR` package to your `composer.json` and install it into your project.

### 2. Manual Installation

If you prefer, you can also manually add the dependency in your `composer.json` file under the `"require"` section:

```json
"require": {
    "yohaw/pppr": "^1.1"
}
```

Then run:

```bash
composer install
```

## Usage

Once the package is installed, you can use it to prepare your PHP project for production.

### Example: Using `PPPR` to Prepare Your Project

Create a PHP file where you want to trigger the preparation (for example, `prepare.php`):

```php
<?php

require 'vendor/autoload.php';

use PPPR\App;

$project = new App();
$project->prepare();  // Calls the method to prepare your project for production

echo "Your project is now production-ready!";
```

### How It Works

- **Configuration Files**: `PPPR` can generate and copy configuration files, such as `.env`, `.env.example`, and others.
- **File Preparation**: The package ensures that the project structure is set up for production with proper settings.

The example above demonstrates how to use the `PrepareProject` class from your package to execute the preparation process.

## How to Update Your Package

If you update your `PPPR` package, follow these steps:

### 1. Increment the Version

In your `composer.json`, make sure to update the version number according to the changes made. For example:

```json
"version": "1.1.0"
```

### 2. Commit and Tag the Version

Once you've made changes to your package, commit and tag the new version:

```bash
git add .
git commit -m "Update to version 1.1.0 - Added new features"
git tag v1.1.0
git push origin main
git push origin v1.1.0
```

### 3. Push Changes to Packagist

If you're distributing the package via Packagist, ensure that the version tag is detected. Packagist should automatically update, but you can manually check by going to your package page on Packagist.

### 4. Update Dependencies in Projects

Once the version is updated, other projects can use `composer update` to pull in the latest version.

```bash
composer update yohaw/pppr
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Authors

- **Yohannes Zerihun** - [johnpro3269@gmail.com](mailto:johnpro3269@gmail.com)

---

This is a template you can adapt and update as needed. It provides clear installation, usage instructions, and versioning guidelines for your package.
