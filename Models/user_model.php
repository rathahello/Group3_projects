<?php
     function m_view() {
        include "connection.php";
        $query="SELECT * FROM tbl_users";
        $result=mysqli_query($conn,$query);
        $rows=[];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $recode){
                $rows[] = $recode;
            }
        }
        return $rows ;
    }
    function m_add($data) {
        $fullname = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $startDate = $_POST['startdate'];
        $endDate = $_POST['enddate'];
        include "connection.php";
        $query = "INSERT INTO tbl_user(Username,gender,email,startDate,endDate)
                    VALUES('$fullname','$gender','$email','$startDate','$endDate')";
                // var_dump($query);die();
        $result = mysqli_query($conn,$query);
        // var_dump($result);die();
        
        return $result;
    }

    function m_delete() {
        include "connection.php";
        $id = $_GET['id'];
        $query = " DELETE FROM tbl_users WHERE user_id = '$id'";
        // var_dump($query);die();
        $result = mysqli_query( $conn,$query);
        return $result;
    }

    function m_detail(){
        include "connection.php";
        $id = $_GET['id'];
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user_id=$id");
        return $query;
    
    }


    function m_booking()
    {
      include "connection.php";
      $id = $_GET['id'];
      $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id=$id");
      return $query;
    }



//     function m_booking_data($data)
// {
//   include "connection.php";
//   $username = $_POST['username'];
//   $gender = $_POST['gender'];
//   $email = $_POST['email'];
// //   $bookName = $_POST['book'];
//   $startDate = $_POST['startdate'];
//   $enddate = $_POST['enddate'];

//   $query = mysqli_query($conn, "INSERT INTO tbl_users(Username,gender,email,startdate,enddate) 
//  VALUES ('$username', '$gender','$email','$startDate','$enddate')");
// //  var_dump($query);die();
//   return $query;
// }
?>