<?php

namespace <%=PACKAGE_NAMESPACE%>\Tests;

/**
 * Override the standard PHPUnit testcase with the Testbench testcase
 *
 * @see https://github.com/orchestral/testbench#usage
 */
class TestCase extends Orchestra\Testbench\TestCase
{
    /**
     * Include the package's service provider(s)
     *
     * @see https://github.com/orchestral/testbench#custom-service-provider
     * @param Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            '<%=PACKAGE_NAMESPACE%>\Providers\<%=CLASS_NAME%>ServiceProvider'
        ];
    }
}
