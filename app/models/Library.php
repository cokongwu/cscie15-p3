<?php

class Library{
	// Properties

	//Methods
	/**
	 * Random User Logic
	 */
	private function getUserName(){
		$faker = Faker\Factory::create();
		return $faker->name;	
	}
	private function getUserDate(){
		$faker = Faker\Factory::create();
		return $faker->dateTimeBetween($startDate = "-8 years", $endDate = "now")
			->format("Y-m-d");
	}
	private function getUserInfo(){
		$faker = Faker\Factory::create();
		return $faker->paragraph($nbSentences = 3);
	}
	public function userGen($post){
		$result = "";
		$numUsers = $this->numberClean($post["numUsers"]);
		for($i=0; $i < $numUsers; $i++){
			$result .= "name: ".$this->getUserName()."\n<br>";
			if(isset($post["date"])){
				$result .= "enroll date: ".$this->getUserDate()."\n<br>";
			}
			if(isset($post["about"])){
				$result .= "about: ".$this->getUserInfo()."\n<br>";
			}
		}
		return $result;
	}
	/**
	 * Lorem Ipsum Logic
	 */
	public function numberClean($amount){
		if(!is_numeric($amount)){
			$amount = 2;
		}
		if($amount < 1){
			$amount = 1;
		}
		else if($amount > 99){
			$amount = 99;
		}
		return $amount;
	}
	/**
	 * XKCD Generator logic
	 */
	public function xkcdGen(){
	// array holding wordlist for generator
		$wordList = array("about", "after", "again", "air", "all", "along", "also", "an", "and", "another", "any", "are", "around", "as", "at", "away", "back", "be", "because", "been", "before", "below", "between", "both", "but", "by", "came", "can", "come", "could", "day", "did", "different", "do", "does", "don't", "down", "each", "end", "even", "end", "even", "every", "few", "find", "first", "for", "found", "from", "get", "give", "go", "good", "great", "had", "has", "have", "he", "help", "her", "here", "him", "his", "home", "house", "how", "I", "if", "in", "into", "is", "it", "its", "just", "know", "large", "last", "left", "like", "line", "little", "long", "look", "made", "make", "man", "many", "may", "me", "men", "might");
		$result = " ";
		$symbols = "~!@#$%^&*";
		if(isset($_POST["amount"])){
			for($i=1; $i<= $_POST["amount"]; $i++){    //add specified # of words
				$pos = rand(0, (count($wordList)-1));
				$result = $result . $wordList[$pos];
				if( $i < $_POST["amount"]){
					$result = $result . "-";
				}
			}
			if(isset($_POST["number"])){    //if checked, append a number 
				$result = $result . rand(0, 9);
			}
			if(isset($_POST["symbol"])){    //if checked, append a symbol
				$sym = rand(0, 8);
				$result = $result . $symbols[$sym];
			}
		}
		return $result;
	}
}
