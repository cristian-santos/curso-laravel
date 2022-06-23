<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * Executar: php artisan migrate:rollback
     * Executar: php artisan migrate:rollback --step=2
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
        // $table->dropColumn('uf');
        // $table->dropColumn('email');
        $table->dropColumn('uf', 'email');
        });
    }
};
