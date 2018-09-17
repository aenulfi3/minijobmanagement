<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAinulJobvacancy extends Migration
{
    public function up()
    {
        Schema::create('ainul_jobvacancy_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('published_date')->nullable();
            $table->text('company_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ainul_jobvacancy_');
    }
}
