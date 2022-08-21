<?php

namespace Tests;

use App\Models\Category;
use App\Models\Product;

abstract class ControllerTestCase extends TestCase
{
    protected Category $category;

    protected function setUp(): void
    {
        parent::setUp();
        $category = Category::factory()->create();
        $product = Product::factory()->create();
        $this->category = $category;
        $this->product = $product;
    }
}