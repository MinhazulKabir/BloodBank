<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1528363074BlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            if(Schema::hasColumn('blogs', 'blog_picture')) {
                $table->dropColumn('blog_picture');
            }
            if(Schema::hasColumn('blogs', 'header')) {
                $table->dropColumn('header');
            }
            
        });
Schema::table('blogs', function (Blueprint $table) {
            
if (!Schema::hasColumn('blogs', 'blog_picture')) {
                $table->string('blog_picture')->nullable();
                }
if (!Schema::hasColumn('blogs', 'head_line')) {
                $table->string('head_line')->nullable();
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
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('blog_picture');
            $table->dropColumn('head_line');
            
        });
Schema::table('blogs', function (Blueprint $table) {
                        $table->string('blog_picture')->nullable();
                $table->string('header')->nullable();
                
        });

    }
}
