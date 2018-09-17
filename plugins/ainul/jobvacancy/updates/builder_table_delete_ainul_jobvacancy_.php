<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAinulJobvacancy extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ainul_jobvacancy_');
    }
    
    public function down()
    {
        Schema::create('ainul_jobvacancy_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('description')->nullable();
            $table->date('published_date')->nullable();
            $table->text('company_name');
            $table->string('job_title', 191);
        });
    }
}
