<?php
class GetByAction extends CAction
{
    public function run()
    {
        $params =  $_POST;
        $where = (isset($params["where"])) ? $params["where"] : array();
        $fields = ( isset($params["fields"]) ) ? $params["fields"] : "";

        if( !isset($params["count"]) ) 
            $res = PHDB::find($_POST['collection'],$where );
        else
            $res = array('count' => PHDB::countWFileds($_POST['collection'],( $where,$fields ));
        //$res["where"]=$where;
        Rest::json( $res );
        Yii::app()->end();
    }
    
}