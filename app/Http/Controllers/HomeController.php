<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Regression\LeastSquares;

class HomeController extends Controller
{

    //Single Linear
    public function single_Linear(){
        /*
       ==========================================================
           *****  Single Linear Regression - Start******
       ==========================================================
       */
        $samples = [[60], [61], [62], [63], [65]];
        $targets = [3.1, 3.6, 3.8, 4, 4.1];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);

        /* ****** DEFINE YOUR PREDICT VALUE HERE -START *******/
        $result = $regression->predict([64]);
        /* ****** DEFINE YOUR PREDICT VALUE HERE - END *******/

        /* Add to New Array */
        $result_array = array(
            'regression_Result' => number_format($result, 2)
        );
        /*return to View page*/
        return view('home/index',  $result_array);
    }

    //Multiple Linear
    public function multiple_Linear(){
        /*
       ==========================================================
           *****  Multiple Linear Regression - Start******
       ==========================================================
       */
        $samples = [

            [73676, 1996],
            [77006, 1998],
            [10565, 2000],
            [146088, 1995],
            [15000, 2001],
            [65940, 2000],
            [9300, 2000],
            [93739, 1996],
            [153260, 1994],
            [17764, 2002],
            [57000, 1998],
            [15000, 2000]

        ];
        $targets = [

            2000,
            2750,
            15500,
            960,
            4400,
            8800,
            7100,
            2550,
            1025,
            5900,
            4600,
            4400
        ];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);

        /*
         ****** DEFINE YOUR PREDICT VALUE HERE -START ******
        */
        $result = $regression->predict([1500,1998]);
        /* ****** DEFINE YOUR PREDICT VALUE HERE - END *******/

        /*
       ==========================================================
           *****  Multiple Linear Regression - END******
       ==========================================================
       */
        /* Add to New Array */
        $result_array = array(
            'regression_Result' => number_format($result, 2)
        );
        /*return to View page*/
        return view('home/index',  $result_array);
    }
    
}
