<?php

class ProductsSeeder extends Seeder {

    private $table = 'products';

    public function run() {
        $this->db->truncate($this->table);

        //seed many records using faker
        $limit = 13;
        echo "seeding $limit products";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'name' => $this->faker->unique()->word,
                'category_id' => $this->faker->ipv4,
                'brand_id' => $this->faker->ipv4,
                'model' => $this->faker->unique()->word,
                'tag_line' => $this->faker->unique()->word,
                'features' => $this->faker->unique()->word,
                'price' => $this->faker->unique()->word,
                'qty_at_hand' => $this->faker->unique()->word,
                'editorial_reviews' => $this->faker->unique()->word,
                'created_from_ip' => $this->faker->ipv4,
                'updated_from_ip' => $this->faker->ipv4,
                'date_created' => $this->faker->date($format = 'Y-m-d'),
                'date_updated' => $this->faker->date($format = 'Y-m-d'),
            );

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}