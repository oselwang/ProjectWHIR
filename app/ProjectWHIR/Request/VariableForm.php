<?php
/**
 * Created by PhpStorm.
 * User: oselwang
 * Date: 5/14/16
 * Time: 1:49 AM
 */

namespace App\ProjectWHIR\Request;


use App\Variable;
use Auth;

class VariableForm extends Form
{
    public function create()
    {
        $variable = new Variable();

        $all = \Request::all();
        $status = '';
        if ( in_array("", $all) || in_array(null, $all) ) {
            if ( $this->fields('hrt') == 'Yes' && $this->fields('hrtwhen') == null ) {
                $status = 'uncompleted';
            } elseif ( $this->fields('dietpill') == 'Yes' && $this->fields('dietpillwhen') == null ) {
                $status = 'uncompleted';
            } elseif ( $this->fields('birthcontrol') == 'Yes' && $this->fields('birthcontrolstate') == null ) {
                $status = 'uncompleted';
            } else {
                $status = 'uncompleted';
            }

        } else {
            $status = 'completed';
        }


        $variables = $variable->create([
            'user_id'               => Auth::user()->id,
            'patientname'           => $this->fields('patientname'),
            'age'                   => $this->fields('age'),
            'education'             => $this->fields('education'),
            'housing'               => $this->fields('housing'),
            'occupation'            => $this->fields('occupation'),
            'marital'               => $this->fields('marital'),
            'dietarypattern'        => $this->fields('dietarypattern'),
            'ethnic'                => $this->fields('ethnic'),
            'province'              => $this->fields('province'),
            'menstrualstate'        => $this->fields('menstrualstate'),
            'weight'                => $this->fields('weight'),
            'height'                => $this->fields('height'),
            'waist'                 => $this->fields('waist'),
            'neck'                  => $this->fields('neck'),
            'hip'                   => $this->fields('hip'),
            'smokingstate'          => $this->fields('smokingstate'),
            'paritalstate'          => $this->fields('parital'),
            'pregnant'              => $this->fields('pregnant'),
            'birthcontrol'          => $this->fields('birthcontrol'),
            'birthcontrolstate'     => $this->fields('birthcontrolstate'),
            'hrt'                   => $this->fields('hrt'),
            'hrtwhen'               => $this->fields('hrtwhen'),
            'dietpill'              => $this->fields('dietpill'),
            'dietpillwhen'          => $this->fields('dietpillwhen'),
            'historyofmi'           => $this->fields('historyofmi'),
            'historyoftia'          => $this->fields('historyoftia'),
            'historyofpvd'          => $this->fields('historyofpvd'),
            'dailyactivity'         => $this->fields('dailyactivity'),
            'bloodpressure'         => $this->fields('bloodpressure'),
            'restingheartrate'      => $this->fields('restingheartrate'),
            'af'                    => $this->fields('af'),
            'iskemik'               => $this->fields('iskemik'),
            'rah'                   => $this->fields('rah'),
            'lah'                   => $this->fields('lah'),
            'rvh'                   => $this->fields('rvh'),
            'rah'                   => $this->fields('rah'),
            'lvh'                   => $this->fields('lvh'),
            'rbbb'                  => $this->fields('rbbb'),
            'lbbb'                  => $this->fields('lbbb'),
            'avblock'               => $this->fields('avblock'),
            'sablock'               => $this->fields('sablock'),
            'otherarrhythmias'      => $this->fields('otherarrhythmias'),
            'hemoglobin'            => $this->fields('hemoglobin'),
            'bloodglucose'          => $this->fields('bloodglucose'),
            'hba1c'                 => $this->fields('hba1c'),
            'lipid'                 => $this->fields('lipid'),
            'fastingtriglyceride'   => $this->fields('fastingtriglyceride'),
            'hdlcholesterol'        => $this->fields('hdlcholesterol'),
            'creatinine'            => $this->fields('creatinine'),
            'microalbuminuria'      => $this->fields('microalbuminuria'),
            'uricacid'              => $this->fields('uricacid'),
            'pcos'                  => $this->fields('pcos'),
            'lahecg'                => $this->fields('lahecg'),
            'rahecg'                => $this->fields('rahecg'),
            'lvhecg'                => $this->fields('lvhecg'),
            'rvhecg'                => $this->fields('rvhecg'),
            'phecg'                 => $this->fields('phecg'),
            'ladecg'                => $this->fields('ladecg'),
            'ivsdecg'               => $this->fields('ivsdecg'),
            'iveddecg'              => $this->fields('lveddecg'),
            'rvdecg'                => $this->fields('rvdecg'),
            'lvefecg'               => $this->fields('lvefecg'),
            'tapseecg'              => $this->fields('tapseecg'),
            'tvgecg'                => $this->fields('tvgecg'),
            'eaecg'                 => $this->fields('eaecg'),
            'abnormalwallmotionecg' => $this->fields('abnormalwallmotionecg'),
            'regurgitation'         => $this->fields('regurgitation'),
            'status'                => $status
        ]);


        return $variables;
    }
}