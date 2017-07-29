<?php

class Migration_Positions extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'pos_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'pos_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('positions');
    }

    public function down() {
        $this->dbforge->drop_table('positions');
    }

}