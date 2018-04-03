<?php
use PHPUnit\Framework\TestCase;

class AccessoryTest extends TestCase {

    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('Accessory_model');
        $this->item = new Accessory_model();
        $this->item->setCalories(100);
        $this->item->setCategory(2);
        $this->item->setCode(1);
        $this->item->setImage("dog.jpg");
        $this->item->setName("Mystery Meat");
        $this->item->setWeight(200);
        $this->item->setPrice(10);
        $this->item->setPresentation(5);
    }

    function testSetUp() {
        $this->assertEquals(100, $this->item->getCalories());
        $this->assertEquals(2, $this->item->getCategory());
        $this->assertEquals(1, $this->item->getCode());
        $this->assertEquals("dog.jpg", $this->item->getImageName());
        $this->assertEquals("Mystery Meat", $this->item->getName());
        $this->assertEquals(200, $this->item->getWeight());
        $this->assertEquals(10, $this->item->getPrice());
        $this->assertEquals(5, $this->item->getPresentation());

    }

    function testCode() {
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setCode(-1);
    }

    function testCalories(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setCalories(-1);
    }

    function testCategory(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setCategory(5);
    }

    function testImageName(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setImage("@#$%");
    }

    function testName(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setName("@#$%");
    }

    function testWeight(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setWeight(-1);
    }


    function testPrice(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setPrice(-1);
    }


    function testPresentation(){
        $this->badBento = new Accessory_model();
        $this->expectException(Exception::class);
        $this->badBento->setPresentation(-1);
    }



}