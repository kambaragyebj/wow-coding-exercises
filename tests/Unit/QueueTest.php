<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Exercises\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testQueueAdd()
    {
        $queue = new Queue();
        $queue->add(1);
        $queue->add(2);
        $queue->add(3);
        
        // Actual array 
        $actualArray = $queue->queue;

        // Expected array
        $expectedOutputArray = [1,2,3];

         $this->assertEquals($expectedOutputArray, $actualArray);

    }
    public function testQueueRemove()
    {
        $queue = new Queue();
        $queue->add(1);
        $queue->add(2);
        $queue->add(3);
        //Remove the last element 
        $actual = $queue->remove();
        // expected last element
        $expectedOutput = '3';

         // Assert that the last element is as expected
         $this->assertEquals($expectedOutput, $actual);

    }
    public function testQueuePeek()
    {
        $queue = new Queue();
        $queue->add(1);
        $queue->add(2);
        $queue->add(3);
        //returns the last element of the queue and does not remove it from the queue
        $actual = $queue->peek();
        // Expected last element
        $expectedOutput = '3';
         // Assert that the last element is as expected
        $this->assertEquals($expectedOutput, $actual);

    }

    public function testQueueZip()
    {
        $queue1 = new Queue();
        $queue1->add(1);
        $queue1->add(2);
        $queue1->add(3);

        $peek   = $queue1->peek();
        $remove = $queue1->remove();
        
        $queue2 = new Queue();
        $queue2->add('a');
        $queue2->add('b');
        $queue2->add('c');

        $actual = Queue::zip($queue1,$queue2); 
        //print_r ($actual->queue);
       
         // Expected array
        $expectedOutput = [1, 'a', 2, 'b', 'c'];

         // Assert that the array is as expected
         $this->assertEquals($expectedOutput, $actual->queue);

    }
}
