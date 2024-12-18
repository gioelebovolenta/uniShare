<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTableLastNameAndRole extends Migration
{
    /**
     * Esegui la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Aggiungi i nuovi campi
            $table->string('last_name')->after('name');
            $table->enum('role', ['admin', 'user', 'guest'])->default('user')->after('email');
        });
    }

    /**
     * Annulla la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Rimuovi le colonne aggiunte nel caso di rollback
            $table->dropColumn(['first_name', 'last_name', 'role']);
        });
    }
}
