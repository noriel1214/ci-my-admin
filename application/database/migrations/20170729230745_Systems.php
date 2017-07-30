<?php

class Migration_Systems extends CI_Migration {

    public function up() {
        // Drop table 'systems' if it exists
        $this->dbforge->drop_table('systems', TRUE);  

        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'sys_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'sys_title' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'sys_addr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'sys_phone' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'sys_email' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'sys_lang' => array(
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
        $this->dbforge->create_table('systems');
    }

    public function down() {
        $this->dbforge->drop_table('systems');
    }

}