<?php 
$name='';
$c_class='';
$roll_no='';
$reg_no='';
include('database/connect.php');
$id=$_GET['id'];
if(isset($_GET['id'])){
 $sql="select * from fees where id=$id";
 $result=mysqli_query($conn, $sql);
 if(mysqli_num_rows($result) > 0 ){
   while($row=mysqli_fetch_assoc($result)){
       $get_id=$row['id'];  
       $name=$row['name'];
       $c_class=$row['class'];
       $roll_no=$row['roll_no'];
       $reg_no=$row['rgistation_no'];
    }
}
}
$id=$_GET['id'];
if(isset($_POST['submit'])){
    // $gave=$get_id;
    $privi=$_POST['privi'];
    $com_fee=$_POST['com_fee'];
    $exam=$_POST['exam'];
    $other=$_POST['other_fee'];
    $d_date=$_POST['d_date'];
    $paid_fee=$_POST['paid_fee'];
    $m_name=$_POST['m_name'];
    $m_sessage=$_POST['message'];
    $pay_mode=$_POST['pay_mode'];

    $sql="INSERT INTO `fees_tran` (`id`, `paid_id`, `privi_dues`, `com_fee`, `exam_fee`, `other_fee`, `d_date`, `paid_fee`, `mon_name`, `m_message`, `pay_mode`) VALUES (NULL, ' $id', ' $privi', ' $com_fee', '$exam', '$other', '$d_date', '$paid_fee', '$m_name', '$m_sessage', '$pay_mode')";
    if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error:".$sql.mysqli_error($conn);
    }

     
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .button_2{
            float: right;
        }
        input{
        width: 100%;
        }
        input[type=text] {
        border: 2px solid red;
        border-radius: 4px;
        }
        input[type=text] {
        border: none;
        border-bottom: 2px solid;
        }
        input[type=date] {
        border: none;
        border-bottom: 2px solid;
        }
        input[type=number] {
        border: none;
        border-bottom: 2px solid;
        }
        
        input[type=text]:focus {
        background-color: #ECF0F1;
        }
        .blink {
                animation: blinker 1.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }
            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
    </style>
  </head>
  <body>
    
    <div class="container card-body border-dark-subtle">
        <form action="" method="post">
        <div class="paid border px-4">
            <h2 class="text-center  card-title" >Payment processing </h2>
            <hr class="text-red" >
            <marquee behavior="" direction="" class="blink" >Pay form</marquee>
            <hr class="text-red" >
            <div class="row">
                <div><h4 class="text-left"> students Information</h4></div>
                <div class="col">
                   <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" placeholder="type here name" name="fullname" value="<?php echo  $name; ?>" disabled >

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">Class*</label>
                    <input type="text" class="form-control" placeholder="type here class" name="Class" value="<?php echo  $c_class; ?>"  disabled>

                   </div>
                

                   </div>

                </div>
                <div class="row">
                <div class="col">
                   <div class="form-group p-2">
                    <label for="name">Roll*</label>
                    <input type="text" class="form-control" placeholder="type here name" name="roll" value="<?php echo  $roll_no; ?>"  disabled>

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">Register no*</label>
                    <input type="text" class="form-control" placeholder="type here name" name="reg" value="<?php echo $reg_no; ?>"  disabled>

                   </div>
                

                   </div>

                </div>
             
                
                <button type="button"  class="btn btn-outline-success button_2 mt-3 mb-3" id="flip" >Add Back money </button>

            </div>
            <!-- nd form -->
            <div class="close border mt-3 px-4" id="panel" >
            <div><h4 class="text-left pt-3"> Add Back money</h4></div>
            <div class="row">
                <div class="col">
                   <div class="form-group p-2">
                    <label for=" ">Privious Dues*</label>
                    <input type="number" class="form-control" placeholder="type here privious dues " name="privi">

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">Computer Fee*</label>
                    <input type="number" class="form-control" placeholder="type here computer fee" name="com_fee">

                   </div>
                

                   </div>

                </div>
                <div class="row">
                <div class="col">
                   <div class="form-group p-2">
                    <label for="name">Exam Fee*</label>
                    <input type="number" class="form-control" placeholder="type here exam fee " name="exam">

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">other fee*</label>
                    <input type="number" class="form-control" placeholder="type here other fee " name="other_fee">

                   </div>
                

                   </div>

                </div>
            </div>
            <!-- 3 step  -->
            <div class="close border mt-3 px-4" id="panel" >
            <div><h4 class="text-left pt-3"> Monthly paid money</h4></div>
            <div class="row">
                <div class="col">
                   <div class="form-group p-2">
                    <label for="name">Date*</label>
                    <input type="date" class="form-control" placeholder="type here name" name="d_date" required>

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">paid Fee*</label>
                    <input type="number" class="form-control" placeholder="type here name" name="paid_fee" required>

                   </div>
                

                   </div>

                </div>
                <div class="row">
                <div class="col">
                   <div class="form-group p-2">
                    <label for="name">Paid month* (name)</label>
                    <input type="month" class="form-control" placeholder="type here name" name="m_name" required>

                   </div>

                </div>
                <div class="col">
                <div class="form-group p-2">
                    <label for="name">Message </label>
                    <input type="text" class="form-control" placeholder="type here message " name="message" required>

                   </div>
                

                   </div>

                </div>
            </div>
            <div class="form-group">
              <label for="">Payment Mode</label>
                        <select class="form-select form-select-sm mb-3 px-4 " aria-label=".form-select-lg example" name="pay_mode">
                            <option selected>Select Mode</option>
                            <option value="google Pay">google Pay</option>
                            <option value="Phone pay">Phone pay</option>
                            <option value="UPI Paytm">UPI Paytm</option>
                            <option value="Online Pay">Online Pay</option>
                            <option value="Cash Pay">Cash Pay</option>
                            <option value="Other Pay">Other Pay</option>

                        </select>




                    </div>
                  <div class="row px-4">
                    <div class="col mx-auto" >  <div class="form-group">
                    <button type="submit" class="btn btn-success mb-5" name="submit" > pay now </button>

                    </div>
                   

                    </div>
                    <div class="col mx-auto" >
                    <div class="form-group">
                    <button type="reset" class="btn btn-secondary mb-5" name="submit" >Reset </button>

                    </div>

                    </div>

                  </div>


    </form>



        </div>

    
   

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>