<?php

class navBarItem {

	private $file;
	private $name;
	private $active;

	public function __construct($file, $name){

		$this->file = $file;
		$this->name = $name;
		$this->active = false;

	}

	public function __get($property){

		switch($property){

			case "file" :
			case "name" :
			case "active" :

				return $this->$property;
				break;

			default :

				//throw new Exception(__FILE__."\r\n".__LINE__."\r\n".__CLASS__."\r\n".__METHOD__."\r\n"."Lecture ".__CLASS__."->$propriete impossible");
				return null;
				break;

		}

	}

	public function __set($property, $value){

		switch($property){

			case "file":
			case "name":

				$this->$property = $value;
				break;

			case "active" :

				if (is_bool($value)){

					//echo "is_bool";
					$this->$property = $value;
					break;

				} else {

					//throw new Exception(__FILE__."\r\n".__LINE__."\r\n".__CLASS__."\r\n".__METHOD__."\r\n"."Lecture ".__CLASS__."->$propriete impossible");
					return null;
					break;

				}

			default :

				//throw new Exception(__FILE__."\r\n".__LINE__."\r\n".__CLASS__."\r\n".__METHOD__."\r\n"."Lecture ".__CLASS__."->$propriete impossible");
				return null;
				break;

		}
	}

	public function toString(){

		$active = "";

		if ($this->active) {

			$active = " class='active'";

		}

		//return "<li" . $active . "><a href='/Extended_Pixel_Dungeon/src/" . $this->file . "'>" . $this->name . "</a></li>";
		return "<li" . $active . "><a href='/Extended_Pixel_Dungeon/src?name=" . $this->name . "'/>" . $this->name . "</a></li>";

	}
}


?>