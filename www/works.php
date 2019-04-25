<?php require_once("../include/tpl/header.html") ?>
<div class="container">
  <h1 class="mt-3 mb-3 font-weight-bold border-bottom">Works</h1>

  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="keyboard-helix">
        <img class="card-img-top" src="./image/keyboard.jpg" alt="Helix-CKEP">
        <div class="card-body">
          <h3 class="card-title">Helix - CKEP</h3>
          <p class="card-text">
            オープンソースの分割型格子配置キーボード「<a href="https://github.com/MakotoKurauchi/helix">Helix</a>」をカスタマイズしたもの。
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="vrchat-world">
        <img class="card-img-top" src="image/vrc.png" alt="VRChat">
        <div class="card-body">
          <h3>CKEP VR Base / daden's hideout</h3>
          <p class="card-text">
            VRメタバース「<a href="https://vrchat.com/">VRChat</a>」のWorldです。Unity製です。<br>
            3Dモデル等の製作物もこちらに展示してあります。<br>
            各種実験結果等は技術系wikiの<a href="http://vrcworld.wiki.fc2.com/">VRChat 技術メモ帳</a>に参加しています。<br>
            VRChat用に作成した外部ツール等はこちら <a href="https://github.com/dadenCKEP/VRChatRemoteAssets"><i class="fas fa-link"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="ap-miconcar">
        <img class="card-img-top" src="./image/miconcar.png" alt="AP-MiconCar">
        <div class="card-body">
          <h3 class="card-title">
            <a href="https://wiki.ckep.info/index.php?title=AP-MiconCar">AP-MiconCar</a>
          </h3>
          <p class="card-text">Arduino Uno用のシールドで、マイコンカーとして使用するためのもの。</p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="server-system">
        <img class="card-img-top" src="./image/server.png" alt="Server">
        <div class="card-body">
          <h3>
            <a href="https://wiki.ckep.info/index.php?title=%E9%9B%BB%E8%84%B3%E6%A9%9F%E5%B7%A7%E6%8A%80%E5%B8%AB%E5%9B%A3%E8%A4%87%E5%90%88%E5%9F%BA%E5%B9%B9%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0">電脳機巧技師団複合基幹システム</a>
          </h3>
          <p class="card-text">
            このサイトを含む、ckpe.info以下の全てのサイトをホストするシステム。簡単に言えば自宅サーバーとその関係機器。<br>DDNSやリバースプロキシなども含まれる。 <br> <a href="https://wiki.ckep.info/index.php?title=%E9%9B%BB%E8%84%B3%E6%A9%9F%E5%B7%A7%E6%8A%80%E5%B8%AB%E5%9B%A3%E8%A4%87%E5%90%88%E5%9F%BA%E5%B9%B9%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0">wiki</a>に多少情報があります。
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="sensor-system">
        <div class="card-body w-100 p-3">
          <h3 class="text-center">
            <i class="fas fa-thermometer-half fa-5x"></i><i class="fas fa-tint fa-5x"></i>
          </h3>
          <h3>
            Sensor Management System
          </h3>
          <p class="card-text">
            サーバーの温度や室内の環境センサ各種などをM2Xを通して統合管理しています。<br>
            <ul>
              <li><a href="https://m2x.att.com/dashboards/shared/addfcb096712f3bc67053fd3c88664a4"><i class="fas fa-link"></i> M2X Dashboard</a></li>
              <li><a href="dashboard.php"><i class="far fa-file"></i> Dashboard page</a></li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="game-server">
        <div class="card-body">
          <h3 class="text-center">
            <i class="fas fa-cogs fa-5x"></i><i class="fas fa-hammer fa-5x"></i>
          </h3>
          <h3>
            Game Server
          </h3>
          <p class="card-text">
            ゲームサーバー各種。Factorio, 7 days to die, Minecraftなど。CentOSにて運用中。(非公開)
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="card m-2" id="this-website">
        <div class="card-body">
          <h3 class="card-title text-center">
            <i class="far fa-file-alt fa-5x"></i><br>(This page)
          </h3>
          <p class="card-text">
            このウェブサイト。<a href="https://github.com/dadenCKEP/dadenCKEP">Github</a>にソースコードがあります。<br> 複数のRaspberry Pi等にて運用されており、masterブランチがこのサーバーに反映されるようになっています。
          </p>
        </div>
      </div>
    </div>
  </div>

  <h2 class="mt-3 mb-3 font-weight-bold border-bottom">その他(進行中・保留)</h2>
  <p>上記のテーマと合わせてTrelloの公開ボードにて管理されています。</p>
  <blockquote class="trello-board-compact">
    <a href="https://trello.com/b/fWc9H95H/%E7%A0%94%E7%A9%B6">Trello Board</a>
  </blockquote>
</div>

<?php require_once("../include/tpl/footer.html") ?>