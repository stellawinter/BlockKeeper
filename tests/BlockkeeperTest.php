<?php
/**
 * Tests for BlockKeeper
 */

use PHPUnit\Framework\TestCase;
use Blockkeeper\Blockkeeper;

class BlockkeeperTest extends TestCase {
    private Blockkeeper $instance;

    protected function setUp(): void {
        $this->instance = new Blockkeeper(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockkeeper::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
