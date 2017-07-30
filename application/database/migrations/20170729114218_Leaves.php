<?php

class Migration_Leaves extends CI_Migration {

    public function up() {
        // Drop table 'leaves' if it exists
        $this->dbforge->drop_table('leaves', TRUE);  
        
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'leave_start_dt' => array(
                'type' => 'DATETIME'
            ),
            'leave_end_dt' => array(
                'type' => 'DATETIME'
            ),
            'leave_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 200
            ),
            'date_updated' =>array(
                'type'=>'DATETIME'
            ),
            'date_created' => array(
                'type'=>'DATETIME'
            ),
            'updated_from_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'created_from_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('leaves');
    }

    public function down() {
        $this->dbforge->drop_table('leaves');
    }

}