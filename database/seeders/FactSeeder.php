<?php

namespace Database\Seeders;

use App\Models\Fact;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Fact::create( [ 'fact' => 'woisjawel' ] );
    }
}
