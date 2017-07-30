<?php

class Migration_Attendances extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'attd_dt' => array(
                'type'=>'DATETIME'
            ),
            'emp_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'attd_status_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'absence_reason' => array(
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
        $this->dbforge->create_table('attendances');
    }

    public function down() {
        $this->dbforge->drop_table('attendances');
    }

}