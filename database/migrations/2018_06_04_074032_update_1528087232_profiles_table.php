<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1528087232ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            
if (!Schema::hasColumn('profiles', 'email')) {
                $table->string('email')->nullable();
                }
if (!Schema::hasColumn('profiles', 'blood_group')) {
                $table->string('blood_group')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('blood_group');
            
        });

    }
}
