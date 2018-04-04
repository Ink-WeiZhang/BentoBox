<?php

class Bentobox_model extends CSV_Model
{
    function __construct()
    {
        parent::__construct("../test_data/bentoBoxes.csv", 'code');
    }

    // TODO: don't know how this works, so it's not fixed
    public function getBentoBoxes() {
        $bentoBoxes = [];
        foreach($this->all() as $e) {
            $data = $e->data;
            $accessories = [];

            foreach(explode("A", $data["accessories"]) as $a) {
                if(strlen($a) == 0)
                    continue;

                array_push($accessories, (int)$a);
            }

            $data["accessories"] = $accessories;
            $data["code"] = (int)$data["code"];
            array_push($bentoBoxes, $data);
        }

        return $bentoBoxes;
    }

    /**
     * Return the bento box with the specific code.
     *
     * @param string $code      the code of the bento box
     * @return mixed|null       the bento box that's returned
     */
    public function getBentoBox($code) {
        foreach($this->getBentoBoxes() as $b) {
            if($b["code"] == $code)
                return $b;
        }

        return null;
    }

    public function saveBentoBox($bentoBox) {
        //To be implemented later.
    }
}