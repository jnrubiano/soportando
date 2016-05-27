<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.UserTableMap';

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
        $this->setName('user');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('uid', 'Uid', 'INTEGER', true, null, null);
        $this->addForeignKey('rid', 'Rid', 'INTEGER', 'rol', 'rid', false, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('login', 'Login', 'VARCHAR', true, 50, null);
        $this->addColumn('pass', 'Pass', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('last_access', 'LastAccess', 'TIMESTAMP', false, null, null);
        $this->addColumn('active', 'Active', 'INTEGER', true, null, 1);
        $this->addColumn('recover_code', 'RecoverCode', 'VARCHAR', false, 255, null);
        $this->addColumn('recover_due', 'RecoverDue', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('rid' => 'rid', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Customer', 'Customer', RelationMap::ONE_TO_MANY, array('uid' => 'uid', ), null, 'CASCADE', 'Customers');
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('uid' => 'engineer_id', ), 'CASCADE', 'CASCADE', 'Tickets');
        $this->addRelation('TicketComment', 'TicketComment', RelationMap::ONE_TO_MANY, array('uid' => 'uid', ), 'CASCADE', 'CASCADE', 'TicketComments');
        $this->addRelation('TicketHistory', 'TicketHistory', RelationMap::ONE_TO_MANY, array('uid' => 'uid', ), 'CASCADE', 'CASCADE', 'TicketHistorys');
    } // buildRelations()

} // UserTableMap
