<!doctype html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700|Roboto:400,700&display=swap&subset=korean">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/sign-in.css">
  <title>로그인 - Linking 관리자</title>
  <script src="sign-in.js"></script>
</head>

<?	$UserID = $_COOKIE["UserID"];
	if ($UserID ) {	?>
<script>
location.href = "./member-list.php"
</script>
<?	}	?>

<body class="text-center bg-dark text-white">
  <form class="form-signin">
    <a href="#"><img class="mb-4" src="../assets/img/logo-light.svg" alt="로고" width="200"></a>
    <h1 class="h3 mb-3">관리자 로그인</h1>
    
    <label for="inputEmail" class="sr-only">아이디</label>
    <input type="text" id="inputEmail" maxlength="20" class="form-control sign-in-form" placeholder="아이디" required="" autofocus="">
    <label for="inputPassword" class="sr-only">비밀번호</label>
    <input type="password" id="inputPassword" onkeyup="passwd_onkeyup(event)" maxlength="15" class="form-control sign-in-form" placeholder="비밀번호" required="">
    <button class="btn btn-lg btn-secondary btn-block" onclick="fn_sign_in()" type="button">로그인</button>
   <!-- <div class="signin-links my-3"><a href="#">회원 가입</a><a href="#">아이디 확인</a><a href="#">비밀번호 확인</a></div> -->
    <p class="mt-5 mb-3 text-muted">© 2019</p>
  </form>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>