<?php

class ChartViewController extends Controller
{

 /*$sql="select * from Ads";
        $totalItemCount=20;
        $dataProvider = new CSqlDataProvider($sql, array(
                'totalItemCount' => $totalItemCount,
                                )); 

        $this->render('index',array('dataProvider'=>$dataProvider));*/
	
	public function renderJSON($data)
	{
    header('Content-type: application/json');
    echo CJSON::encode($data);

    foreach (Yii::app()->log->routes as $route) {
        if($route instanceof CWebLogRoute) {
            $route->enabled = false; // disable any weblogroutes
        }
    }
    Yii::app()->end();
	}
	
	public function actionIndex()
	{
		//$this->render('index');
		$criteria=new CDbCriteria;
		
        $dataProvider=new CActiveDataProvider('ChartData',
            array(
                'criteria'=>$criteria,
            )
        );
		//print_r($criteria);
		//	exit;
		//$data = ChartData::model()->findByPk(1);
		//print_r($data);
        //json formatted ajax response to request
        if(isset($_GET['json']) && $_GET['json'] == 1){
            
			$count = ChartData::model()->count();
			//print_r($count);
			//exit;
            for($i=1; $i<=$count; $i++){
                $data = ChartData::model()->findByPk($i);
                $data->data += rand(-10,10);
				
                $data->save();
            }
			//var_dump($dataProvider);
			//exit;
            echo CJSON::encode($dataProvider->getData());
        }else{
            //print_r($dataProvider);
			$this->render('index',array(
                    'dataProvider'=>$dataProvider,
            ));
        }
		//print_r($dataProvider);
	}
	
	
	
	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}