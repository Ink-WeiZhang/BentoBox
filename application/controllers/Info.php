<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends Application
{

	/**
	 * Returns the scenario of the application
     * { "scenario" : "bentobox" }
	 * @return scenario
	 */
	public function index()
	{
        // encode json
        $return = json_encode(array("scenario" => "BentoBox Customizer"));

        // output json
        $this->output->set_content_type('application/json');
        $this->output->set_output($return);
	}

	/*
	 * Return the designated category
	 * or all of them if none is specifically requested
	 *
	 * @params categoryId
	 * @return one category or all categories
	 */
	public function category($key = null)
    {
        if (is_null($key))
        {
            $return = $this->Bentocategory_model->getCategories();
        }

        //need to implement single category once method is added to category controller
        $return = json_encode([]);

        $this->output->set_content_type('application/json');
        $this->output->set_output($return);
    }

    /*
     * Return the designated accesory
     * or all of them if none is specifically requested
     *
     * @params accesoryId
     * @return one accessory or all accessories
     */
    public function catalog($key = null)
    {
        if (is_null($key))
        {
            $return = $this->Bentoaccesory_model->getAccesories();
        }

        $return = $this->Bentoaccesory_model->getAccesory($key);

        $this->output->set_content_type('application/json');
        $this->output->set_output($return);
    }

    /*
     * Return the designated category
     * or all of them if none is specifically requested
     *
     * @params categoryId
     * @return one category or all categories
     */
    public function bundle($key = null)
    {
        if (is_null($key))
        {
            $return = $this->Bentocategory_model->getCategories();
        }

        //need to implement single category once method is added to category controller
        $return = json_encode([]);

        $this->output->set_content_type('application/json');
        $this->output->set_output($return);
    }

}
