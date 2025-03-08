<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';




mysqli_free_result($result);
mysqli_close($conn);
?>
<?php include_once './parts/header.php';?>







<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
<link rel="stylesheet" href="./css/style.css">
    <title>مشاري خالد الصنقر</title>
    
 

</head>
<body>





</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
     <image src="images/mesh-icon.png" alt="" width="400" height="400">
      <h1 class="display-4 fw-normal">اربح مع مشاري</h1>
      <p class="lead fw-normal">باقي على السحب</p>
      <h3 id="counter"></h3>
     
    </div>
    <div class="product-device shadow-sm d-none d-md-block">شارك بالمسابقة مجانا</div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"> </div>
  


<font color="red">

    <div class="container">
      <h3>لدخول السحب قم بالخطوات التالية:</h3>
      </font>
     <ul class="list-group list-group-flush">
     <li class="list-group-item"> يجب متابعتي في مواقع التواصل الاجماعي</li>
     <li class="list-group-item">يجب ان يكون عمر المشارك فوق 16</li>
     <li class="list-group-item">سيكون هناك بث مباشر للجواب على جميع الاسئلة</li>
      <li class="list-group-item">سوف يتاح التسجيل قبل ساعة من انتهاء الوقت</li>
     
  <H3 class="list-group-item">الرابح سيحصل على رحلة مجانية الى جزيرة بالي</H3>
  </ul>
  </div>


    
    </div>    
  </div>

  
 

  <div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
  </div>


 
<form  action="index.php"  <?PHP $_SERVER ['PHP_SELF']?>  method="POST">
<div class="container">   
<h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php  echo $firstName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']  ?></div>
  </div>

  
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php  echo $lastName  ?>"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError']  ?></div>
  </div>

  
  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php  echo $email  ?>"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']  ?></div>
  </div>
  <div class="container">   
  <button type="submit" name="submit" class="btn btn-primary" >ارسال</button>
</form>
</div>    
  </div>



    </div>







  

<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" >
اختيار الرابح
</button>
</div> 
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
   الرابح في المسايقة 

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <?php foreach($users as $user): ?>
        <h1><?php echo htmlspecialchars($user['firstName']) .' '. htmlspecialchars($user['lastName']); ?></h1>
        <?php  endforeach; ?>
      
      </div>
     
      </div>
    </div>
  </div>
</div>







<div id="cards" class="row mb-5 pb-5">








<?php include_once './parts/footer.php';












