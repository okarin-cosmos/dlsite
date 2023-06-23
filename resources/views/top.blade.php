<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>ErogeDLsite</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ mix('css/topstylesheet.css') }}" /> 
</head>
<body>
  <header class="header-core">
    <div class="containers">
      <div class="header-left">
        <img class="logo" src="/images/logo.png" alt="logo">
      </div>
      <div class="header-right">
        <a href="#">ログイン</a>
      </div>
    </div>
  </header>
  <div class="kounyu-ranking">
    <div class="work-heading">
      <h3 class="work-subheading">
        購入数ランキング
      </h3>
      <span href="#">購入ランキング一覧</span>
    </div>
    <div class="works-list top-rinking">
      <ul class="rinking-wrapper">
        <li class="rinking-slide rinking-slide-list" style="width: 236px; margin-right: 10px;">
          <div class="rinking-work-item">
            <div class="rank_number rank01">
              <span>1</span>
            </div>
            <a href="#" class="work-thumb">
              <img src="/images/syohin_test.png" alt="#" class="target-type">
            </a>
            <dl class="detalis">
              <dt class="work-name">商品名1</dt>
              <dd class="work-price">価格1</dd>
            </dl>
          </li>
          <li class="rinking-slide rinking-slide-list" style="width: 236px; margin-right: 10px;">
            <div class="rank_number rank02">
              <span>2</span>
            </div>
            <a href="#" class="work-thumb">
              <img src="/images/syohin_test.png" alt="#" class="target-type">
            </a>
            <dl class="detalis">
              <dt class="work-name">商品名2</dt>
              <dd class="work-price">価格2</dd>
          </dl>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <footer>
    <div class="container">
      <h4></h4>
      <p></p>
    </div>
  </footer>
</body>