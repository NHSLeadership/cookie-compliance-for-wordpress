# Testing

# Required
* Docker

## Get started: set up environment
Run: `docker run --rm -v $(pwd):/app composer/composer:latest require --dev phpunit/phpunit ^6.0`
This installs Composer dependancies into the current directory

## Running Unit tests
Run: `docker run -v $(pwd):/app --rm phpunit/phpunit:latest --bootstrap ExampleClass.php ExampleTest.php`

`ExampleClass.php` being the class you want to test
`ExampleTest.php` the test class
