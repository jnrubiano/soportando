<?php



/**
 * This class defines the structure of the 'engineer' table.
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
class EngineerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.EngineerTableMap';

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
        $this->setName('engineer');
        $this->setPhpName('Engineer');
        $this->setClassname('Engineer');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('engineer_id', 'EngineerId', 'INTEGER', true, null, null);
        $this->addForeignKey('uid', 'Uid', 'INTEGER', 'user', 'uid', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('specialty', 'Specialty', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('uid' => 'uid', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('engineer_id' => 'engineer_id', ), 'CASCADE', 'CASCADE', 'Tickets');
    } // buildRelations()

} // EngineerTableMap
