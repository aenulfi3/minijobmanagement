<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAinulJobvacancy3 extends Migration
{
    public function up()
    {
        Schema::create('ainul_jobvacancy_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('job_title');
            $table->text('description')->nullable();
            $table->text('company_name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ainul_jobvacancy_');
    }
}
