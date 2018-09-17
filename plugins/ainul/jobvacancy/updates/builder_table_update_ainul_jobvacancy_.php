<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAinulJobvacancy extends Migration
{
    public function up()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->string('job_title');
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->dropColumn('job_title');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 191);
        });
    }
}
