<?php
use PHPUnit\Framework\TestCase;

class BentoBoxTest  extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Bentobox_model');
        $this->CI->load->model('Accessory_model');
        $this->bbox = new Bentobox_model();
    }

    function testBentoBoxIsComplete() {
        $this->assertNotNull($this->bbox, "Bentobox Object not set up");
    }
}