<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for PHPRtfLite_Table_Row.
 */
class PHPRtfLite_Table_RowTest extends TestCase
{
    /**
     * @var PHPRtfLite_Table
     */
    private $_table;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() : void
    {
        $rtf = new PHPRtfLite;
        $this->_table = $rtf->addSection()->addTable();
    }

    /**
     * tests getCellByIndex
     * @return void
     */
    public function testGetCellByIndex()
    {
        $this->_table->addRow(5);
        $row = $this->_table->getRow(1);
        $this->assertInstanceOf('PHPRtfLite_Table_Cell', $row->getCellByIndex(5));
    }

}
