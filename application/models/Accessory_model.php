<?php

class Accessory_model extends Entity
{
    // all accessory attributes must be present
    protected $code;
    protected $name;
    protected $category;
    protected $image; // represents the image name
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

    // food name can only have letters, spaces and hyphens
    // spaces and hyphens are not allowed as the first character of the filename
    public function setName($value) {
        if (empty($value)) {
            throw new Exception('Food name cannot be empty');
        }
        if (preg_match('^[a-zA-z][a-zA-z- ]*\.(jpg|png)$', $value) === 0) {
            throw new Exception('Food name can only have letters, spaces and hyphens. Spaces and hyphens are not allowed as the first character of the filename.');
        }
        $this->name = $value;
        return $this;
    }

    // category must be an integer in the range of 1 to 4
    public function setCategory($value) {
        if (empty($value)) {
            throw new Exception('Category cannot be empty');
        }
        if (!is_int($value) || $value < 1 || $value > 4) {
            throw new Exception('Category must be an integer in the range of 1 to 4');
        }
        $this->category = $value;
        return $this;
    }

    // image filename can only have alphanumeric characters, spaces and hyphens, and end in either .jpg or .png
    //  spaces and hyphens are not allowed as the first character of the filename
    public function setImage($value) {
        if (empty($value)) {
            throw new Exception('Image filename cannot be empty');
        }
        if (preg_match('^[a-zA-z0-9][a-zA-z0-9- ]*\.(jpg|png)$', $value) === 0) {
            throw new Exception('Image filename is not valid. The filename can only have alphanumeric characters, spaces and hyphens, and end in either .jpg or .png. Spaces and hyphens are not allowed as the first character of the filename');
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

    // presentation must be a positive integer in the range of 1 to 4
    public function setPresentation($value) {
        if (empty($value)) {
            throw new Exception('Presentation cannot be empty');
        }
        if (!is_int($value) || $value < 1 || $value > 10) {
            throw new Exception('Presentation must be an integer in the range of 1 to 10');
        }
        $this->presentation = $value;
        return $this;
    }
}