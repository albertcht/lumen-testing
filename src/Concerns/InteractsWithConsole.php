<?php

namespace AlbertCht\Lumen\Testing\Concerns;

use Illuminate\Contracts\Console\Kernel;

trait InteractsWithConsole
{
    /**
     * Call artisan command and return code.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @return int
     */
    public function artisan($command, $parameters = [])
    {
        return $this->app[Kernel::class]->call($command, $parameters);
    }

    /**
     * Disable mocking the console output.
     *
     * @return $this
     */
    protected function withoutMockingConsoleOutput()
    {
        $this->mockConsoleOutput = false;
        $this->app->offsetUnset(OutputStyle::class);
        return $this;
    }
}
