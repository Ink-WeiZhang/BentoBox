<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends Application
{

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        // load the model
        $this->load->model('Bentoaccessory_model');

        // get food in each category from the model
        $catalogMain = $this->Bentoaccessory_model->getAccessories('1');
        $catalogSushi = $this->Bentoaccessory_model->getAccessories('2');
        $catalogSide = $this->Bentoaccessory_model->getAccessories('3');
        $catalogSalad = $this->Bentoaccessory_model->getAccessories('4');

        // get food data for each category
        $mainCells = array();
        $sushiCells = array();
        $sideCells = array();
        $saladCells = array();

        // build an array of formatted cells for them
        foreach ($catalogMain as $food) {
            $mainCells[] = $this->parser->parse('_cell', (array)$food, true);
        }

        foreach ($catalogSushi as $food) {
            $sushiCells[] = $this->parser->parse('_cell', (array)$food, true);
        }

        foreach ($catalogSide as $food) {
            $sideCells[] = $this->parser->parse('_cell', (array)$food, true);
        }

        foreach ($catalogSalad as $food) {
            $saladCells[] = $this->parser->parse('_cell', (array)$food, true);
        }

        // prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class="mx-auto" border="0" cellpadding="10">',
            'cell_start' => '<td class="image">',
            'cell_alt_start' => '<td class="image">'
        );
        $this->table->set_template($parms);

        // generate the table
        $rows = $this->table->make_columns($mainCells, 5);
        $this->data['maintable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($sushiCells, 5);
        $this->data['sushitable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($sideCells, 4);
        $this->data['sidetable'] = $this->table->generate($rows);

        $rows = $this->table->make_columns($saladCells, 5);
        $this->data['saladtable'] = $this->table->generate($rows);

        $this->data['pagebody'] = "catalog";
        $this->render();
    }
}
