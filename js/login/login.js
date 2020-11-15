// 로그인 확인
var sessionId = sessionStorage.getItem("usr_id");

if(sessionId) {
    alert("이미 로그인 되어있습니다.");
    document.location.replace('/capstone/php/main/main.php');
}

$("#loginBtn").off().on('click', function(){
    var loginId = document.getElementById("usr_id").value;
    var loginPw = document.getElementById("usr_pw").value;

    if(!loginId) {
        alert("아이디를 입력해주세요.");
    } else if(!loginPw) {
        alert("비밀번호를 입력해주세요.");
    } else {
      var loginForm = document.loginForm;
      loginForm.method = "post";
      loginForm.action = "/capstone/php/login/login.php";
      loginForm.submit();
    }
});

// 회원가입 버튼 클릭 시
$("#signUpBtn").off().on('click', function(){
    //location.href="/capstone/html/signUp/signUp.html";
    $('#dialog').dialog({
      width: 500,
      height: 500,
      title:"회원가입", // 타이틀바 표시 될경우 제목
      buttons : [{
          text: "회원가입",
          "id" : "insertUsrBtn",
          click : function() {
              signUpValidation();
          }
        }, {
          text: "닫기",
          click : function() {
              $(this).dialog("close");
          }
        }
      ]
    });
});

// 회원가입 정보 유효성 검사
function signUpValidation() {
    var insertId = document.getElementById("insertId").value;
    var insertPw = document.getElementById("insertPw").value;
    var insertPwChk = document.getElementById("insertPwChk").value;
    var insertUsrNm = document.getElementById("insertUsrNm").value;
    var insertUsrCar = document.getElementById("insertUsrCar").value;

    if(!insertId || !insertPw || !insertPwChk || !insertUsrNm || !insertUsrCar) {
        alert("정보를 모두 입력해주세요.");
    } else if(insertPw != insertPwChk) {
        alert('비밀번호를 다시 확인해주세요.');
    } else {
        var signUpForm = document.signUpForm;
        signUpForm.method = "post";
        signUpForm.action = "/capstone/php/signUp/signUp.php";
        signUpForm.submit();
    }
}
