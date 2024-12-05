<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$people = $people_obj["people"];
?>

<?php foreach ($people as $row) { ?>
    <div><strong>Name: </strong> <?= $row["name"] ?></div>
    <div>
        <strong>Education: </strong><?= $row["education"] ?> |
        <strong>Role: </strong><?= $row["role"] ?> |
    </div>
    <div>
        <!-- ทำให้ email เป็น link -->
        <strong>Email: </strong><a href="mailto:<?= $row["email"] ?>"><?= $row["email"] ?></a> |
        <strong>Phone: </strong><?= $row["phone"] ?>
    </div>
    <div>
        <!-- เพิ่ม element img เพื่อแสดงรูปภาพ -->
        <img src="<?= $row["image"] ?>" style="width: 100px; height: auto; margin: 1em;">
        <hr>
        <!-- ปรับขนาดรูปภาพตามที่ต้องการ และเพิ่ม margin-bottom เพื่อเว้นบรรทัด -->
    </div>

<?php } ?>