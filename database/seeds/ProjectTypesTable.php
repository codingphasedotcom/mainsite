<?php

use Illuminate\Database\Seeder;

class ProjectTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('project_types')->insert([
        [
          'name' => 'Paid',
        ],
        [
          'name' => 'Free',
        ],
        [
          'name' => 'Educational',
        ],
      ]);
    }
}
