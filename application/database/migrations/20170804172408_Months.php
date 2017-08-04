<?php

class Migration_Months extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'month_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 25
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('months');
        

        $data = array(
            array('id' => '1',
            'month_name' => 'January'),
            array('id' => '2',
            'month_name' => 'February'),
            array('id' => '3',
            'month_name' => 'March'),
            array('id' => '4',
            'month_name' => 'April'),
            array('id' => '5',
            'month_name' => 'May'),
            array('id' => '6',
            'month_name' => 'June'),
            array('id' => '7',
            'month_name' => 'July'),
            array('id' => '8',
            'month_name' => 'August'),
            array('id' => '9',
            'month_name' => 'September'),
            array('id' => '10',
            'month_name' => 'October'),
            array('id' => '11',
            'month_name' => 'November'),
            array('id' => '12',
            'month_name' => 'December')
         );
         //$this->db->insert('user_group', $data); I tried both
         $this->db->insert_batch('months', $data);
        
    }

    public function down() {
        $this->dbforge->drop_table('months');
    }

}