<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1528087473ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            
if (!Schema::hasColumn('profiles', 'status')) {
                $table->string('status')->nullable();
                }
if (!Schema::hasColumn('profiles', 'last_donation')) {
                $table->date('last_donation')->nullable();
                }
if (!Schema::hasColumn('profiles', 'location_address')) {
                $table->string('location_address')->nullable();
                $table->double('location_latitude')->nullable();
                $table->double('location_longitude')->nullable();
                }
if (!Schema::hasColumn('profiles', 'details_information')) {
                $table->text('details_information')->nullable();
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
            $table->dropColumn('status');
            $table->dropColumn('last_donation');
            $table->dropColumn('location_address');
            $table->dropColumn('location_latitude');
            $table->dropColumn('location_longitude');
            $table->dropColumn('details_information');
            
        });

    }
}
