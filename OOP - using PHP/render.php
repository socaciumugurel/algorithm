<?php

include ("recipe.php");

class Render
{

		public static function listIngredients($ingredients){
				$ingredientList = array();
			foreach ($ingredients as $item){
				$ingredientList[] = $item['item'];
			}

			$output = implode(", ", $ingredientList);

			return $output;
		}

		public static function displayTitle($title){
			return $title;
		}

		public static function displayRecipe($recipe){
					$output =  $recipe->getTitle() . " by " . $recipe->getSource() . "<br/>";
					$output .= "Ingredients: " . self::listIngredients($recipe->getIngredients());
					return $output;
				
		}


}


?>