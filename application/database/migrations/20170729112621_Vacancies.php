<?php

class Migration_Vacancies extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'vacancy_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'vacancy_desc' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'dept_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'pos_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'last_appl_dt' => array(
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
        $this->dbforge->create_table('vacancies');
    }

    public function down() {
        $this->dbforge->drop_table('vacancies');
    }

}