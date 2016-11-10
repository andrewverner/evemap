<?php

/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.11.16
 * Time: 16:50
 */
class DistanceForm extends CFormModel
{

    public $systemName1;
    public $systemName2;

    public function rules()
    {
        return [
            ['systemName1, systemName2', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'systemName1' => 'System 1',
            'systemName2' => 'System 2'
        ];
    }

    public function calculate()
    {
        $model1 = SolarSystem::model()->findByAttributes(['solarSystemName' => $this->systemName1]);
        $model2 = SolarSystem::model()->findByAttributes(['solarSystemName' => $this->systemName2]);

        if ($model1 && $model2) {
            $d = ($model2->x - $model1->x)**2 + ($model2->y - $model1->y)**2 + ($model2->z - $model1->z)**2;
            $distance = abs(sqrt($d));
            return $distance/1000000000000000;
        }
    }

}