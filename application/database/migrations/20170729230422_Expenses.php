<?php

class Migration_Expenses extends CI_Migration {

    public function up() {
        // Drop table 'expenses' if it exists
        $this->dbforge->drop_table('expenses', TRUE);  
        
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'exp_title' => array(
                'type' => 'VARCHAR',
                'constaint' => 100
            ),
            'exp_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
            ),
            'exp_amt' => array (
                'type' => 'DECIMAL',
                'constraint' => '10,2'
            ),
            'exp_dt' => array(
                'type' => 'DATETIME'
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
        $this->dbforge->create_table('expenses');
    }

    public function down() {
        $this->dbforge->drop_table('expenses');
    }

}