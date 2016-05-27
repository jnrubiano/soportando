<?php



/**
 * This class defines the structure of the 'module' table.
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
class ModuleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.ModuleTableMap';

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
        $this->setName('module');
        $this->setPhpName('Module');
        $this->setClassname('Module');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('module_id', 'ModuleId', 'INTEGER', true, null, null);
        $this->addForeignKey('package_id', 'PackageId', 'INTEGER', 'package', 'package_id', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Package', 'Package', RelationMap::MANY_TO_ONE, array('package_id' => 'package_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('module_id' => 'module_id', ), 'CASCADE', 'CASCADE', 'Tickets');
    } // buildRelations()

} // ModuleTableMap
