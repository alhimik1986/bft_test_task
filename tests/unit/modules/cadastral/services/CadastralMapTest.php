<?php


namespace tests\unit\modules\cadastral\services;


use alhimik1986\bftcadastral\services\CadastralMap;

class CadastralMapTest extends \Codeception\Test\Unit
{
    public function testGetFromApi()
    {
        $cadastralNumber = '69:27:0000022:1307';
        $nonexistentCadastralNumber = '69:27:0000022:130742354';
        $cadMap = new CadastralMap();
        $data = $cadMap->getFromApi($cadastralNumber);
        $this->assertNotEmpty($data);
        $this->assertEquals($data['cadastral_number'], $cadastralNumber);

        $data = $cadMap->getFromApi($nonexistentCadastralNumber);
        $this->assertEmpty($data);
    }
}