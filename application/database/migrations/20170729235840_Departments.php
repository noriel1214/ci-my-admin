<?php

class Migration_Departments extends CI_Migration {

    public function up() {
        // Drop table 'departments' if it exists
        $this->dbforge->drop_table('departments', TRUE);  
        
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'dept_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'dept_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'date_updated' =>array(
                'type'=>'DATETIME'
            ),
            'date_created' => array(
                'type'=>'DATETIME'
            ),
            'updated_from_ip' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'created_from_ip' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('departments');
    }

    public function down() {
        $this->dbforge->drop_table('departments');
    }

}