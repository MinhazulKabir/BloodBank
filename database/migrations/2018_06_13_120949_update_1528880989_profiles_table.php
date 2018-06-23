<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1528880989ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            if(Schema::hasColumn('profiles', 'location_address')) {
                $table->dropColumn('location_address');
                $table->dropColumn('location_latitude');
                $table->dropColumn('location_longitude');
            }
            
        });
Schema::table('profiles', function (Blueprint $table) {
            
if (!Schema::hasColumn('profiles', 'location')) {
                $table->string('location')->nullable();
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
            $table->dropColumn('location');
            
        });
Schema::table('profiles', function (Blueprint $table) {
                        $table->string('location_address')->nullable();
                $table->double('location_latitude')->nullable();
                $table->double('location_longitude')->nullable();
                
        });

    }
}
