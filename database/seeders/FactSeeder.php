<?php

namespace Database\Seeders;

use App\Models\Fact;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $path = __DIR__ . '/facts.txt';
        foreach ( file( $path ) as $line ) {
            if ( ! $line ) {
                continue;
            }

            Fact::create( [ 'fact' => $line ] );
        }
    }
}
