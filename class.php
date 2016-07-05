<?

require_once('TwitterAPIExchange.php'); 

class twitt {

	public $twAPI;

	public function __construct($set = array())
	{	
		$this->twAPI = new TwitterAPIExchange($set);		
	}
	
	function getLinkByUserName($user_name, $count = 40) 
	{
		
		$data = $this->twAPI
				->setGetfield('?screen_name='.$user_name.'&count='.$count)
					->buildOauth("https://api.twitter.com/1.1/statuses/user_timeline.json", "GET")
						->performRequest(); 
						
		$info = json_decode($data, $assoc=TRUE);

		foreach ($info as $one)
		{

			if($url = $one["entities"]["media"][0]["url"])
			{
				echo $url."<br/>";
			} else {
				echo "NOT FOUND!!!<br/>";
		    }
		}		
	}
}

?>
