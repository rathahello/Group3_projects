<?php 
 $data = array();
   booking_book($data);
   function booking_book(&$data)
   {
    $function = 'view';
    if(isset($_GET['action'])){
      $function = $_GET['action'];
    }
    $function($data);
  }
   function view(&$data){
           $data['view'] = model_view();
           $data['page'] = "book/view";
     }
     function detail(&$data){
      $data['detail'] = m_detail();
      $data['page'] = "book/detail";
  }

  function delete(&$data){
    $delete_data = m_delete();
    if($delete_data){
        $action = "view";
    }else{
        echo " Cannot Delete";
    }
    header("Location:index.php?action=$action");
 }
 
 function add(&$data){
  $data['page'] = "book/add";
}

function form_data(&$data) {
  $add_data = m_add_data($_POST);
  if($add_data) {
      $action = "view";
  }else {
      $action = "add";
  }
  header("Location: index.php?action=$action");
}


function booking(&$data){
  // $data['booking'] = m_booking();
  // $data['detail'] = m_detail();
  $data['page'] = "book/booking";
}

function form_booking(&$data){
  $booking_data = m_booking_data($_POST);
  if($booking_data){
    $action = "user/view";
  }else{
    $action = "booking";
  }
  header("Location: index.php?action=$action");
}

?>