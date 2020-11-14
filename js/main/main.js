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
