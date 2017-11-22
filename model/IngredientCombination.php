<?php
/**
 * Created by PhpStorm.
 * User: Jennifer Hauss
 * Date: 20.11.2017
 * Time: 13:14
 */

class IngredientCombination
{

    /**
     * @var Ingredient
     */
    public $ingredient;

    /**
     * @var float
     */
    public $amount = 0.0;

    /**
     * @return Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param Ingredient $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


}