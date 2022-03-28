<?php
namespace App\System;
use Symfony\Component\EventDispatcher\EventDispatcher;
use App\Events\PostEvent;
use App\Listeners\PostListener;

/**
 * File: /app/code/core/system/Router.php
 * Purpose: retrieve $_GET['request'] and break it down into segments. Each
 * segment is used to create an MVC routing system
 */

class Router {

    public string $default_controller = 'home';
    public string $default_action = 'index';
    public ?string $controller = null;
    public ?string $action = null; 
    public array $parameter = [];

    // public function __construct() {
    // }

    public function getRoute($subdir = null) {

        // This function will take all URL segments
        // and store the currently used controller/action/parameter
        $urlSegments = $_SERVER['REQUEST_URI'];
        $urlSegments = explode('/', $urlSegments);

        // Filter out the host name and installed subdirectory if applicable
        if($urlSegments[0] == $_SERVER['SERVER_NAME'] || $urlSegments[0] == '')
        {
            unset($urlSegments[0]);
        }

        if($urlSegments[1] == $subdir)
        {
            unset($urlSegments[1]);
        }

        ksort($urlSegments, SORT_NUMERIC);
        $urlSegments = array_values($urlSegments);
        
        // Get and set the currently used controller and action
        if(empty($urlSegments[0]))
        {
            $this->controller = $this->default_controller;
        } else {
            $this->controller = $urlSegments[0];
        }

        $this->controller_class = ucwords($this->controller) . '_Controller';

        if( empty($urlSegments[1]) && !is_numeric($urlSegments[1]))
        {
            $this->action = 'index';
        } else {
            $this->action = $urlSegments[1];
        }
        
        // Fetch and store all URL parameter
        $keys = array_keys($urlSegments);
        $params = [];

        foreach($urlSegments as $index => $val){
            if($val == $this->controller) {
                continue;
            }
            if($val == $this->action) {
                continue;
            }
            $this->parameter[$index-1] = $val;
        }
        unset($urlSegments);
        unset($keys);
    }

    public function interceptPost(Array $post, $app) {
        return $_POST = $app['validate']->xss_clean($post);
        // init event dispatcher
		// $dispatcher = new EventDispatcher();
		
		// // register subscriber
		// $subscriber = new \App\Subscribers\RegisterSubscriber();
		// $dispatcher->addSubscriber($subscriber);
		
		// // dispatch
		// $dispatcher->dispatch(\App\Events\PostEvent::NAME, new \App\Events\PostEvent($app));
    }

    public function interceptGet($app) {
        return $_GET = strip_tags($_GET);
        // init event dispatcher
		$dispatcher = new EventDispatcher();
		
		// register subscriber
		$subscriber = new \App\Subscribers\RegisterSubscriber();
		$dispatcher->addSubscriber($subscriber);
		
		// dispatch
		$dispatcher->dispatch(\App\Events\GetEvent::NAME, new \App\Events\GetEvent($app));
    }

}