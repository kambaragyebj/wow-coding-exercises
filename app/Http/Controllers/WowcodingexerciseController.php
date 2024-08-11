<?php

namespace App\Http\Controllers;

use App\Exercises\Employee;
use App\Exercises\Vowels;
use App\Exercises\Pyramid;
use App\Exercises\Queue;
use App\Exercises\Denominator;
use Illuminate\Http\Request;

/**
 *  WOW coding exercises 
 *
 *  @author Jackson Kambaragye <jkambaragye@gmail.com>
 */
class WowcodingexerciseController extends Controller
{

    public function showEmployeeData(Employee $employee)
    {
        if(!empty($employee->decodeJsonData())){
            return view('employee',['employees'=>$employee->decodeJsonData()]); 
        }else{
            return view('employee'); 
        }
    }
    
    /**
    * @example Vowels::count('Hello!') === 2
    * @example Vowels::count('Why?') === 0
    */
    public function numberOfVowels()
    {
      $string = "Hello!";

      $numbersOfVowels =  Vowels::count($string);
      return view('vowels',['numbersOfVowels'=>$numbersOfVowels,'string'=>$string]); 
    }

    public function createQueue()
    {   
         $queue1 = new Queue();
         $queue1->add(1);
         $queue1->add(2);
         $queue1->add(3);
         $peek   = $queue1->peek();$queue = ['peek'=>$peek,
         'remove'=>$remove,
         'zip'=>$zip
        ];
         $remove = $queue1->remove();
         
         $queue2 = new Queue();
         $queue2->add('a');
         $queue2->add('b');
         $queue2->add('c');

         $zip = Queue::zip($queue1,$queue2);

         $queue = ['peek'=>$peek,
                   'remove'=>$remove,
                   'zip'=>$zip
         ];
         return view('queue',['queues'=>$queue]); 
        
    }
    public function getDenominations()
    {
        //JK-11-08-2024 : Please update the amount and denominations
          $amount = 750;
        // $denominations = [50=>5];
        // $denominations = [50=>0,100=>6];
           $denominations = [50=>1,300=>2,100=>1];

        $value = Denominator::getDenominations($amount,$denominations);
        
        return view('denominator',['value'=>$value]); 

    }   
}
