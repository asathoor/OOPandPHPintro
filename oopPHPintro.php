<?php
/* OOP class php sample */

// here's a class
class myClass {
	public $hey = "I am the class property hey.<br>"; // a class property

	// class methods (functions)
	public function setvalue($value){
		$this->prop1 = $value;
	}

	// print out a property method
	public function out(){
		print "<h1> $this->hey </h1>";
	}

	// if you name a function __construct it will fire off when your class initiates
	public function __construct(){
		echo "The class " . __CLASS__ . " just started...<br>";
	}

	// likewise you may want to fire of a function if you destroy the class
	public function __destruct(){
		echo "The class " . __CLASS__ . " was destroyed.<br>";
	}
}

// in order to use the class make an instance of it
$inst = new myClass;

echo $inst->hey; // echo the property

$inst->setvalue("So I can set the value of a variable inside the class.<br>"); // fire off the function or rather method of the class

echo $inst->prop1; // and echo the content of the var prop1
$inst->out(); // use the out print method of the class



/* EXERCISE PLAN AND USE  OOP AND PHP */


class exercise {

	public function __construct() {
		print "<h3>EXERCISE</h3>
			<p>
			Create a class that can format the header section of a webpage.
			Do some SEO stuff, so that the title, meta and h? tags
			are usable by e.g. Google's robots & friends.
			</p>
			<ul>
				<li>a) Draw a model of your class. Give the class a name, properties and methods.</li>
				<li>b) Write the class in php.</li>
				<li>c) What is the difference between a public, private and protected object, method or propertie?</li>
			</ul>

			<h3>CONTEMPLATE THIS</h3>
			<ol>
				<li>How about OOP and JavaScript?</li>
				<li>How can you construct a class in a JavaScript?</li>
			</ol>";
	}

}

// $x = new exercise;

?>
