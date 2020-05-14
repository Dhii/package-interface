<?php

namespace Version\Constraint;

use Dhii\Package\Version\Constraint\VersionConstraintInterface as Subject;
use Dhii\Validation\ValidatorInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class VersionConstraintInterfaceTest extends TestCase
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
            $this->assertInstanceOf(ValidatorInterface::class, $subject);
        }
    }
}
