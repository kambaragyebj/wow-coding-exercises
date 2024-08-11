<?php

declare(strict_types=1);

namespace App\Exercises;

use Illuminate\Support\Facades\Log;

/**
* Create a Queue.
*
*/

final class Queue
{
    private array $queue=[];
   
    public function add(mixed $value)
    {
        array_push($this->queue,$value);
    }

    public function remove(): mixed
    {  
        if(empty($this->queue)){
          return null;
        }
    
        return  array_pop($this->queue);
    }
    public function peek(): mixed
    {
        if(empty($this->queue)){
            return null;
        }
        $count = count($this->queue)-1;
        return $this->queue[$count];   
    }

    public static function zip(self $queue1, self $queue2): self
    {
        $result = new self();

        try {
            $queue1Array = $queue1->queue;
            $queue2Array = $queue2->queue;
    
            $lenOfQueue1 = count($queue1Array);
            $lenOfQueue2 = count($queue2Array);
            $maxLenOfQueue1andQueue2 = max($lenOfQueue1, $lenOfQueue2);

            for ($i = 0; $i < $maxLenOfQueue1andQueue2; $i++) {

                if ($i < $lenOfQueue1) {

                    $result->add($queue1Array[$i]);
                }

                if ($i < $lenOfQueue2) {

                    $result->add($queue2Array[$i]);
                }
            }

            Log::info('Queue1 and Queue2 interweaves successfully');

            return $result;

        } catch (\Exception $e) {

            $errorMessage = sprintf(
                'Encounter error while Queue1 and Queue2 interweaves: %s:%d %s',
                $e->getFile(),
                $e->getLine(),
                $e->getMessage()
            );

            Log::error($errorMessage);
        }

        return $result;
       
    }
 
}
