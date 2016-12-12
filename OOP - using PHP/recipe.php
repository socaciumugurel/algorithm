<?php

class Recipe
{
	private $title;
	public $ingredients = array();
	public $instructions = array();
	public $yield;
	public $tag = array();
	public $source = "Socaciu Mugurel";
	private $measurement = array(
		"tsp",
		"tbsp",
		"cup",
		"oz",
		"lb",
		"fl oz",
		"print",
		"quart",
		"gallon"
		);

	public function __construct($title)
	{
		$this->title = ucwords($title);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addIngredients($item, $amount=null, $measure = null)
	{

		if($amount != null && !is_float($amount) && !is_int($amount)){
			exit("The amount must be a number. <br /> The amount given is: " . gettype($amount));
		}

		if ($measure != null && !in_array($measure, $this->measurement)){
			exit("Please enter a valid measurement: <br/>" . implode(", ", $this->measurement));
		}

		$this->ingredients[] = array(
			"item" => ucwords($item),
			"amount" => $amount,
			"measure" => $measure
			);
	}

	public function getIngredients()
	{
		return $this->ingredients;
	}

	public function addTag($tag)
	{
		$this->tags = $tag;
	}

	public function setYield($yield)
	{
		$this->yield = $yield;
	}

	public function getYield()
	{
		return $this->yield;
	}

	public function setSource($source)
	{
		$this->source = ucwords($source);
	}

	public function getSource()
	{
		return $this->source;
	}


	public function addInstruction($string)
	{
		$this->instructions[] = $string;
	}

	public function getInstructions()
	{
		return $this->instructions;
	}
}


?>