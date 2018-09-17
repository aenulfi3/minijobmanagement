<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAinulJobvacancy3 extends Migration
{
    public function up()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->date('created_at')->nullable()->unsigned(false)->default(null)->change();
            $table->date('updated_at')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->timestamp('created_at')->nullable()->unsigned(false)->default(null)->change();
            $table->timestamp('updated_at')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
