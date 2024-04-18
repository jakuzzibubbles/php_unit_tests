# php_unit_tests

# PHPUnit Testing with Composer


## Installation

1. Installing Composer [https://getcomposer.org/download/](https://getcomposer.org/download/).

2. Command to install PHPUnit and its dependencies:

    ```bash
    composer require --dev phpunit/phpunit
    ```

    This command will download PHPUnit and any other required dependencies specified in the `composer.json` file.

3. Generate the autoloader by running:

    ```bash
    composer dump-autoload
    ```

    This will generate the necessary autoload files to load your classes automatically.

## Running Tests

To run the PHPUnit test suite, execute the following command:

```bash
./vendor/bin/phpunit --testdox test
