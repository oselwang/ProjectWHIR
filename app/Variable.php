<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $table = 'variables';
    protected $fillable = ['user_id', 'patientname', 'age', 'education', 'housing','occupation','marital', 'dietarypattern', 'ethnic', 'province', 'menstrualstate', 'weight', 'height', 'waist', 'neck',
        'hip', 'smokingstate', 'paritalstate', 'pregnant', 'birthcontrol', 'birthcontrolstate', 'hrt', 'hrtwhen', 'dietpill', 'dietpillwhen', 'historyofmi', 'historyoftia', 'historyofpvd',
        'dailyactivity', 'bloodpressure', 'restingheartrate', 'af', 'iskemik', 'lah', 'rah', 'lvh', 'rvh', 'rbbb', 'lbbb', 'avblock', 'sablock', 'otherarrhythmias', 'hemoglobin', 'bloodglucose',
        'hba1c', 'lipid', 'fastingtriglyceride', 'hdlcholesterol', 'creatinine', 'microalbuminuria', 'uricacid', 'pcos', 'lahecg', 'rahecg', 'lvhecg', 'rvhecg', 'phecg', 'ladecg', 'ivsdecg',
        'lveddecg', 'rvdecg', 'lvefecg', 'tapseecg', 'tvgecg', 'eaecg', 'abnormalwallmotionecg', 'regurgitation','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function owned($user_id){
        return $this->user_id == $user_id;
    }
}
