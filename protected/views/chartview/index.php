<?php
/* @var $this ChartViewController */

$this->breadcrumbs=array(
	'Chart View',
);
//print_r($dataProvider);
	
$this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'dataProvider'=>$dataProvider,
        'template'=>'{items}',
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
                    'dataResource'=>'data','data1',
					'threshold'=>null 
					//data resource according to datebase column
                ),
				array(
					'type'=>'areaspline',
					//'type'=>'areaspline',
                    'name'=>'Data1',             //title of data
                    'dataResource'=>'data1',     //data resource according to datebase column
					'threshold'=>null 
                )
            )
        )
    ));	
	
/*$this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'dataProvider'=>$dataProvider,
        'template'=>'{items}',
        'options'=> array(
            'title'=>array(
                'text'=>'Monthly Average Temperature',
				'x'=> '-20'
            ),
			'subtitle'=>array(
                'text'=>'Source: WorldClimate.com',
				'x'=> '-20'
            ),
            'xAxis'=>array(
                // It cant be 1.a self-defined xAxis array as you want; 
                // 2.a series from datebase such as time series
                "categories"=>array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec')
            ),
			'yAxis'=>array(
                // It cant be 1.a self-defined xAxis array as you want; 
                // 2.a series from datebase such as time series
				'title'=>array('text'=>'Temperature (°C)'),
				'plotLines'=>array('value'=>'0','width'=>'1','color'=>'#808080')
				
            ),
			'tooltip'=>array('valueSuffix'=>'°C'),
			'legend'=>array('layout'=>'vertical','align'=>'right','verticalAlign'=>'middle','borderWidth'=>'0'),
            'series'=>array(
                array('name'=>'Tokyo','data'=>'7.0','6.9','9.5','14.5','18.2','21.5','25.2','26.5','23.3','18.3','13.9','9.6'),
				array('name'=>'New York','data'=>'-0.2','0.8','5.7','11.3','17.0','22.0','24.8','24.1','20.1','14.1','8.6','2.5'),
				array('name'=>'Berlin','data'=>'-0.9','0.6','3.5','8.3','13.5','17.0','18.6','17.9','14.3','9.0','3.9','1.0')
				)
		)
    ));	*/
	
	$this->Widget('ext.ActiveHighcharts.HighchartsWidget',array(
        'dataProvider'=>$dataProvider,
        'template'=>'{items}',
   'options'=>array(
      'title' => array('text' => 'Fruit Consumption'),
      'xAxis' => array(
         'categories' => array('Apples', 'Bananas', 'Oranges')
      ),
      'yAxis' => array(
         'title' => array('text' => 'Fruit eaten')
      ),
      'series' => array(
	  
         array('name' => 'Jane', 'data' => array(1, 0, 4)),
         array('name' => 'John', 'data' => array(5, 7, 3))
      )
   )
));
	
	
	
	 
?>

