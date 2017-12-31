<?php

namespace AlbertCht\Lumen\Testing;

use Illuminate\Http\Request;
use Laravel\Lumen\Testing\TestCase as LumenTestCase;
use AlbertCht\Lumen\Testing\Concerns\RefreshDatabase;

abstract class TestCase extends LumenTestCase
{
    use Concerns\MakesHttpRequests,
        Concerns\InteractsWithDatabase,
        Concerns\InteractsWithExceptionHandling,
        Concerns\InteractsWithAuthentication,
        Concerns\MocksApplicationServices;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->refreshApplication();
        $this->appendTraits();
    }

    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require base_path('bootstrap/app.php');
    }

    /**
     * Append the testing helper traits.
     *
     * @return void
     */
    protected function appendTraits()
    {
        $uses = array_flip(class_uses_recursive(get_class($this)));

        if (isset($uses[RefreshDatabase::class])) {
            $this->refreshDatabase();
        }
    }


}
