<?php
// src/AppBundle/Controller/SearchController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="_search")
     */
    public function keywordAction(Request $request)
    {
    	$keyword=$request->query->get('k');
        $para=array('keyword'=>'');
    	if ($keyword) {
            $max=$request->query->get('next')?$request->query->get('next'):'';
            $since=$request->query->get('prev')?$request->query->get('prev'):'';
            $result=$this->twitterSearch($keyword,$since,$max);
            $count=count($result->statuses);

            if ($count>14) {
                $next=strval(sprintf("%.0f", $result->statuses[14]->id-1));
            }else
                $next='';

            if ($count>1&&!($max==''&&$since=='')&&($since==''||$result->statuses[0]->id_str>$since)) {
                $prev=$result->statuses[0]->id_str;
            }else
                $prev='';
            if ($max==''&&$since=='') {
                file_put_contents("search.log","\n$keyword",FILE_APPEND);
            }
            $para=array('result'=>$result->statuses,
                'count'=>$count,
                'keyword'=>$keyword,
                'next'=>$next,
                'prev'=>$prev
            );
    	}

        $file = file("search.log");
        $searchlog=array();
        for ($i = count($file)-1; $i > max(0,count($file)-25)-1; $i--) {
            array_push($searchlog,$file[$i]);
        }
        $para['searchlog']=$searchlog;

        return $this->render('search/search.html.twig',$para);
    }

    private function twitterSearch($keyword,$since,$max){
        $keyword=rawurlencode($keyword);
        $sinceid=$since?"&since_id=$since":'';
        $maxid=$max?"&max_id=$max":'';

        $parameters=("lang=en&result_type=recent&include_entities=false");
        $url = "https://api.twitter.com/1.1/search/tweets.json";
        $consumer_key = "AAbfcJttviJCNKmUQvoDPNjb2";
        $consumer_secret = "dqsDXrGfL1czChbqeIYVjHAz7lMwD0w8ZPFiQvnSpQaNJOuKbo";
        $Access_token = "39460425-wGDc1vkPMERAIBVh8hUS3m6cIDDZzut9cBFbngTHP";
        $Access_token_secret = "8LfG5dgL2tRMCxvfDh99t8xA0BcsFJwAsEVTi03ChK9U5";
        $oauth_nonce=md5(time().rand());
        $oauth_hash = 'include_entities=false&lang=en'.$maxid.'&oauth_consumer_key='.$consumer_key.'&oauth_nonce=' . $oauth_nonce . '&oauth_signature_method=HMAC-SHA1&oauth_timestamp=' . time() . '&oauth_token='.$Access_token.'&oauth_version=1.0&q='.$keyword.'&result_type=recent'.$sinceid;
        $base = 'GET&'.rawurlencode($url).'&'.rawurlencode($oauth_hash);
        $key = rawurlencode($consumer_secret).'&'. rawurlencode($Access_token_secret);
        $signature = rawurlencode(base64_encode(hash_hmac('sha1', $base, $key, true)));
        $oauth_header = 'oauth_consumer_key="'.$consumer_key.'", ';
        $oauth_header .= 'oauth_nonce="' . $oauth_nonce . '", ';
        $oauth_header .= 'oauth_signature="' . $signature . '", ';
        $oauth_header .= 'oauth_signature_method="HMAC-SHA1", ';
        $oauth_header .= 'oauth_timestamp="' . time() . '", ';
        $oauth_header .= 'oauth_token="'.$Access_token.'", ';
        $oauth_header .= 'oauth_version="1.0", ';
        $curl_header = array("Authorization: Oauth {$oauth_header}");
        $curl_request = curl_init();
        curl_setopt($curl_request, CURLOPT_HTTPHEADER, $curl_header);
        curl_setopt($curl_request, CURLOPT_HEADER, false);
        curl_setopt($curl_request, CURLOPT_URL, $url.'?include_entities=false&lang=en'.$maxid.'&q='.$keyword.'&result_type=recent'.$sinceid);
        curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, false);
        $json = curl_exec($curl_request);
        curl_close($curl_request);
        $result=json_decode($json);
        return $result;
    }

}