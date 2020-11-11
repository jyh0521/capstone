<?
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/sessionCheck.php";
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/connectDB.php";

    $usr_id = $_POST['signUp_usr_id'];
    $usr_pw = $_POST['signUp_usr_pw'];
    $usr_pwChk = $_POST['signUp_usr_pw_chk'];
    $usr_nm = $_POST['signUp_usr_nm'];
    $usr_car = $_POST['signUp_usr_car'];

    echo $usr_nm;

    if($usr_pw != $usr_pwChk) {
        // echo "<meta charset='utf-8'>
        //       <script>
        //           alert('비밀번호를 다시 확인해주세요.');
        //           location.replace('/capstone/html/login/login.html');
        //       </script>";
    }
?>
