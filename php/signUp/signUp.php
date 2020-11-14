<?
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/connectDB.php";

    $usr_id = $_POST['signUp_usr_id'];
    $usr_pw = $_POST['signUp_usr_pw'];
    $usr_nm = $_POST['signUp_usr_nm'];
    $usr_car = $_POST['signUp_usr_car'];

    $sql = "select USR_ID from usr_inf where USR_ID = '$usr_id'";
    $result = mysql_query($sql, $connect);
    $row_num = mysql_num_rows($result);

    if($row_num) {
        echo "<script>
                  alert('이미 존재하는 아이디 입니다.');
                  document.location.replace('/capstone/html/login/login.html');
              </script>";
    } else {
      $sql = "insert into usr_inf values('$usr_id', password('$usr_pw'), '$usr_nm', '$usr_car')";
      mysql_query($sql, $connect);

      echo "<script>
                alert('회원가입이 완료되었습니다. 로그인 해주세요.');
                document.location.replace('/capstone/html/login/login.html');
            </script>";
    }
?>
<meta charset='utf-8'>
