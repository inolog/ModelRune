<?php
/**
 * Tests for ModelRune
 */

use PHPUnit\Framework\TestCase;
use Modelrune\Modelrune;

class ModelruneTest extends TestCase {
    private Modelrune $instance;

    protected function setUp(): void {
        $this->instance = new Modelrune(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modelrune::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
