<?php
/**
 * Tests for CoinPayments
 */

use PHPUnit\Framework\TestCase;
use Coinpayments\Coinpayments;

class CoinpaymentsTest extends TestCase {
    private Coinpayments $instance;

    protected function setUp(): void {
        $this->instance = new Coinpayments(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinpayments::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
