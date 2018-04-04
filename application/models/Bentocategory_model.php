<?php

class Bentocategory_model extends CSV_Model
{
	function __construct()
	{
		parent::__construct("../test_data/category.csv", 'code');
	}

    /**
     * Return all accessory categories.
     *
     * @return array    all accessory categories
     */
    public function getCategories() {
        $categories = $this->all();
        return $categories;
    }

    //Adds new category, ie:
    //$this->Bentocategory_model->addCategory(["code" => 2, "name" => "asdf"]);
    public function addCategory($category) {
        //To be implemented later.
	}
}