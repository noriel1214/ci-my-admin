<?php

class Migration_Awards extends CI_Migration {

    public function up() {
        // Drop table 'awards' if it exists
        $this->dbforge->drop_table('awards', TRUE);  
        
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'award_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'gift' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'gift_amt' => array(
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ),
            'emp_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'award_dt' => array(
                'type' => 'DATETIME'
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
        $this->dbforge->create_table('awards');
    }

    public function down() {
        $this->dbforge->drop_table('awards');
    }

}