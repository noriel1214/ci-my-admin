<?php

class Migration_Payslips extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'emp_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'pay_month' =>array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'pay_year' => array(
                'type' => 'INT',
                'constraint' => 11
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('payslips');
    }

    public function down() {
        $this->dbforge->drop_table('payslips');
    }

}