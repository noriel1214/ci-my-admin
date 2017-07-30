<?php

class Migration_Payslips extends CI_Migration {

    public function up() {
        // Drop table 'payslips' if it exists
        $this->dbforge->drop_table('payslips', TRUE);  
        
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
            ),
            'salary' => array(
                'type' => 'DECIMAL',
                'constraint' => 11
            ),
            'deduction_type_1' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'deduction_amt_1' => array(
                'type' => 'DECIMAL'
            ),
            'deduction_type_2' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'deduction_amt_2' => array(
                'type' => 'DECIMAL'
            ),
            'deduction_type_3' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'deduction_amt_3' => array(
                'type' => 'DECIMAL'
            ),
            'deduction_type_4' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'deduction_amt_4' => array(
                'type' => 'DECIMAL'
            ),
            'allowance_type_1' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'allowance_amt_1' => array(
                'type' => 'DECIMAL'
            ),
            'allowance_type_2' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'allowance_amt_2' => array(
                'type' => 'DECIMAL'
            ),
            'allowance_type_3' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'allowance_amt_3' => array(
                'type' => 'DECIMAL'
            ),
            'allowance_type_4' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
            'allowance_amt_4' => array(
                'type' => 'DECIMAL'
            ),
            'payslip_status' => array(
                'type' => 'INT',
                'constraint' => 11
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
        $this->dbforge->create_table('payslips');
    }

    public function down() {
        $this->dbforge->drop_table('payslips');
    }

}