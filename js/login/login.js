var signUp = document.getElementById('signUp');
var insertUsr = document.getElementById('insertUsr');

// 회원가입 버튼 클릭 시
signUp.addEventListener('click', function(){
    //location.href="/capstone/html/signUp/signUp.html";

    $('#dialog').dialog({
      width: 500,
      height: 500,
      title:"Dialog Title", // 타이틀바 표시 될경우 제목
    });

    //$('#dialog').html("<h4>hi</h4>");
});

insertUsr.addEventListener('click', function(){
    // js에서 값 넘기기, 벨리데이션 체크
    var signUpForm = document.signUpForm;
    signUpForm.method = "post";
    signUpForm.action = "/capstone/php/signUp/signUp.php";
    signUpForm.submit();
});
