<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'vendor/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;

class Home extends CI_Controller {

    private function config($APP_ID, $APP_SECRET) {
        FacebookSession::setDefaultApplication($APP_ID, $APP_SECRET);
    }

    private function getStatus($session) {
        $status = null;
        if($session) {
            try {
                $status = (new FacebookRequest(
                    $session, 'GET', '/me/statuses?limit=1'
                ))->execute()->getGraphObject();
            } catch(FacebookRequestException $e) {
                echo "Exception occured, code: " . $e->getCode();
                echo " with message: " . $e->getMessage();
            }
        }
        return $status;
    }

	public function index() {
        define("APP_ID",     '847749778641646');
        define("APP_SECRET", 'fffe73198e5898b662836a71644da654');
        $this->config(APP_ID, APP_SECRET);
        $session = new FacebookSession('CAAMDBiBqEu4BAJRkUbVhrQIJYu4bSZBhj5XHfZCceH4kZA9OlZBeGawVeWQElvzGPMja3fV5rONTWUqiVejve3oVJn6dr63yOUpREmpcyRbNcIr0DCYBexeCpF7Qpm8pZCOf0BfALpZATZBhpyAU447oCVI0NnaYymWyBTwZB9dZCYYoR4QEwOUBh');
		$status = $this->getStatus($session);
        $this->load->helper('base_url');
		$this->load->view('home', array(
            'status' => $status
        ));
	}
}