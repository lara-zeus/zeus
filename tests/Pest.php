<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class)
    ->beforeEach(fn () => $this->seed(\Database\Seeders\ShieldSeeder::class))
    ->in('Feature');
