<?php
/* @var $this SiteController */




    $this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'dataProvider'=>$dataProvider,
        'template'=>'Chartview',
        'options'=> array(
            'title'=>array(
                'text'=>'Chart View'
            ),
            'xAxis'=>array(
                // It cant be 1.a self-defined xAxis array as you want; 
                // 2.a series from datebase such as time series
                "categories"=>'time'            
            ),
            'series'=>array(
                array(
                    'type'=>'areaspline',
                    'name'=>'Data',             //title of data
                    'dataResource'=>'data',     //data resource according to datebase column
                )
            )
        )
    ));
?>

