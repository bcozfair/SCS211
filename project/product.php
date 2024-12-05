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

    <!-- modal -->
    <?php include("modal.php") ?>

    <!-- breadcrumb -->
    <div class="row">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> หน้าหลัก</a></li>
        <li class="breadcrumb-item active" aria-current="page">สินค้าและบริการ</a></li>
        <li class="breadcrumb-item "><a href="condition.php#promotion">เงื่อนไขและข้อตกลง</a></li>
      </ol>
    </div>

    <!-- product -->
    <div class="row">
      <h2>สินค้าและบริการ</h2>
      <h4>รถเช่าทั้งหมดของเรา</h4>
      <div class="filter-menu text-end">
        <label for="filter-dropdown">เลือกประเภท:</label>
        <select id="filter-dropdown" class="filter-dropdown">
          <option value="all">ทั้งหมด</option>
          <option value="on-sale">ราคาพิเศษ</option>
          <option value="available" selected>รถว่าง</option>
          <option value="Toyota">Toyota</option>
          <option value="Honda">Honda</option>
          <option value="Mazda">Mazda</option>
          <option value="BMW">BMW</option>
          <option value="Benz">Benz</option>
          <option value="EV">EV (ไฟฟ้า)</option>
        </select>
      </div>
      <div id="sec3" class="row mx-auto">
        <ul class="listing">

          <?php
          $cars_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/product.json"), true);
          $cars = $cars_obj["cars"];
          $count = 0; // Counter for columns
          ?>
          <?php foreach ($cars as $row) { ?>
            <li class="<?= $row["class"] ?>">
              <a class="img-wrapper" href="#">
                <!-- เพิ่ม element img เพื่อแสดงรูปภาพ -->
                <img src="<?= $row["image"] ?>">
              </a>
              <div class="<?= $row["note title"] ?>"><?= $row["note"] ?></div>
              <div class="info">
                <div class="title"><?= $row["title"] ?></div>
                <div class="<?= $row["normal"] ?>"><?= $row["price"] ?></div>
                <div class="<?= $row["sale"] ?>"><?= $row["price_sale"] ?></div>
                <div class="<?= $row["old"] ?>"><?= $row["price_old"] ?></div>
              </div>

              <div class="actions-wrapper">
                <a href="#" class="add-btn cart">จองรถ</a>
              </div>
            </li>

            <?php
            $count++;
            // Start a new row after every 4 columns
            if ($count % 3 == 0) {
              echo '<li class="<?= $row["class"] ?>';
            }
            ?>
          <?php } ?>

        </ul>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="new_footer_area" style="background-color: #222222">
    <?php include("footer.php") ?>
  </footer>

  <!-- cookie -->
  <?php include("cookie.php") ?>

  <!-- script -->
  <?php include("script.php") ?>

</body>

</html>