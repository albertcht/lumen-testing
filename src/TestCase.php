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

    static protected $appPath;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->appendTraits();
    }

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require $this->getAppPath();
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

    /**
     * Get the path of lumen application.
     *
     * @return string
     */
    protected function getAppPath()
    {
        if (is_null(static::$appPath)) {
            return static::$appPath = base_path('bootstrap/app.php');
        }

        return static::$appPath;
    }
}
