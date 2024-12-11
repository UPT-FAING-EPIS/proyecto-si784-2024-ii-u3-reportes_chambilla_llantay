<?php

namespace Tests\Mutation;

use PHPUnit\Framework\TestCase;
use Controllers\AdminController;

class AdminControllerMutationTest extends TestCase
{
    protected $adminController;
    protected $stmt;
    protected $pdo;

    /** @test */
    public function dummy_test(): void
    {
        $this->assertTrue(true);
    }
}