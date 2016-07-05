<?

require_once('TwitterAPIExchange.php'); 

class twitt {

	public $twAPI;

	public function __construct()
	{
		$set = array(
		        'oauth_access_token'			=>	"3303873794-iqbs0qCiaUeTWDPRbndGwinlnbQw8WtUpUqK0Ec",
		        'oauth_access_token_secret'		=>	"iEbx96c1zlE1y7PTZ6qLVY8cKuN7ZGYPRcCPa3i0gzCGZ",
		        'consumer_key'					=>	"koE5W7SByX0fW2udhcksnfMZQ",
		        'consumer_secret'				=>	"DIaxgL6Yssi9VqJnycgmE2fucxDH9XYhM4E5qQ8xeLw8U3kNDA"
		);
		
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
				echo  $url."<br/>";
			} else {
				echo "NOT FOUND!!!<br/>";
		    }
		}		
	}
}

?>