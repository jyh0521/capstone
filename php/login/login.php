<?
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/connectDB.php";

    $usr_id = $_POST['usr_id'];
    $usr_pw = $_POST['usr_pw'];

    echo $usr_id;

    $query = "select * from USR_INF";

    $result = mysql_query($query, $connect);

    $row = mysql_fetch_array($result);
    //echo $row['USR_ID'];
?>
