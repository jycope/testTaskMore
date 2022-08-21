<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\ControllerTestCase;

class CategoryController extends ControllerTestCase
{
    use RefreshDatabase;
    public function testIndex(): void
    {
        $response = $this->get(route('categories.index'));

        $response->assertOk();
    }

    public function testShow(): void
    {
        $response = $this->get(route('categories.show', $this->category));

        $response->assertOk();
    }

    public function testDestroy(): void
    {
        $response = $this->get(route('categories.destroy', $this->category));

        $response->assertOk();
    }
}