<!-- ######################################################
	Author : Giric Goyal 

	Illustration of:
		- working with mysql database, php and javascript
		- plotting on maps
	
###########################################################-->

<?php
	// this is just the back end (server side).
	// First the php script executes at server side.
	// After completion, php calls the html at client side.
	
	// Note: The page is named as "index.php"
	// "index" allows you to ommit the page name in the URL.
	// "http://localhost/webTest" is same as "http://localhost/webTest/index.php"
	// ".php" specifies the type of page. Should be ".php" and not ".html"

	// Container class (datastructure to hold data from the database)
	class Container {
		// public data members
		public $name = "";
		public $lat = 0.0;
		public $lon = 0.0;

		// constructor
		function __construct($name, $lat, $lon) {
			$this->name = $name;
			$this->lat = $lat;
			$this->lon = $lon;
		}
	}

	// create Container class array to hold data
	$cArray = [];	// Use this cArray to access the lat lon; Accessed in HTML file (mapTest.html)
	$counter = 0; //counter

	// open the text file. Use file_get_contents to get the contents of a file or webpage.
	// gets all the data from the file.
	$file = file_get_contents("data.txt");

	// Use explode() to split an array into chunks. The first parameter is the delimiter and the second is the array.
	// divide into lines.
	$line = explode("\n", $file);

	// iterate over the lines
	for ($i = 0; $i < count($line); $i++) {
		// divide by "\t"
		$chunks = explode("\t", $line[$i]);
		// populate the database.
		$cArray[$counter++] = new Container($chunks[0], $chunks[1], $chunks[2]);
	}

	// include the html page to display the front end (client side).
	include "mapTest.html";

?>
