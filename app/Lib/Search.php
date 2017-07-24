<?php

namespace App\Lib;

class Search
{
	public function by_zpid($zpid){

		$zillow_id = 'X1-ZWz1fwtu70n1u3_5xiff'; //the zillow web service ID that you got from your email
        $pid_url = "http://www.zillow.com/webservice/GetZestimate.htm?zws-id=X1-ZWz1fwtu70n1u3_5xiff&zpid=$zpid";
        $result = file_get_contents($pid_url);
        $zdata = simplexml_load_string($result);
        $code= $zdata->message->code;
        if ($code == 0){

	        return  $zdata;
        }

	}

        public function by_comp($zpid, $total_results){

        $zillow_id = 'X1-ZWz1fwtu70n1u3_5xiff'; //the zillow web service ID that you got from your email
        $comp_url =  "http://www.zillow.com/webservice/GetComps.htm?zws-id=X1-ZWz1fwtu70n1u3_5xiff&zpid=$zpid&count=$total_results";
        $result = file_get_contents($pid_url);
        $zdata = simplexml_load_string($result);
        $code= $zdata->message->code;
        if ($code == 0){

                return  $zdata;
        }

        }

}
