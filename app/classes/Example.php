<?php

namespace App\classes;
class Example
{

    public $name;
    public $data = [];
    public function index ()
    {
//     $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.20, true];
//      //echo $this->data[6];
//        foreach ($this->data as $key=> $item)
//        {
//            echo $key .' ' .$item.' ' .'<br/>';
//        }
        $this->data = [
            0 => [
                'name' =>'Robin',
                'email'=>'robincs008@gmail.com',
                'mobile'=> [
                    'personal' => '01740584648',
                    'parent' => '01959481274'
                ],

            ],
            1 => [
                'name' =>'Anwar',
                'email'=>'anwarcs008@gmail.com',
                'mobile'=>  [
                    'personal' => '01840584648',
                     'parent' => '01859481274'
                    ],
            ],
            2 => 'BITM',
            3 => [
                'name' => 'Robin',
                'email'=> 'robincs008@gmail.com',
                'mobile'=> '0140521587'
            ]

            ];

//       foreach ($this->data as $item)
//       {
//           if(is_array($item))
//           {
//               foreach ($item as $value)
//               {
//                   if(is_array($value))
//                   {
//                       foreach ($value as $v_value)
//                       {
//                           echo $v_value.' ';
//                       }
//                   }
//                   else {
//                       echo $value.' ';
//                   }
//
//               }
//           }
//           else {
//               echo $item;
//           }
//
//           echo '<br/>';
//       }

//        echo '<pre>';
//       // print_r($this->data);
//        var_dump($this->data);

    }

}