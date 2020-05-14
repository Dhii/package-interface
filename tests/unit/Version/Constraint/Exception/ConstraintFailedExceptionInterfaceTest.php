<?php

namespace Version\Constraint\Exception;

use Dhii\Package\Version\Constraint\Exception\ConstraintFailedExceptionInterface as Subject;
use Dhii\Validation\Exception\ValidationExceptionInterface;
use Dhii\Validation\Exception\ValidationFailedExceptionInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ConstraintFailedExceptionInterfaceTest extends TestCase
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
            $this->assertInstanceOf(ValidationFailedExceptionInterface::class, $subject);
            $this->assertInstanceOf(ValidationExceptionInterface::class, $subject);
        }
    }
}
