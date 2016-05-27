<?php



/**
 * This class defines the structure of the 'customer' table.
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
class CustomerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.CustomerTableMap';

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
        $this->setName('customer');
        $this->setPhpName('Customer');
        $this->setClassname('Customer');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('cid', 'Cid', 'INTEGER', true, null, null);
        $this->addColumn('tel', 'Tel', 'VARCHAR', false, 255, null);
        $this->addColumn('cel', 'Cel', 'VARCHAR', false, 255, null);
        $this->addForeignKey('uid', 'Uid', 'INTEGER', 'user', 'uid', true, null, null);
        $this->addForeignKey('company_id', 'CompanyId', 'INTEGER', 'company', 'company_id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Company', 'Company', RelationMap::MANY_TO_ONE, array('company_id' => 'company_id', ), null, 'CASCADE');
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('uid' => 'uid', ), null, 'CASCADE');
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('cid' => 'cid', ), 'CASCADE', 'CASCADE', 'Tickets');
    } // buildRelations()

} // CustomerTableMap
