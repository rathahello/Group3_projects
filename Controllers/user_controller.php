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
        
        function add_form(&$data){
            $data['page'] = "user/add";
        }

        function add(&$data) {
            $add_data = m_add($_POST);
            if($add_data) {
                $action = "view";
            }else {
                $action = "add";
            }
            header("Location: index.php?action=$action");
        }

        function delete(&$data){
            $delete_data = m_delete();
            if($$delete_data){
                $action = "user/view";
            }else{
                echo " Cannot Delete";
            }
            header("Location:index.php?action=$action");
         }
         function detail(&$data){
            $data['detail'] = m_detail();
            $data['page'] = "user/detail";
        }



        // function booking(&$data){
        //     $data['booking'] = m_booking();
        //     $data['page'] = "book/booking";
        //   }
          
        //   function form_booking(&$data){
        //     $booking_data = m_booking_data($_POST);
        //     // var_dump($booking_data);die();
        //     if($booking_data){
        //       $action = "view";
        //     }else{
        //       $action = "booking";
        //     }
        //     header("Location: index1.php?action=$action");
        //   }
          
?>