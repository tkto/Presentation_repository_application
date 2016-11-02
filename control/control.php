<?php

error_reporting(E_ERROR);

class control {

    public function Direction($page) {
        if (file_exists("view/" . $page . ".php")) {
            include_once "view/" . $page . ".php";
        } else {
            header("Location:index.php");
        }
    }

    public function reDirection($val) {
        if (file_exists("view/" . $val . ".php")) {
            include_once "view/" . $val . ".php";
        } else {
            header("Location:index.php");
        }
    }

    public function moduller() {
        $model = new model();
        return $model;
    }

    public function login_user_pass($val) {
        $login_user_pass = $this->moduller()->login_user_pass($val);
        return $login_user_pass;
    }

    public function loginLog($val) {
        $loginLog = $this->moduller()->loginLog($val);
        return $loginLog;
    }


    public function UserEmployeeInfo($user) {
        $userInfo = $this->moduller()->UserEmployeeInfo($user);
        return $userInfo;
    }

       public function log_out($login_id) {
        $loginLog = $this->moduller()->log_out($login_id);
        return $loginLog;
    }
     
	 //custom code start here	 
	
	 
	 
	 
	
	 
	
	   
	
	
	
	
	
	 public function getInvoiceInfo($id){
		 
		  $invoice = $this->moduller()->getInvoiceInfo($id);
	//	  print_r($invoice);
	$data=array();
	while($row=mysql_fetch_array($invoice))
{
	$data[0] = $row['po_id'];
	$data[1] = $row['vendor_name'];
	$data[2] = $row['po_date'];
	
	
}
	
		  return $data;
	 }
	 
	     public function Delete_tbl_cAndF_cost_content($pq_id_){
		 
		  $invoice = $this->moduller()->Delete_tbl_cAndF_cost_content($pq_id_);
		  return $invoice;
	 }
	 
	 // get data func end here
	 //custom code end here
	 
	 
	 
	 public function getAllImages(){

	 $info=	$this->moduller()->getAllImages2();

	 	return  $info;
	 }
	 
	 
	 
	 
	  
	 public function getAllToolTip(){

	 $info=	$this->moduller()->getAllToolTip();

	 	return  $info;
	 }
	 
	  public function get_image_home_fun(){

	 $info=	$this->moduller()->get_image_home_fun();

	 	return  $info;
	 }
	 
	 
	 
	 
}
