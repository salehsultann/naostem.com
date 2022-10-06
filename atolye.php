
 <?php
 
 $s_name = $_POST['s_name'];
 $cat = filter_input(INPUT_POST, "cat", FILTER_VALIDATE_INT);
 $s_phone = $_POST['s_phone'];
 $s_name = $_POST['s_name'];
 $s_name = $_POST['s_name'];
 $s_name = $_POST['s_name'];
 $s_email = $_POST['inputEmail'];
 $inputPassword = $_POST['form-control'];

 var_dump($ad, $il, $ilce, $okul, $telefon, $telefon, $d_ad, $d_telefon);
 
$sql = "INSERT INTO message (ad, il, ilce, okul, telefon, d_ad, d_telefon)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssisss",
                       $ad,
                       $il,
                       $ilce,
                       $okul,
                       $telefon,
                       $d_ad,
                       $d_telefon);
                       
mysqli_stmt_execute($stmt);

echo "Record saved.";
                       