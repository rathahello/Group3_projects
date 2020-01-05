<?php
    $data = array();
        myFunction($data);
        function myFunction(&$data){
            $function = "view";
            if(isset($_GET['action'])){
                $function = $_GET['action'];
            }
            $function($data);
        }
        function view(&$data){
            $data['view']= m_view();
            $data['page']="user/view";
        }
        function delete(&$data){
            $delete_data = m_delete();
            if($delete_data){
                $action = "view";
            }else{
                echo " Cannot Delete";
            }
            header("Location: index1.php?action=$action");
         }

        function detail(&$data){
            $data['detail'] = m_detail();
            $data['page'] = "user/detail";
        }
          
?>