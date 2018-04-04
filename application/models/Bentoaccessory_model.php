<?php

class Bentoaccessory_model extends CSV_Model
{
    function __construct()
    {
        parent::__construct('../test_data/accessories.csv', 'code');
    }

    /**
     * Return all or a category of accessories.
     *
     * @param null $category    the category code. null = get all accessories
     * @return array            the array of accessories
     */
    public function getAccessories($category = null) {
        if($category == null) {
            $accessories = $this->all();
            return $accessories;
        } else {
            $accessories = $this->some('category', $category);
            return $accessories;
        }
    }

    /**
     * Return the accessory with a specific code.
     *
     * @param string $code  the accessory code
     * @return mixed        the accessory that's returned
     */
    public function getAccessory($code) {
        return $this->get($code);
    }
}