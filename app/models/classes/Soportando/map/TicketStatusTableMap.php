<?php



/**
 * This class defines the structure of the 'ticket_status' table.
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
class TicketStatusTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.TicketStatusTableMap';

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
        $this->setName('ticket_status');
        $this->setPhpName('TicketStatus');
        $this->setClassname('TicketStatus');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ticket_status_id', 'TicketStatusId', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ticket', 'Ticket', RelationMap::ONE_TO_MANY, array('ticket_status_id' => 'ticket_status_id', ), 'CASCADE', 'CASCADE', 'Tickets');
        $this->addRelation('TicketHistory', 'TicketHistory', RelationMap::ONE_TO_MANY, array('ticket_status_id' => 'ticket_status_id', ), 'CASCADE', 'CASCADE', 'TicketHistorys');
    } // buildRelations()

} // TicketStatusTableMap
