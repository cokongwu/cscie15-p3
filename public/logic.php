<?php
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
  

