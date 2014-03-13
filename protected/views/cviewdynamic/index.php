<?php
/* @var $this ChartViewController */

$this->breadcrumbs=array(
	'Chart View',
);
//print_r($dataProvider);
 $xAxis = array(1,2,3);
    $yAxis = array(4,5,6);	
$this->Widget('ext.ActiveHighcharts.HighchartsWidget', array(
        'dataProvider'=>$dataProvider,
        'template'=>'{items}',
        'options'=> array(
		'chart' => array(
                    'defaultSeriesType' => 'bar',
                    'style' => array(
                        'fontFamily' => 'Verdana, Arial, Helvetica, sans-serif',
                    ),
                ),
            'title'=>array(
                'text'=>'Chart View'
            ),
            'xAxis' => array(
                    'title' => array(
                        'text' => 'xTitle',
                    ),
                    'categories' => $xAxis,
                    'labels' => array(
                        'step'     => 1,
                        'rotation' => 0,
                        'y'        => 20,
                    ),
                ),
			'yAxis' => array(
                    'title' => array(
                        'text' => 'yTitle',
                    ),
                ),
			'series' => array(
                    array(
                        'name'   => 'seriesName',
                        'data'   => $yAxis,
                        'shadow' => false,
                    )
                ),	
            
        )
    ));


$this->Widget('ext.ActiveHighcharts.HighchartsWidget',
array(
'dataProvider'=>$dataProvider,
        'template'=>'{items}',
'id' => 'something',
'options'=> array(
'chart' => array(
'defaultSeriesType' => 'bar', 
'style' => array(
'fontFamily' => 'Verdana, Arial, Helvetica, sans-serif',
),
),
'title' => array(
'text' => 'Distribution of Population',
),
'xAxis' => array(
'title' => array(
'text' => 'Place',
),
'categories' => array('Rural','Urban'),
'labels' => array(
'step' => 1,
'rotation' => 0,
'y' => 20,
),
),
'yAxis' => array(
'title' => array(
'text' => 'Number of Population',
),
),
'series' => array(
array(
'name' => 'Boys',
'data' => array(20,60),
),
array(
'name' => 'Girls',
'data' => array(80,120),
),

)
)
)
);
	
	

	 
?>

