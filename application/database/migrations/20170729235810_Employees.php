<?php

class Migration_Employees extends CI_Migration {

    public function up() {
        // Drop table 'employees' if it exists
        $this->dbforge->drop_table('employees', TRUE);  
        
         $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'fname' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'lname' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),  
            'mname' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'suffix' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'contact_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'birthday' => array(
                'type' => 'DATETIME'
            ),
            'gender' => array(
                'type' => 'CHAR',
                'constraint' => 1
            ),             
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),             
            'addrline1' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),             
            'addrline2' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
             'barrio' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
             'citytown' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
             'province' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
             'country' => array(
                'type' => 'VARCHAR',
                'constraint' => 30
            ),
             'zip' => array(
                'type' => 'VARCHAR',
                'constraint' => 15
            ),
             'nationality' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
             'maritalstatus' => array(
                'type' => 'INT',
                 'constraint' => 11
            ),
             'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
             'dept_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
             'designation_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'hire_date' => array(
                'type' => 'DATETIME'
            ),
                'starting_salary' => array(
                'type' => 'DECIMAL'
            ),
                'emp_status' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
                'acct_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
                'acct_no' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
                'bank_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
                'branch_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
                'date_updated' => array(
                'type' => 'DATETIME'
            ),
                'date_created' => array(
                'type' => 'DATETIME'
            ),
                'updated_from_ip' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
                'created_from_ip' => array(
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
        $this->dbforge->create_table('employees');
    }

    public function down() {
        $this->dbforge->drop_table('employees');
    }

}