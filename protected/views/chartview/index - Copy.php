<?php
/* @var $this ChartViewController */

$this->breadcrumbs=array(
	'Chart View',
);
$this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'dataProvider'=>$dataProvider,
        'template'=>'Chart View',
        'options'=> array(
            'title'=>array(
                'text'=>'Chart View'
            ),
             'xAxis'=>array(
            'title' => array('text' => 'Time',),
            'categories' => 'time',
            'labels' => array(
                'rotation' => -90,
                'y'        => 20,
                ),
        ),
		'yAxis'=>array(
            'title' => array('text' => 'DegC'),
            ),
			//'xAxis'=>array('maxZoom'=>'4 * 3600000' ),  //4 hours
            //'yAxis'=>array('title'=>array('text'=>'DataValueTitle')),
           'series'=>array(
                array(
                    'type'=>'areaspline',
                    'name'=>'Temperature',             //title of data
                    'dataResource'=>'data',     //data resource according to datebase column
                )
            )

        )
		/*'options'=>'{
      "title": { "text": "Fruit Consumption" },
      "xAxis": {
         "categories": ["Apples", "Bananas", "Oranges"]
      },
      "yAxis": {
         "title": { "text": "Fruit eaten" }
      },
      "series": [
         { "name": "Jane", "data": [1, 0, 4] },
         { "name": "John", "data": [5, 7,3] }
      ]
   }'*/
		
    ));
	
	
	
	 
?>

