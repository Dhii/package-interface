<?php

namespace Dhii\Package\Test\Unit;

use Dhii\Package\PackageInterface as Subject;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class PackageInterfaceTest extends TestCase
{

    /**
     * Creates a new instance of the test subject.
     *
     * @return Subject|MockObject
     */
    protected function createSubject(): Subject
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->getMock();
        return $mock;
    }

    public function testInstantiation()
    {
        {
            $subject = $this->createSubject();
        }

        {
            $this->assertInstanceOf(Subject::class, $subject);
        }
    }
}
