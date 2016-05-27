<?php



/**
 * This class defines the structure of the 'company' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.Soportando.map
 */
class CompanyTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.CompanyTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('company');
        $this->setPhpName('Company');
        $this->setClassname('Company');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('company_id', 'CompanyId', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Customer', 'Customer', RelationMap::ONE_TO_MANY, array('company_id' => 'company_id', ), null, 'CASCADE', 'Customers');
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('company_id' => 'company_id', ), 'CASCADE', 'CASCADE', 'Tickets');
    } // buildRelations()

} // CompanyTableMap
