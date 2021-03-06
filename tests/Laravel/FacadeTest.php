<?php namespace Arcanedev\NoCaptcha\Tests\Laravel;

use Arcanedev\NoCaptcha\Laravel\Facade as NoCaptcha;

use Arcanedev\NoCaptcha\Tests\LaravelTestCase;

class FacadeTest extends LaravelTestCase
{
    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    /* ------------------------------------------------------------------------------------------------
     |  Test Functions
     | ------------------------------------------------------------------------------------------------
     */
    /** @test */
    public function it_can_render_script_tag()
    {
        $this->assertEquals(
            $this->getScriptTag(),
            NoCaptcha::script()
        );

        // Echo out only once
        $this->assertEmpty(NoCaptcha::script());
    }

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get script tag for testing
     *
     * @param  string $lang
     *
     * @return string
     */
    private function getScriptTag($lang = 'en')
    {
        $url = 'https://www.google.com/recaptcha/api.js';

        return '<script src="' . $url . '?hl=' . $lang . '" async defer></script>';
    }
}
