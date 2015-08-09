<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use SisPol\Entities;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


        $this->truncateTables(array(
            'users',
            'password_resets',
            'informes',
            'informe_status',
        ));

        $this->call(UserTableSeeder::class);
        //$this->call(InformeTableSeeder::class);
        //$this->call(InformeStatuTableSeeder::class);

        Model::reguard();
	}

    private function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        $this->checkForeignKeys(true);
    }

    private function checkForeignKeys($check)
    {
        $check = $check ? '1' : '0';
        DB::statement("SET FOREIGN_KEY_CHECKS = $check;");
    }


}
