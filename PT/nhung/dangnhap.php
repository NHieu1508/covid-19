<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Log in</title>
            <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>flexed</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
<style>
    *{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
.container{
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}
.col-6{
    float: left;
    width: 50%;
}

.input-box{
    margin-bottom: 10px;
}
.input-box input[type='text'],
.input-box input[type='password'],
.input-box input[type='date']{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}


</style>
<body>
     <div class="container">
                <div class="login-form" align="center" >
                    <form action="" method="post">
                        <br>
                        <h1 style="text-align: center;">????NG NH???P</h1>
                        <div class="input-box">
                            <i ></i>
                            <div class="col-8" style="text-align: left;"><b>Username:</b>
                            <input type="text" placeholder="Nh???p cccd/cmnd" required="required" name='txtUsername' >
                        </div>
                        </div>
                        <br>
                        <div class="input-box">
                            <i ></i>
                            <div class="col-8"style="text-align: left;"><b>Password:</b>
                            <input type="password" placeholder="Nh???p s??? ??i???n thoai" required="required" name='txtPassword'>
                        </div>
                        </div>
                      
                    
                        <div class="btn-box" style="padding-right: 30px;;">
                           
                            <button type="submit" class="btn btn-dark" name="nut" value='????ng nh???p' >
                                ????ng nh???p
                            </button>
                        
                        </div>
                        <br>
                        <br>
                   <p style="text-align: center;">L??u ??: Tr?????c khi ????ng nh???p ph???i <a href="bttt.php">Khai b??o y t???</a></p>
       
                <?php
			switch($_POST['nut'])
			{
				case'????ng nh???p':
				{
				
 
//Khai b??o utf-8 ????? hi???n th??? ???????c ti???ng vi???t
header('Content-Type: text/html; charset=UTF-8');

    //K???t n???i t???i database
    include('class/ttn.php');
	$p= new tmdt();
     
    //L???y d??? li???u nh???p v??o
    $email = ($_REQUEST['txtUsername']);
    $password = ($_REQUEST['txtPassword']);
//

     
    //Ki???m tra ???? nh???p ????? t??n ????ng nh???p v???i m???t kh???u ch??a
    if ($email!='' && $password !='') {
      if ($p->layuserpass($email,$password)==1)
	     {
            $_SESSION['CCCD'] = $email;
            echo "Xin ch??o " . $email . ". B???n ???? ????ng nh???p th??nh c??ng.";
			header('location:trangchu.php');
			  $p->themxoasua("INSERT INTO taikhoan (
            
                username,
                password)
             
                
            VALUES (
                '$email',
                '$password')
             ");
         }
	 else
		 {
              echo "T??n ????ng nh???p ho???c password kh??ng t???n t???i. Vui l??ng ki???m tra l???i";
		 }
	}
	else
	{	
        echo "Vui l??ng nh???p ?????y ????? t??n ????ng nh???p v?? m???t kh???u";
    }
				
				break;	
				}
			}
			
			?>
              
                        
              
              
              
              
         </form>
                </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                 <div class="footer">
                        <div class="copyright">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <p>?? 12 NguyenVanBao Ph?????ng 4 Qu???n G?? V???p h??n h???nh ???????c ????n ti???p b???nh nh??n
                                            <br>??i???n tho???i: (028) 39 23 46 29
                                           <br>Ng?????i ch???u tr??ch nhi???m:Team G?? C??ng ???????c
                                           <br><i class="fa fa-map-marker" aria-hidden="true"></i> <span>???????ng 1234 Phan V??n Tr???<br />
                                            Qu???n G?? V???p,Th??nh Ph??? H??? Ch?? Minh<br>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <span>boyte@gmail.com</span>
                                            <br><i class="fa fa-phone-square" aria-hidden="true"></i> <span>012-345-6789</span>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <ul class="social_icon" style="padding-left: 470px;">
                                                    <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </body>
</html>