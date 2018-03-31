<?php

class Accessory_model extends Entity
{
    // all accessory attributes must be present
    protected $code;
    protected $name;
    protected $category;
    protected $image;
    protected $price;
    protected $calories;
    protected $weight;
    protected $presentation;

    // code must be a positive integer
    public function setCode($value) {
        if (empty($value)) {
            throw new Exception('Code cannot be empty');
        }
        if (!is_int($value) || $value < 1) {
            throw new Exception('Code must be a positive integer');
        }
        $this->code = $value;
        return $this;
    }

    // name must be alphabetic
    public function setName($value) {
        if (empty($value)) {
            throw new Exception('Name cannot be empty');
        }
        if (!ctype_alpha(str_replace(' ', '', $value))) {
            throw new Exception('Name must be alphabetic');
        }
        $this->name = $value;
        return $this;
    }

    // name must be an integer between 1 and 4, inclusive
    public function setCategory($value) {
        if (empty($value)) {
            throw new Exception('Category cannot be empty');
        }
        if (!is_int($value) || $value < 1 || $value > 4) {
            throw new Exception('Category must be a number from 1 to 4');
        }
        $this->category = $value;
        return $this;
    }

    // image must be a file name with the png extension
    public function setImage($value) {
        if (empty($value)) {
            throw new Exception('Image cannot be empty');
        }
        if (!ctype_alnum(str_replace(' ', '', $value))) {
            throw new Exception('Image must be alphanumeric');
        }
        $this->image = $value;
        return $this;
    }

    // price must be a positive number
    public function setPrice($value) {
        if (empty($value)) {
            throw new Exception('Price cannot be empty');
        }
        if (!is_numeric($value) || $value < 1) {
            throw new Exception('Price must be a positive number');
        }
        $this->price = $value;
        return $this;
    }

    // calories must be a positive integer
    public function setCalories($value) {
        if (empty($value)) {
            throw new Exception('Calories cannot be empty');
        }
        if (!is_int($value) || $value < 1) {
            throw new Exception('Calories must be a positive integer');
        }
        $this->calories = $value;
        return $this;
    }

    // weight must be a positive integer
    public function setWeight($value) {
        if (empty($value)) {
            throw new Exception('Weight cannot be empty');
        }
        if (!is_int($value) || $value < 1) {
            throw new Exception('Weight must be a positive integer');
        }
        $this->weight = $value;
        return $this;
    }

    // presentation must be a positive integer between 1 and 10, inclusive
    public function setPresentation($value) {
        if (empty($value)) {
            throw new Exception('Presentation cannot be empty');
        }
        if (!is_int($value) || $value < 1 || $value > 10) {
            throw new Exception('Presentation must be an integer from 1 to 10');
        }
        $this->presentation = $value;
        return $this;
    }
}