<?php
	class Monster {
		
		public $num_of_eyes;
		public $colour;

		function __construct($num, $col) { 
			$this->num_of_eyes = $num;
			$this->colour = $col;
			

		}

	
		function describe () {
			$ans = "The ". $this->colour. " monster has ". $this->num_of_eyes. " eyes."; 
			return $ans;
		} 
	}
?>