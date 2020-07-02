<?php

namespace Tests;

use App\DummyClass;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class Test extends TestCase
{
    use MatchesSnapshots;

    public function testItGreets()
    {
        $dummy_names = ['A', 'B', 'C', 'D', 'E'];

        $variable = '';

        foreach ($dummy_names as $dummy_name) {
            $dummy = new DummyClass($dummy_name);
            $variable .= ($dummy->greet());
        }

        $this->assertMatchesTextSnapshot($variable);
    }
}
