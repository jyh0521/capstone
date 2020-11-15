var sessionId = sessionStorage.getItem("usr_id");

if(!sessionId) {
    alert("로그인해주세요");
    document.location.replace('/capstone/html/login/login.html');
}

var logoutBtn = document.getElementById("logoutBtn");

logoutBtn.addEventListener('click', function(){
    alert("로그아웃 되었습니다.");
    sessionStorage.clear();
    document.location.replace('/capstone/html/login/login.html');
});

var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(36.6107518, 127.2886325), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption);
