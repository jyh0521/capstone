<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>주차 예약 시스템</title>
</head>
<body>
    <p>메인 페이지</p>
    <div id="map" style="width:100%;height:850px;"></div>
    <button id="logoutBtn">로그아웃</button>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=5dc46c2c9299b2c057dcdc9e42f4da58"></script>
    <script type="text/javascript" src="/capstone/js/main/main.js"></script>
</body>
</html>

<?
    include $_SERVER["DOCUMENT_ROOT"]."/capstone/lib/connectDB.php";

    $sql = "select * from PAK_LOT";
    $result = mysql_query($sql, $connect);
    $row_num = mysql_num_rows($result);

    while($row = mysql_fetch_array($result)) {
        echo "<script>
                  var markerPosition  = new kakao.maps.LatLng({$row['PAK_X']}, {$row['PAK_Y']});
                  // 마커를 생성합니다
                  var marker = new kakao.maps.Marker({
                      position: markerPosition,
                      clickable: true
                  });
                  // 마커가 지도 위에 표시되도록 설정합니다
                  marker.setMap(map);

                  kakao.maps.event.addListener(marker, 'click', function() {
                      if('{$row['PAK_YN']}' == 'Y')
                          alert('예약가능');
                      else
                          alert('예약불가');
                  });
              </script>";
    }
?>
