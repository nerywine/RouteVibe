<?php
/**
 * Tests for RouteVibe
 */

use PHPUnit\Framework\TestCase;
use Routevibe\Routevibe;

class RoutevibeTest extends TestCase {
    private Routevibe $instance;

    protected function setUp(): void {
        $this->instance = new Routevibe(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Routevibe::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
