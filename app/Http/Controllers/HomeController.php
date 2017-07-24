<?php

namespace App\Lib;
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index() {
        //  $zillow_id = 'X1-ZWz1fwtu70n1u3_5xiff'; //the zillow web service ID that you got from your email
        //  $zid = '48749425';
        //  $me = "found";
        if  ($_GET['zip']) {

        $search = $_GET['zip'];
    }
        // // $citystate = $_GET['citystate'];
        // // $address = urlencode($search);
        // // $citystatezip = urlencode($citystate);

        // $search = "148 Summer st";
        // $citystate = "MA";
        // $address = urlencode("148 Summer st MA");
        // $citystatezip = urlencode("02472");

        // $url = "http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip";
        // $pid_url = "http://www.zillow.com/webservice/GetZestimate.htm?zws-id=X1-ZWz1fwtu70n1u3_5xiff&zpid=48749425";
        // $comp_url =  "http://www.zillow.com/webservice/GetComps.htm?zws-id=X1-ZWz1fwtu70n1u3_5xiff&zpid=25688&count=10";
        // $result = file_get_contents($pid_url);
        // $zdata = simplexml_load_string($result);
        // $code= $zdata->message->code;

        $new_search = new \App\Lib\Search();
        $mydata = $new_search->by_zpid($search);


        $data['tasks'] = [
                [
                        'name' => 'Design New Dashboard',
                        'progress' => '87',
                        'color' => 'danger'
                ],
                [
                        'name' => 'Create Home Page',
                        'progress' => '76',
                        'color' => 'warning'
                ],
                [
                        'name' => 'Some Other Task',
                        'progress' => '32',
                        'color' => 'success'
                ],
                [
                        'name' => 'Start Building Website',
                        'progress' => '56',
                        'color' => 'info'
                ],
                [
                        'name' => 'Develop an Awesome Algorithm',
                        'progress' => '10',
                        'color' => 'success'
                ]
        ];
        
        if ($mydata->code == 0){

        $zpid = $mydata->response->zpid;
        $address = $mydata->response->address->street;
        $zestimate = $mydata->response->zestimate->amount; 
        $message =  $mydata->message;
        
         return view('welcome', compact('me','zpid','address','zestimate','search'))->with($data);
        }
        else  {
            //return view('welcome')->with($data);
        }


        
    }

    public function result() {

         if  ($_GET['zip']) {

        $search = $_GET['zip'];
    }

    }
    // function  get_data() {

    //     $zillow_id = 'X1-ZWz1fwtu70n1u3_5xiff'; //the zillow web service ID that you got from your email

    //     $search = $_GET['address'];
    //     $citystate = $_GET['citystate'];
    //     $address = urlencode($search);
    //     $citystatezip = urlencode($citystate);

    //     $url = "http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip";

    //     $result = file_get_contents($url);
    //     $zdata = simplexml_load_string($result);
    //     $code= $zdata->message->code;
    //     if ($code = 0){
    //     return view('zillow')->with($zdata);
    //     }


    // }

}
