Lumen Testing
==========
![php-badge](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg)
[![packagist-badge](https://img.shields.io/packagist/v/albertcht/lumen-testing.svg)](https://packagist.org/packages/albertcht/lumen-testing)
[![Total Downloads](https://poser.pugx.org/albertcht/lumen-testing/downloads)](https://packagist.org/packages/albertcht/lumen-testing)

## Description

A Testing Suite For Lumen like Laravel does.

### Installation

```
composer require --dev albertcht/lumen-testing
```

* Make your test case extend `AlbertCht\Lumen\Testing\TestCase`

You're all done! Enjoy your testing like in Laravel!

### Concerns

There are some traits you can use in your test case (including original ones in Lumen):

* `AlbertCht\Lumen\Testing\Concerns\RefreshDatabase`
* `Laravel\Lumen\Testing\DatabaseMigrations`
* `Laravel\Lumen\Testing\DatabaseTransactions`
* `Laravel\Lumen\Testing\WithoutMiddleware`
* `Laravel\Lumen\Testing\WithoutEvents`

> `RefreshDatabase` = `DatabaseMigrations` + `DatabaseTransactions`, so if you use `RefreshDatabase`, you don't need to use the other two traits anymore.
