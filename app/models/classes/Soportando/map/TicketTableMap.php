<?php



/**
 * This class defines the structure of the 'ticket' table.
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
class TicketTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.TicketTableMap';

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
        $this->setName('ticket');
        $this->setPhpName('Ticket');
        $this->setClassname('Ticket');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ticket_id', 'TicketId', 'INTEGER', true, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reproducibility', 'Reproducibility', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('cid', 'Cid', 'INTEGER', 'customer', 'cid', true, null, null);
        $this->addForeignKey('engineer_id', 'EngineerId', 'INTEGER', 'user', 'uid', true, null, null);
        $this->addForeignKey('ticket_type_id', 'TicketTypeId', 'INTEGER', 'ticket_type', 'ticket_type_id', true, null, null);
        $this->addForeignKey('company_id', 'CompanyId', 'INTEGER', 'company', 'company_id', true, null, null);
        $this->addForeignKey('module_id', 'ModuleId', 'INTEGER', 'module', 'module_id', true, null, null);
        $this->addForeignKey('priority_id', 'PriorityId', 'INTEGER', 'ticket_priority', 'priority_id', true, null, null);
        $this->addForeignKey('ticket_status_id', 'TicketStatusId', 'INTEGER', 'ticket_status', 'ticket_status_id', true, null, 1);
        $this->addColumn('status_date', 'StatusDate', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Company', 'Company', RelationMap::MANY_TO_ONE, array('company_id' => 'company_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Customer', 'Customer', RelationMap::MANY_TO_ONE, array('cid' => 'cid', ), 'CASCADE', 'CASCADE');
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('engineer_id' => 'uid', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Module', 'Module', RelationMap::MANY_TO_ONE, array('module_id' => 'module_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('TicketPriority', 'TicketPriority', RelationMap::MANY_TO_ONE, array('priority_id' => 'priority_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('TicketStatus', 'TicketStatus', RelationMap::MANY_TO_ONE, array('ticket_status_id' => 'ticket_status_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('TicketType', 'TicketType', RelationMap::MANY_TO_ONE, array('ticket_type_id' => 'ticket_type_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('TicketComment', 'TicketComment', RelationMap::ONE_TO_MANY, array('ticket_id' => 'ticket_id', ), 'CASCADE', 'CASCADE', 'TicketComments');
        $this->addRelation('TicketHistory', 'TicketHistory', RelationMap::ONE_TO_MANY, array('ticket_id' => 'ticket_id', ), 'CASCADE', 'CASCADE', 'TicketHistorys');
    } // buildRelations()

} // TicketTableMap
