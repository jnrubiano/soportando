<?php



/**
 * This class defines the structure of the 'ticket_comment' table.
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
class TicketCommentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'Soportando.map.TicketCommentTableMap';

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
        $this->setName('ticket_comment');
        $this->setPhpName('TicketComment');
        $this->setClassname('TicketComment');
        $this->setPackage('Soportando');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ticket_comment_id', 'TicketCommentId', 'INTEGER', true, null, null);
        $this->addForeignKey('ticket_id', 'TicketId', 'INTEGER', 'ticket', 'ticket_id', true, null, null);
        $this->addForeignKey('uid', 'Uid', 'INTEGER', 'user', 'uid', true, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ticket', 'Ticket', RelationMap::MANY_TO_ONE, array('ticket_id' => 'ticket_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('uid' => 'uid', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TicketCommentTableMap
