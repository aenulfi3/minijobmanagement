<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAinulJobvacancy2 extends Migration
{
    public function up()
    {
        Schema::create('ainul_jobvacancy_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('job_title');
            $table->text('description')->nullable();
            $table->date('published_date');
            $table->text('company_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ainul_jobvacancy_');
    }
}
