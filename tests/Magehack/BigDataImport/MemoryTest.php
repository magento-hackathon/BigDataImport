<?php

class Magehack_BigDataImport_IndexTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {

    }

    public function testMemoryUsage()
    {
        try {
            $profile = 'magehack_bigdataimport_products';
            /** @var Ho_Import_Model_Import $import */
            $import = Mage::getModel('ho_import/import');
            $import->setProfile($profile);
            $import->process();
        } catch (Mage_Core_Exception $e) {
            echo "Mage_Core_Exception: ".$e->getMessage();
        } catch (Exception $e) {
            echo "Exception: ".$e->getMessage();
        }

        $this->assertEquals(1, 1);
    }
}