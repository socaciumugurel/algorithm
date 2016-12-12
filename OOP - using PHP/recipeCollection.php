<?php

	class RecipeCollection
	{
		private $title = null;

		private $recipes = array();

		function __construct($title){
			$this->title = $title;
		}

		public function addRecipe($recipe){
			$this->recipes[] = $recipe;
		}

		public function getTitle(){
			foreach($this->recipes as $item)
				echo Render::displayTitle($item->getTitle());
		}

		public function getRecipes(){
			echo $this->title . "<br/>";
			foreach($this->recipes as $item){
				echo Render::displayRecipe($item);
				echo "<br/><br/>";
			}
		}




	}

?>