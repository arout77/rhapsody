<?php
namespace App\Events;
use Symfony\Contracts\EventDispatcher\Event;
use App\Plugin\Validation;

class PostEvent extends Event {

    public const NAME = 'form.submit';

    private $config;

    public function __construct($app) 
    {
        $this->config = $app['config'];
    }

    public function getPostData() 
    {
        # By default, the system will inspect every single $_POST submitted for unwanted
        # or potentially dangerous input before passing it back to the user for further processing.
        # Users can choose whether to encode or simply remove any dangerous tags via .env file
        $validate = new Validation;

        foreach($_POST as $k => $val)
        {
            if($this->config->setting('html_encode_tags') == 'encode')
            {
                $val = htmlentities($val);
            }
            if($this->config->setting('strip_all_tags') == 'TRUE') 
            {
                $data = $validate->filter_basic_tags($val, 'strip_all_tags');
            } else {
                $data = $validate->filter_basic_tags($val);
            }
            $post_filter[$k] = $data;
        }
                
        return $post_filter;
    }

}