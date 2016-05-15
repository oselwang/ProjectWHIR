<table id="datatable" class="table table-striped table-bordered table-responsive">
    <thead>
    <tr>
        <th rowspan="2">Patient Name</th>
        <th rowspan="2">Age</th>
        <th rowspan="2">Education</th>
        <th rowspan="2">Housing</th>
        <th rowspan="2">Occupation</th>
        <th rowspan="2">Marital Status</th>
        <th rowspan="2">Dietary Pattern</th>
        <th rowspan="2">Ehtnic</th>
        <th rowspan="2">Province</th>
        <th rowspan="2">Menstrual State</th>
        <th rowspan="2">Body Weight</th>
        <th rowspan="2">Body Height</th>
        <th rowspan="2">Waist Circumference</th>
        <th rowspan="2">Neck Circumference</th>
        <th rowspan="2">Hip Circumference</th>
        <th rowspan="2">Smoking State</th>
        <th rowspan="2">Parital State</th>
        <th rowspan="2">Pregnant</th>
        <th rowspan="2">Birth Control</th>
        <th rowspan="2">Birth Control State</th>
        <th rowspan="2">Hormon Replacement Therapy</th>
        <th rowspan="2">HRT Since When</th>
        <th rowspan="2">Diet Pill</th>
        <th rowspan="2">Diet Pill Since When</th>
        <th rowspan="2">History of MI</th>
        <th rowspan="2">History of TIA</th>
        <th rowspan="2">History of PVD</th>
        <th rowspan="2">Daily Activity</th>
        <th rowspan="2">Blood Pressure</th>
        <th rowspan="2">Resting Heart Rate</th>
        <th colspan="11" style="text-align: center">ECG</th>
        <th rowspan="2">Hemoglobin</th>
        <th rowspan="2">Blood Glucose</th>
        <th rowspan="2">hBA1c</th>
        <th rowspan="2">Lipid</th>
        <th rowspan="2">Fasting Trigkyceride</th>
        <th rowspan="2">HDL-Cholesterol</th>
        <th rowspan="2">Creatinine or eGFR-MDRD method</th>
        <th rowspan="2">Microalbuminuria or Proteinuria</th>
        <th rowspan="2">Uric Acid</th>
        <th rowspan="2">PCOS</th>
        <th colspan="15" style="text-align: center;">Echocardiography</th>
        <th rowspan="2">Status</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th>AF</th>
        <th>Iskemik/pathologic Q Wave</th>
        <th>LAH</th>
        <th>RAH</th>
        <th>LVH</th>
        <th>RVH</th>
        <th>RBBB</th>
        <th>LBBB</th>
        <th>AV Block</th>
        <th>SA Block</th>
        <th>Order Arrhythmias</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th>LAH</th>
        <th>RAH</th>
        <th>LVH</th>
        <th>RVH</th>
        <th>PH</th>
        <th>LAD</th>
        <th>IVSd</th>
        <th>LVEDD</th>
        <th>RVD</th>
        <th>LVEF</th>
        <th>TAPSE</th>
        <th>TVG</th>
        <th>E/A</th>
        <th>Abnormal Wall Motion</th>
        <th>Regurgitation</th>
    </tr>
    </thead>
    <tbody>
    @foreach($variables as $variable)
        <tr>
            <td>
                @if(!empty($variable->patientname))
                    {{$variable->patientname}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->age))
                    {{$variable->age}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->education))
                    {{$variable->education}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->housing))
                    {{$variable->housing}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->occupation))
                    {{$variable->occupation}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->marital))
                    {{$variable->marital}}
                @else null
                @endif
            </td>
            <td>
                {{$variable->dietarypattern}}
            </td>
            <td>
                @if(!empty($variable->ethnic))
                    {{$variable->ethnic}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->province))
                    {{$variable->province}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->menstrualstate))
                    {{$variable->menstrualstate}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->weight))
                    {{$variable->weight}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->height))
                    {{$variable->height}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->waist))
                    {{$variable->waist}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->neck))
                    {{$variable->neck}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->hip))
                    {{$variable->hip}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->smokingstate))
                    {{$variable->smokingstate}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->paritalstate))
                    {{$variable->paritalstate}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->pregnant))
                    {{$variable->pregnant}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->birthcontrol))
                    {{$variable->birthcontrol}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->birthcontrol) || $variable->birthcontrol == 'Yes')
                    {{$variable->birthcontrolstate}}
                @else
                    null
                @endif
            </td>
            <td>
                @if(!empty($variable->hrt))
                    {{$variable->hrt}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->hrt) || $variable->hrt == 'Yes')
                    {{$variable->hrtwhen}}
                @endif
            </td>
            <td>
                @if(!empty($variable->dietpill))
                    {{$variable->dietpill}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->dietpill) || $variable->dietpill == 'Yes')
                    {{$variable->dietpillwhen}}
                @endif
            </td>
            <td>
                @if(!empty($variable->historyofmi))
                    {{$variable->historyofmi}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->historyoftia))
                    {{$variable->historyoftia}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->historyofpvd))
                    {{$variable->historyofpvd}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->dailyactivity))
                    {{$variable->dailyactivity}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->bloodpressure))
                    {{$variable->bloodpressure}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->restingheartrate))
                    {{$variable->restingheartrate}}
                @else null
                @endif
            </td>
            <td>
                {{$variable->af}}
            </td>
            <td>
                {{$variable->iskemik}}
            </td>
            <td>
                {{$variable->lah}}
            </td>
            <td>
                {{$variable->rah}}
            </td>
            <td>
                {{$variable->lvh}}
            </td>
            <td>
                {{$variable->rvh}}
            </td>
            <td>
                {{$variable->rbbb}}
            </td>
            <td>
                {{$variable->lbbb}}
            </td>
            <td>
                {{$variable->avblock}}
            </td>
            <td>
                {{$variable->sablock}}
            </td>
            <td>
                @if(!empty($variable->otherarrhythmias))
                    {{$variable->otherarrhythmias}}
                @else
                    null
                @endif
            </td>
            <td>
                @if(!empty($variable->hemoglobin))
                    {{$variable->hemoglobin}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->bloodglucose))
                    {{$variable->bloodglucose}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->hba1c))
                    {{$variable->hba1c}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->lipid))
                    {{$variable->lipid}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->fastingtriglyceride))
                    {{$variable->fastingtriglyceride}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->hdlcholesterol))
                    {{$variable->hdlcholesterol}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->creatinine))
                    {{$variable->creatinine}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->microalbuminuria))
                    {{$variable->microalbuminuria}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->uricacid))
                    {{$variable->uricacid}}
                @else null
                @endif
            </td>
            <td>
                @if(!empty($variable->pcos))
                    {{$variable->pcos}}
                @else null
                @endif
            </td>
            <td>
                {{$variable->lahecg}}
            </td>
            <td>
                {{$variable->rahecg}}
            </td>
            <td>
                {{$variable->lvhecg}}
            </td>
            <td>
                {{$variable->rvhecg}}
            </td>
            <td>
                {{$variable->phecg}}
            </td>
            <td>
                {{$variable->ladecg}}
            </td>
            <td>
                {{$variable->ivsdecg}}
            </td>
            <td>
                {{$variable->lveddecg}}
            </td>
            <td>
                {{$variable->rvdecg}}
            </td>
            <td>
                {{$variable->lvefecg}}
            </td>
            <td>
                {{$variable->tapseecg}}
            </td>
            <td>
                {{$variable->tvgecg}}
            </td>
            <td>
                {{$variable->eaecg}}
            </td>
            <td>
                {{$variable->abnormalwallmotionecg}}
            </td>
            <td>
                {{$variable->regurgitation}}
            </td>
            <td>
                {{$variable->status}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>