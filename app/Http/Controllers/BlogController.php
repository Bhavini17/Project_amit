<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


use App\Http\Requests;

class BlogController extends BaseController
{
    public function getIndex()
	{
            $mostRecommended = \App\blog::mostRecommended();
            $last            = \App\blog::lastPosts();
            //echo'<pre>';
            //dd($mostRecommended);
            return View('webpages.news',['title'=>"Welcome ",'mostRecommended'=>$mostRecommended,'last'=>$last]);
	}

    public static function seoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
	/**
	 * Display the specified resource.
	 * GET /blog/{id}/title
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getPost($id)
	{

            
            $imgPath = url('/');

            $post = \App\blog::find($id);
            if($post == NULL){
                App::abort(404);
            }
            return View('webpages.news-post',['title'=>$post['title'], 'post'=>$post, 'imgPath'=>$imgPath]);
	}
        
    /**
     * Add the point to  
     * 
     * 
     */ 
    public function getShare($id,$social)
    {
        $url = '';
        $post = \App\blog::find($id);
        if($post == NULL){
            App::abort(404);
        }

        // add social point if it is not robot
        if (!isset($_SERVER['HTTP_USER_AGENT']) && !preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
            $post->socialPoint ++;
            $post->save();
        }
        switch ($social){
            case 'twitter' :
                $url  = 'https://twitter.com/home?status=';
                $url .= $post['title'] . ' ' . $post->getUrl();
            break;
            case 'facebook' :
                $url  = 'https://www.facebook.com/sharer/sharer.php?u=';
                $url .=  $post->getUrl();
            break;
            case 'googlePlus' :
                $url  = 'https://plus.google.com/share?url=';
                $url .= $post->getUrl();
            break;
            case 'linkedIn' :
                $url  = 'https://www.linkedin.com/shareArticle?mini=true&';
                $url .= 'url='.$post->getUrl().'&title='.$post['title'].'&summary=&source=';
            break;          
        }
        return \Redirect::to($url);
    }


}
