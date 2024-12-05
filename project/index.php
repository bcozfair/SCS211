<!DOCTYPE html>
<html lang="th">

<head>
  <!-- css -->
  <?php include("css.php") ?>
</head>

<body>
  <header>
    <!-- header -->
    <?php include("header.php") ?>
  </header>

  <!-- container -->
  <div id="container" class="container">
    <!-- rentdata -->
    <?php include("rentdata.php") ?>

    <!-- promotion -->
    <div id="custom-alert" class="custom-alert">
      <p>กรุณาสมัครสมาชิกและเข้าสู่ระบบเพื่อรับโปรโมรชั่น</p>
      <a href="javascript:void(0);" class="custom-alert-btn" onclick="closeCustomAlert()">ปิด</a>
    </div>
    <hr />
    <div>
      <h2>โปรโมชันและข่าวสารล่าสุด</h2>
      <h4>รวมโปรโมชัน / ส่วนลด</h4>
      <ul class="cards">
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(1).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(2).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(3).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(4).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(5).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(6).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(7).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(8).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(9).jpg" />
          </div>
          <div class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
        <li class="card">
          <div>
            <img class="card-content" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/card%20(10).jpg" />
          </div>
          <div id="about" class="card-link-wrapper">
            <a href="javascript:void(0);" onclick="showAlert()" class="card-link">รับโปรโมรชั่น</a>
          </div>
        </li>
      </ul>
    </div>

    <!-- about us -->
    <hr />
    <hr />
    <div class="row">
      <h2>เช่ารถกับ CAR TO U</h2>
      <h4>เช่ารถกับเราดียังไง</h4>
      <hr />
      <div class="about col-lg-3">
        <img class="aboutimg" src="https://static.vecteezy.com/ti/vecteur-libre/p3/30747200-traverser-symbole-sur-calendrier-concept-vecteur-de-rejeter-calendrier-vectoriel.jpg" alt="" />
        <p>
          ยกเลิกฟรี<br />
          <small>แจ้งล่วงหน้า 24 ชั่วโมง</small>
        </p>
      </div>
      <div class="about col-lg-3">
        <img class="aboutimg" src="https://directpaynet.com/wp-content/uploads/2022/04/dont-accept-cards.jpg" alt="" />
        <p>
          ไม่มีบัตรเครดิตก็เช่าได้<br />
          <small>แค่ใช้เอกสารยืนยันเท่านั้น</small>
        </p>
      </div>
      <div class="about col-lg-3">
        <img class="aboutimg" src="https://icon-library.com/images/service-center-icon/service-center-icon-22.jpg" alt="" />
        <p>
          เจ้าหน้าที่ดูแล 24 ชั่วโมง<br />
          <small>มีเจ้าหน้าที่ดูแลตลอดการเช่า</small>
        </p>
      </div>
      <div class="about col-lg-3">
        <img class="aboutimg" src="https://pibsecure.com/wp-content/uploads/2023/10/renewal-car-insurance-8.png" alt="" />
        <p>
          ประกันภัยชั้น 1 ทุกคัน<br />
          <small>คุ้มครองทุกกรณีตลอดการเช่า</small>
        </p>
      </div>
    </div>

    <!-- count num -->

    <!-- modal -->
    <?php include("modal.php") ?>

    <!-- suggestion -->
    <hr />
    <div class="row p-2">
      <h2>ขับขี่ปลอดภัย</h2>
      <h4>คำแนะนำการขับขี่</h4>
      <hr />
      <div class="row mx-auto m-1">
        <div class="col-lg-6">
          <img class="card" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/safe%20(1).jpg" alt="" style="width: 100%; height: 520px" />
        </div>
        <div class="col-lg-6">
          <img class="card" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/safe%20(2).jpg" alt="" style="width: 100%; height: 520px" />
        </div>
      </div>
      <div class="row mx-auto m-1">
        <div class="col-lg-6">
          <img class="card" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/safe%20(3).jpg" alt="" style="width: 100%; height: 520px" />
        </div>
        <div class="col-lg-6">
          <img class="card" src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/safe%20(4).jpg" alt="" style="width: 100%; height: 520px" />
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include("footer.php") ?>
  <!-- cookie -->
  <?php include("cookie.php") ?>
  <!-- script -->
  <?php include("script.php") ?>
</body>

</html>