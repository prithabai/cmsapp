<?php

class ChartController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	

	
	public function actionChartView()
    {
 
        $criteria=new CDbCriteria;
        $dataProvider=new CActiveDataProvider('ChartData',
            array(
                'criteria'=>$criteria,
            )
        );
 
        //json formatted ajax response to request
        if(isset($_GET['json']) && $_GET['json'] == 1){
            $count = ChartData::model()->count();
            for($i=1; $i<=$count; $i++){
                $data = ChartData::model()->findByPk($i);
                $data->data += rand(-10,10);
                $data->save();
            }
            echo CJSON::encode($dataProvider->getData());
        }else{
            $this->render('ChartView',array(
                    'dataProvider'=>$dataProvider,
            ));
        }
 
    }
}