<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('setting_name')->unique();
            $table->string('setting_value');
            $table->timestamps();
        });

        DB::table('settings')->insert(
            array(
                ['setting_name'=> 'hospital_name','setting_value'=> 'จังหวัดพิจิตร','created_at'=> date("Y-m-d H:i:s"),'updated_at'=> date("Y-m-d H:i:s")],
                ['setting_name'=> 'hospital_code','setting_value'=> '66000','created_at'=> date("Y-m-d H:i:s"),'updated_at'=> date("Y-m-d H:i:s")]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
