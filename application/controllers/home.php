<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'vendor/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;

class Home extends CI_Controller {

    private function config($APP_ID, $APP_SECRET) {
        FacebookSession::setDefaultApplication($APP_ID, $APP_SECRET);
    }

    private function getPosts($session) {
        $posts = null;
        if($session) {
            try {
                $posts = (new FacebookRequest(
                    $session, 'GET', '/me/posts?fields=id,story,message,link,source,name,description,type,likes.limit(500),comments.limit(500),actions,full_picture&limit=5'
                ))->execute()->getGraphObject();
            } catch(FacebookRequestException $e) {
                echo "Exception occured, code: " . $e->getCode();
                echo " with message: " . $e->getMessage();
            }
        }
        return $posts;
    }

    private function getLikes($posts) {
        $likes_count = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            $likes = $post->getProperty('likes');
            if ($likes != null) {
                $likes_data = $likes->getProperty('data');
                array_push($likes_count, count($likes_data->getPropertyNames()));
            }
            else {
                array_push($likes_count, 0);
            }
        }
        return $likes_count;
    }

    private function getComments($posts) {
        $comments_count = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            $comments = $post->getProperty('comments');
            if ($comments != null) {
                $comments_data = $comments->getProperty('data');
                array_push($comments_count, count($comments_data->getPropertyNames()));
            }
            else {
                array_push($comments_count, 0);
            }
        }
        return $comments_count;
    }

    private function getActions($posts) {
        $actions = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            $action = $post->getProperty('actions');
            for($j = 0; $j < 2; $j++) {
                $entity = $action->getProperty($j);
                array_push($actions, $entity->getProperty('link'));
            }
        }
        return $actions;
    }

    private function getStory($posts) {
        $stories = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($stories, $post->getProperty('story'));
        }
        return $stories;
    }

    private function getMessage($posts) {
        $messages = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($messages, $post->getProperty('message'));
        }
        return $messages;
    }

    private function getType($posts) {
        $type = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($type, $post->getProperty('type'));
        }
        return $type;
    }

    private function getDescription($posts) {
        $description = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($description, $post->getProperty('description'));
        }
        return $description;
    }

    private function getSource($posts) {
        $source = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($source, $post->getProperty('source'));
        }
        return $source;
    }

    private function getLink($posts) {
        $link = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($link, $post->getProperty('link'));
        }
        return $link;
    }

    private function getPic($posts) {
        $picture = array();
        for($i = 0; $i < 5; $i++) {
            $data = $posts->getProperty('data');
            $post = $data->getProperty($i);
            array_push($picture, $post->getProperty('full_picture'));
        }
        return $picture;
    }

	public function index() {
        define("APP_ID",     '847749778641646');
        define("APP_SECRET", 'fffe73198e5898b662836a71644da654');
        $this->config(APP_ID, APP_SECRET);
        $session = new FacebookSession('CAAMDBiBqEu4BAKSzcoZB5X9Piph96XXobYrh0KkX64XMgLO0mcozVDuIjzK0v6aNX10qxOHnAHcyGktei1CmZBwBFuble5df6DgCYv6eDwxIkgjq9hNWzXQT5Cw2HtSjHWtXlPEHxhPKHFgMsJicD8qKRcsky5vMnfI3WkZCcVAvB9SIRDg');
		$posts = $this->getPosts($session);
        $likes = $this->getLikes($posts);
        $comments = $this->getComments($posts);
        $actions = $this->getActions($posts);
        $story = $this->getStory($posts);
        $message = $this->getMessage($posts);
        $description = $this->getDescription($posts);
        $type = $this->getType($posts);
        $source = $this->getSource($posts);
        $link = $this->getLink($posts);
        $picture = $this->getPic($posts);
        $this->load->helper('base_url');
		$this->load->view('home', array(
            'likes' => $likes,
            'comments' => $comments,
            'actions' => $actions,
            'story' => $story,
            'message' => $message,
            'description' => $description,
            'type' => $type,
            'source' => $source,
            'link' => $link,
            'picture' => $picture
        ));
	}
}