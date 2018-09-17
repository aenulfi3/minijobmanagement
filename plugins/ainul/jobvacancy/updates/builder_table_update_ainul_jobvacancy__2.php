<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAinulJobvacancy2 extends Migration
{
    public function up()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->string('job_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->string('job_title', 191)->change();
        });
    }
}
