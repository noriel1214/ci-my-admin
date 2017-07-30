<?php

class Migration_Allowances extends CI_Migration {

    public function up() {
        // Drop table 'allowances' if it exists
        $this->dbforge->drop_table('allowances', TRUE);  
        
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'allowance_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'allowance_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
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
        $this->dbforge->create_table('allowances');
    }

    public function down() {
        $this->dbforge->drop_table('allowances');
    }

}