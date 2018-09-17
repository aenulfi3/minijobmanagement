<?php namespace Ainul\JobVacancy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAinulJobvacancy4 extends Migration
{
    public function up()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->text('company_email');
        });
    }
    
    public function down()
    {
        Schema::table('ainul_jobvacancy_', function($table)
        {
            $table->dropColumn('company_email');
        });
    }
}
