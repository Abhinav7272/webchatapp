<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page user </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    

</head>
<body>
    <div class ="container  main-section">
      <div class ="row ">
        <div  class="col-md-3 col-sm-3 clo-xs-12 left-sidebar">
           <div class="input-group searchbox">
             <div class="input-group-btn">
               <!-- <center> -->
                <div><a herf="inlude/find_friends.php"><button class="btn btn-default search-icon" name="search_user" type="submit">Add new user</button></a>
                </div>
               <!-- </center> -->
             </div> 
              <div class="left-chat">
                <ul>
                 <?php include("include/get_user_data.php");?>
                </ul>
              </div>
           </div>
            <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
               <div class="row">
                   <!-- getting the info who log in  -->
                   <?php
                   $user=$_SESSION['user_email'];
                   $get_user ="select * from users where user_emsil='$user'";
                   $run_user=mysqli_query($con,$get_user);
                   $row=mysqli_fetch_array($run_user);
                   $user_id =$row['user_id'];
                   $user_name=$row['user_name'];
                   ?>
                   <!-- getting info whose u wnt -->
                    <?php
                    if(isset($GET['user_name'])){
                        global $con;
                        $get_username = $_GET['user_name'];
                        $get_user="select * from user where user_name='$get_username'";
                        $run_user = mysqli_query($con,$get_user);
                        $row_user =mysqli_query($con,$get_user);
                        $row_user=mysqli_fetch_array($run_user);
                        $username=$row_user['user_name'];
                        $user_profile_image=$row_user['user_profile'];
                        $total_messages ="select * from user_chats where(sender_username='$user_name' AND receiver_username='$username')OR (receiver_username='$user_name' AND sender_username='$username')";
                        $run_messages = mysqli_query($con,$total_messages);
                        $total =mysqli_num_rows($run_messages);
                    }
                    ?>
                    <div class ="col-md-12 right-header">
                      <div class ="right-header-img">
                          <img src="<?php echo "$user_profile_imagr";?>">

                      </div>
                      <div class="col-md-12 right-header">
                        <form method="post">
                           <p><?php echo "$username";?></p>
                           <span><?php echo $total; ?>messages</span>&nbsp &nbsp
                           <button name="logout" class="btn btn-danger">Logout</button>
                        </form>
                        <?phpif(isset($_POST['logout'])){
                            $update_msg= mysqli_query($con,"update users set log_in='offline' where user_name='$user_nqme'");
                            header("Location:logout.php");
                            exit();
                        }
                        ?>
                    </div>
               </div>
            </div>
            <div class="row">
                        <div id="scolling_to_bottom" class=" coli-md-12 right-header-contentChat">
                        <?php
                            $update_msg= mysqli_query($con,"UPDATE users_chats set msg_status ='read'
                            where sender_username='$username' And reciever_username='$user_name'");

                            $sel_msg="select *from user_chats where (sender_username='$user_name' and reciver_username ='$username') or (recivers_username='$user_name'
                            and sender_username='$username') order by 1 asc";
                            $run_msg=mysqli_query($con,$sel_msg);
                        
                           while($row =mysqli_fetch_array($run_msg)){
                               $sender_username=$roe['sender_username'];
                               $receiver_username=$row['receiver_username'];
                               $msg_content =$row['msg_content'];
                               $msd_date=$row['msg_date'];
                          ?>
                        <ul>
                            <?php
                             if($user_name ==$sender_username And $username==$receiver_username){
                                 echo"
                                     <li>
                                        <div class ='rightside-chat'>
                                            <span>$username <small>$msg_date</small></span>
                                            <p>$msg_content</p>
                                        </div>
                                     </li>
                                 ";
                                }
                                if($user_name ==$receiver_username And $username==$sender_username){
                                    echo"
                                        <li>
                                           <div class ='rightside-chat'>
                                               <span>$username <small>$msg_date</small></span>
                                               <p>$msg_content</p>
                                           </div>
                                        </li>
                                    ";
                                }
                            ?>
                        </ul>
                        <?php 
                           }
                        ?>
                        </div>
                        <div  class="row">
                           <div class="col-md-12 right-chat-textbox">
                                <form method="post">
                                   <input autocomplete="off" type="text" name="msg_content" placeholder="write your msg ----------">
                                   <button class="btn" name="submit"><i class="fa fa-telegram" aria-hidden="true"></i></button>
                                </form>
                           </div>
                        </div>
            </div>
        </div>
      </div>
      <?php
         if(isset($_POST['submit'])){
             $msg = htmlentities($_post['msg_content']);
             if($msg == ""){
                 echo"
                  <div class='alert alert-danger'>
                    <strong><center>message was unable to send</center></strong>
                    </div>
                 ";
             }
            else if(strlen($msg)>100){
                echo"
                <div class='alert alert-danger'>
                  <strong><center>message  is too long use  under 100</center></strong>
                  </div>
               ";
            }
            else{
                $insert = "insert into users_chats(sender_username,receiver_username,msg_content,msg_status,msg_date) values ($user_name,$username,$msg,'unread',NOW())";
                $run_insert= mysqli_query($con,$insert);
            }
         }
      
      ?>
</body>
</html>