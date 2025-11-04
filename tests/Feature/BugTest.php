<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BugTest extends TestCase
{

    public function test_is_the_bug_fixed(): void
    {
        $response = $this->post('/coupons', [
            'name' => 'VOUCHER-NAME',
            'is_voucher' => true,
            'is_flat' => false,
            'value' => '100.00',
            'stock' => 1,
        ]);

        $response->assertStatus(200);
        // Since we are executing $this->replace([]) on CreateCouponRequest#passedValidation
        // The assertion bellow should be true, but it's not.
        $response->assertExactJson([]);
    }
}
