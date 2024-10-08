<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table( 'facts', function ( Blueprint $table ) {
            $table->string( 'author' )->default('');
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table( 'facts', function ( Blueprint $table ) {
            $table->dropColumn( 'author' );
        } );
    }
};
