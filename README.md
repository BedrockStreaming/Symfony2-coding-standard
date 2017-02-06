# Symfony2 PHP CodeSniffer Coding Standard

[![Latest Stable Version](https://poser.pugx.org/m6web/symfony2-coding-standard/v/stable)](https://packagist.org/packages/m6web/symfony2-coding-standard)
[![Total Downloads](https://poser.pugx.org/m6web/symfony2-coding-standard/downloads)](https://packagist.org/packages/m6web/symfony2-coding-standard)

A code standard to check against the [Symfony coding standards](http://symfony.com/doc/current/contributing/code/standards.html), forked from [opensky/Symfony2-coding-standard](https://github.com/opensky/Symfony2-coding-standard) to allow installation with composer.

The reason of the fork is to use this PHP CodeSniffer coding standard with [M6Web/Coke](https://github.com/M6Web/Coke). More details [on our tech blog](http://tech.m6web.fr/verifier-la-coherence-du-code-d-un-projet-symfony2-avec-coke/) (in french).

We also added to this project our own standard for our Symfony2 developments entitled `M6Web_Symfony2`.

## Installation

1. [Install composer](https://getcomposer.org/download/)
2. Create a composer.json file which contains:

    ```json
    {
        "require-dev": {
            "m6web/coke": "~2.1",
            "m6web/Symfony2-coding-standard": "~3.1"
        }
    }
    ```

3. Install dev dependencies

    ```shell
    composer update --dev
    ```

4. Create a `.coke` file a the root of the project who contain: 

    ```shell
    standard-path=vendor/m6web/symfony2-coding-standard/Symfony2
    ```

    or if you want to use our standard:

    ```shell
    standard-path=vendor/m6web/symfony2-coding-standard/M6Web_Symfony2
    ```

5. Enjoy

    ```shell
    ./vendor/bin/coke
    ```

## Credits

Developped by [M6Web](http://tech.m6web.fr/), cloned from [lapistano/Symfony2-coding-standard](https://github.com/lapistano/Symfony2-coding-standard).
The PHP_CodeSniffer 2.0+ Symfony2 standard is very broadly inspired from [escapestudios/Symfony2-coding-standard](https://github.com/escapestudios/Symfony2-coding-standard)

## License

This project is licensed under the [MIT license](LICENSE).

[![License](https://poser.pugx.org/m6web/symfony2-coding-standard/license)](https://packagist.org/packages/m6web/symfony2-coding-standard)
