<?php

class Post
{
	private $heading = 'Untitled';

	private $content = '';

	public function __toString()
	{
		// return'Post object';//---- это
		return $this->heading; //---- или это
	}

	public function __construct()
	{
		$this->heading = 'Untitled';
		$this->content = '';
	}

	public function read()
	{
		echo 'Read the"' . $this->heading . '"';
	}

	public function setHeading($heading)
	{
		$this->heading = $heading;	
	}

	public function setContent($content)
	{
		$this->content = $content;	
	}

	public function getHeading()
	{
		return $this->heading;
	}

	public function getContent()
	{
		return $this->content;
	}


}
//---1)
$post = new Post();
$post->setHeading('Post 1');
$post->setContent('Jeden, dwa, tszy');


//---2)
// $post = new Post();
// $post->heading = 'Post 1';
// $post->content = 'Jeden, dwa, tszy';


$post2 = new Post();
// $post2->heading = 'Post 2';



// echo '<h1>' . $post->heading . '</h1>';
// echo '<p>'  . $post->content . '</p>';

// echo $post;
// echo $post->read();
echo $post->getHeading();
echo $post->getContent();
?>