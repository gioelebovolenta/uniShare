<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\User;
use PHPUnit\Event\Code\Test;
use PHPUnit\Framework\TestCase;

it('belongs to a user', function () {
    $user = User::factory()->create();
    $product = Product::factory()->create([
        'user_id' => $user->id,
    ]);

    expect($product->user->is($user))->toBeTrue();
});