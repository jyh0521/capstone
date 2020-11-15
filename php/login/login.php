<?
    session_start();
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/connectDB.php";

    $usr_id = $_POST['usr_id'];
    $usr_pw = $_POST['usr_pw'];

    $sql = "select * from USR_INF where USR_ID = '$usr_id' and USR_PW = password('$usr_pw')";
    $result = mysql_query($sql, $connect);

    $row_num = mysql_num_rows($result);

    if($row_num) {
        echo "<script>
                    alert('로그인 되었습니다.');
                    var sessionId = '$usr_id';
                    sessionStorage.setItem('usr_id', sessionId);
                    document.location.replace('/capstone/php/main/main.php');
                </script>";
    }
    else {
      echo "<script>
                  alert('아이디 혹은 비밀번호가 일치하지 않습니다.');
                  document.location.replace('/capstone/html/login/login.html');
              </script>";
    }

?>
<meta charset="utf-8">
