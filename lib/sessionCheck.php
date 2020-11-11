<?
    session_start();
    if($_SESSION['userID']) {
        echo"<script>
                alert('이미 로그인 되어있습니다.');
              </script>";
    }
    //document.location.replace('board.php');
?>
