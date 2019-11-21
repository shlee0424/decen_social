<!doctype html>
<?  
  include "./this_user.php";
  if (!$UserID ) {  ?>
<script>
//location.href = "./sign-in.php"
</script>
<?  }
//  $filename = upload($_FILES['filename1'],50*1024*1024,'board');

?>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>상품 리스트 - Linking 관리자</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700|Roboto:400,700&display=swap&subset=korean">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/linking.css">
</head>

<body class="bg-dark text-light">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary shadow-sm" style="background: linear-gradient(135deg, #222 0%, #343a40 100%);">
    <a class="navbar-brand mr-auto mr-lg-3" href="#"><img src="../assets/img/logo-light.svg" style="height: 2rem;"></a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">회원 리스트</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">상품 리스트</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">상품 클릭 현황</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">인스턴스 정보</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">상품 리스트</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-lg-auto">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="검색">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <div class="nav-scroller bg-secondary navbar-dark shadow">
    <nav class="nav nav-underline">
      <a class="nav-link active text-light" href="#">Dashboard</a>
      <a class="nav-link text-light" href="#">
        Friends
        <span class="badge badge-pill bg-light align-text-bottom text-secondary">27</span>
      </a>
      <a class="nav-link text-light" href="#">Explore</a>
      <a class="nav-link text-light" href="#">Suggestions</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
      <a class="nav-link text-light" href="#">Link</a>
    </nav>
  </div>

  <main role="main" class="container">

    <h4 class="my-3">상품 리스트</h4>


    <form id="addProdFrm" action="reg-prod.php">
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">상품명</label>
        <div class="col-sm-10">
          <input type="text" name="title" class="form-control bg-secondary text-light">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">상품 가격</label>
        <div class="col-sm-10">
          <input type="number" name="price" class="form-control bg-secondary text-light">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">상품 소개</label>
        <div class="col-sm-10">
          <textarea  name="boardtext" class="form-control bg-secondary text-light" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">구매 링크</label>
        <div class="col-sm-10">
          <input  name="productLink"  type="text" class="form-control bg-secondary text-light">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">이미지 첨부</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file"name="file1"  class="custom-file-input">
            <label class="custom-file-label bg-secondary text-light" for="">첨부</label>
          </div>
        </div>
      </div>

      <p class="text-right mt-5"><button type="submit" class="btn btn-secondary">상품 등록</button></p>

    </form>
  </main>
  <footer>
    <p class="mt-5 mb-0 p-3 text-secondary border-top border-secondary">© 2019</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(function () {
      'use strict'
      $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
      })
    })

    $(function () {
      $('[data-toggle="popover"]').popover()
    })

  </script>
</body>

</html>