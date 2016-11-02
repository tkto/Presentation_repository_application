<?php

error_reporting(E_ERROR);

class model {

    private function  Fconnection() {
     $conn = mysql_connect("localhost", "root", "") or die("...Mysql connection error.");
        mysql_select_db("flip_book", $conn);
    }

    public function login_user_pass($val) {
        $this->Fconnection();
        //$select_user_pass = mysql_query("UPDATE tbl_user_info SET status='1' WHERE username='$val[0]'");
        $select_user_pass = mysql_query("select * from admin_user_info where user_name='$val[0]' and password='$val[1]'");
        $user_fetch_data = mysql_fetch_array($select_user_pass);
        return $user_fetch_data;
    }

    public function loginLog($val) {
        $this->Fconnection();
	
$loginLogSql = mysql_query("INSERT INTO tbl_login_log( login_id,log_date,login_time,ip_address,user_type,STATUS )VALUES('$val[0]','$val[1]','$val[2]','$val[3]',$val[4],1)");
$user_fetch_data = mysql_insert_id();
       return $user_fetch_data;
    }
   
     
    public function UserEmployeeInfo($user) {
        $this->Fconnection();
//echo "select user_name,id,email,contact_number from admin_user_info where user_name='$user'";
        $sql = mysql_query("select user_name,id,email,mobile from admin_user_info where employee_id='$user'");
        $userInfoDetails = mysql_fetch_array($sql);
        return $userInfoDetails;
    }

     
  public function log_out($login_id) {
        $this->Fconnection();
      // $select_user_pass = mysql_query("UPDATE tbl_login_log SET status='0' WHERE username='$login_id[1]'");
      $select_user_pass = mysql_query("UPDATE `tbl_login_log` SET `logout_time`=now(),`status`=0  WHERE `logid` = $login_id");
	  
	  
  }
  
   
  
    public function getAllOtherCost($id) {
        $this->Fconnection();
   
      $sql = mysql_query("select * from tbl_other_cost where pq_id like '%$id%' ");

	 while ($all_data = mysql_fetch_array($sql)) {
            $product_list[] = $all_data;
        }
        return $product_list;
  }
  
  
  
   public function getAllImages2(){

  $this->Fconnection();
   
      $sql = mysql_query("SELECT * FROM `tbl_images` WHERE `slide_no` =2");

   while ($all_data = mysql_fetch_array($sql)) {
            $product_list[] = $all_data;
        }

          return $product_list;
   }
   
  
   public function getAllToolTip(){

  $this->Fconnection();
   
      $sql = mysql_query("SELECT * FROM `tbl_images` WHERE `slide_no` =2");

   while ($all_data = mysql_fetch_array($sql)) {
            $product_list[] = $all_data;
        }

          return $product_list;
   }
  
  

   public function get_image_home_fun(){

  $this->Fconnection();
   
      $sql = mysql_query("SELECT * FROM `tbl_slide_home_page`");

   while ($all_data = mysql_fetch_array($sql)) {
            $product_list[] = $all_data;
        }

          return $product_list;
   }







  
}
