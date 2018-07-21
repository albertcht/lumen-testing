Lumen Testing
==========
![php-badge](https://img.shields.io/packagist/php-v/albertcht/lumen-testing.svg)
[![packagist-badge](https://img.shields.io/packagist/v/albertcht/lumen-testing.svg)](https://packagist.org/packages/albertcht/lumen-testing)
[![Total Downloads](https://poser.pugx.org/albertcht/lumen-testing/downloads)](https://packagist.org/packages/albertcht/lumen-testing)
[![travis-badge](https://api.travis-ci.org/albertcht/lumen-testing.svg?branch=master)](https://travis-ci.org/albertcht/lumen-testing)

## Description

A testing suite for Lumen like Laravel does.

### Requirements

* \>= PHP 7.0
* \>= Lumen 5.3

### Installation

```
composer require --dev albertcht/lumen-testing
```

* Make your test case extend `AlbertCht\Lumen\Testing\TestCase`

You're all done! Enjoy your testing like in Laravel!

### Concerns

There are some traits you can use in your test case (including original ones in Lumen):

* `AlbertCht\Lumen\Testing\Concerns\RefreshDatabase`
* `AlbertCht\Lumen\Testing\Concerns\WithFaker`
* `AlbertCht\Lumen\Testing\Concerns\InteractsWithRedis`
* `Laravel\Lumen\Testing\DatabaseMigrations`
* `Laravel\Lumen\Testing\DatabaseTransactions`
* `Laravel\Lumen\Testing\WithoutMiddleware`
* `Laravel\Lumen\Testing\WithoutEvents`

> `RefreshDatabase` = `DatabaseMigrations` + `DatabaseTransactions`, so if you use `RefreshDatabase`, you don't need to use the other two traits anymore.

### Response Assertions

Laravel provides a variety of custom assertion methods for your [PHPUnit](https://phpunit.de/) tests. These assertions may be accessed on the response that is returned from the `json`, `get`, `post`, `put`, and `delete` test methods:

Method  | Description
------------- | -------------
`$response->assertSuccessful();`  |  Assert that the response has a successful status code.
`$response->assertStatus($code);`  |  Assert that the response has a given code.
`$response->assertRedirect($uri);`  |  Assert that the response is a redirect to a given URI.
`$response->assertHeader($headerName, $value = null);`  |  Assert that the given header is not present on the response.
`$response->assertHeaderMissing($headerName);`  |  Assert that the given header is present on the response.
`$response->assertCookie($cookieName, $value = null);`  |  Assert that the response contains the given cookie.
`$response->assertPlainCookie($cookieName, $value = null);`  |  Assert that the response contains the given cookie (unencrypted).
`$response->assertCookieExpired($cookieName);`  |  Assert that the response contains the given cookie and it is expired.
`$response->assertCookieNotExpired($cookieName);`  |  Assert that the response contains the given cookie and it is not expired.
`$response->assertCookieMissing($cookieName);`  |  Assert that the response does not contains the given cookie.
`$response->assertJson(array $data);`  |  Assert that the response contains the given JSON data.
`$response->assertJsonCount(int $count, $key = null);`  |  Assert that the response JSON has the expected count of items at the given key.
`$response->assertJsonFragment(array $data);`  |  Assert that the response contains the given JSON fragment.
`$response->assertJsonMissing(array $data);`  |  Assert that the response does not contain the given JSON fragment.
`$response->assertJsonMissingExact(array $data);`  |  Assert that the response does not contain the exact JSON fragment.
`$response->assertExactJson(array $data);`  |  Assert that the response contains an exact match of the given JSON data.
`$response->assertJsonStructure(array $structure);`  |  Assert that the response has a given JSON structure.
`$response->assertJsonValidationErrors($keys);`  |  Assert that the response has the given JSON validation errors for the given keys.
`$response->assertViewIs($value);`  |  Assert that the given view was returned by the route.
`$response->assertViewHas($key, $value = null);`  |  Assert that the response view was given a piece of data.
`$response->assertViewHasAll(array $data);`  |  Assert that the response view has a given list of data.
`$response->assertViewMissing($key);`  |  Assert that the response view is missing a piece of bound data.
`$response->assertSee($value);`  |  Assert that the given string is contained within the response.
`$response->assertDontSee($value);`  |  Assert that the given string is not contained within the response.
`$response->assertSeeText($value);`  |  Assert that the given string is contained within the response text.
`$response->assertDontSeeText($value);`  |  Assert that the given string is not contained within the response text.
`$response->assertSeeInOrder(array $values);`  |  Assert that the given strings are contained in order within the response.
`$response->assertSeeTextInOrder(array $values);`  |  Assert that the given strings are contained in order within the response text.

### Authentication Assertions

Laravel also provides a variety of authentication related assertions for your [PHPUnit](https://phpunit.de/) tests:

Method  | Description
------------- | -------------
`$this->assertAuthenticated($guard = null);`  |  Assert that the user is authenticated.
`$this->assertGuest($guard = null);`  |  Assert that the user is not authenticated.
`$this->assertAuthenticatedAs($user, $guard = null);`  |  Assert that the given user is authenticated.
`$this->assertCredentials(array $credentials, $guard = null);`  |  Assert that the given credentials are valid.
`$this->assertInvalidCredentials(array $credentials, $guard = null);`  |  Assert that the given credentials are invalid.

## Database Assertions

Laravel provides several database assertions for your [PHPUnit](https://phpunit.de/) tests:

Method  | Description
------------- | -------------
`$this->assertDatabaseHas($table, array $data);`  |  Assert that a table in the database contains the given data.
`$this->assertDatabaseMissing($table, array $data);`  |  Assert that a table in the database does not contain the given data.
`$this->assertSoftDeleted($table, array $data);`  |  Assert that the given record has been soft deleted.

### Reference

See full document at Laravel's doc:

* https://laravel.com/docs/5.6/http-tests
* https://laravel.com/docs/5.6/database-testing

## Support on Beerpay
Hey dude! Help me out for a couple of :beers:!

[![Beerpay](https://beerpay.io/albertcht/lumen-testing/badge.svg?style=beer-square)](https://beerpay.io/albertcht/lumen-testing)  [![Beerpay](https://beerpay.io/albertcht/lumen-testing/make-wish.svg?style=flat-square)](https://beerpay.io/albertcht/lumen-testing?focus=wish)
