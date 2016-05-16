<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('patientname');
            $table->string('age');
            $table->string('education');
            $table->string('housing');
            $table->string('occupation');
            $table->string('marital');
            $table->string('dietarypattern');
            $table->string('ethnic');
            $table->string('province');
            $table->string('menstrualstate')->nullable();
            $table->string('weight');
            $table->string('height');
            $table->string('waist');
            $table->string('neck');
            $table->string('hip');
            $table->string('smokingstate')->nullable();
            $table->string('paritalstate')->nullable();
            $table->string('pregnant')->nullable();
            $table->string('birthcontrol')->nullable();
            $table->string('birthcontrolstate')->nullable();
            $table->string('hrt')->nullable();
            $table->string('hrtwhen');
            $table->string('dietpill')->nullable();
            $table->string('dietpillwhen');
            $table->string('historyofmi')->nullable();
            $table->string('historyoftia')->nullable();
            $table->string('historyofpvd')->nullable();
            $table->string('dailyactivity')->nullable();
            $table->string('bloodpressure')->nullable();
            $table->string('restingheartrate')->nullable();
            $table->string('af');
            $table->string('iskemik');
            $table->string('lah');
            $table->string('rah');
            $table->string('lvh');
            $table->string('rvh');
            $table->string('rbbb');
            $table->string('lbbb');
            $table->string('avblock');
            $table->string('sablock');
            $table->string('otherarrhythmias');
            $table->string('hemoglobin')->nullable();
            $table->string('bloodglucose')->nullable();
            $table->string('hba1c')->nullable();
            $table->string('lipid')->nullable();
            $table->string('fastingtriglyceride')->nullable();
            $table->string('hdlcholesterol')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('microalbuminuria')->nullable();
            $table->string('uricacid')->nullable();
            $table->string('pcos')->nullable();
            $table->string('lahecg');
            $table->string('rahecg');
            $table->string('lvhecg');
            $table->string('rvhecg');
            $table->string('phecg');
            $table->string('ladecg');
            $table->string('ivsdecg');
            $table->string('lveddecg');
            $table->string('rvdecg');
            $table->string('lvefecg');
            $table->string('tapseecg');
            $table->string('tvgecg')->nullable();
            $table->string('eaecg');
            $table->string('abnormalwallmotionecg');
            $table->string('regurgitation');
            $table->string('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('variables');
    }
}
