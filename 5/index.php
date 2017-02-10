<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/TweenMax.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/pjax.js"></script>
  <script type="text/javascript" src="js/pjax-config.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <title></title>
</head>

<body>


  <div class="first_view">
    <h1>
      <img src="img/head_logo.png" alt="Neooo!" class="head_logo">
      <span>○○専門ホームページ【Neooo!】</span>
    </h1>
    <h2>月額/￥<span class="price">6,500</span><small>（税込）</small></h2>
    <h3 class="yellow">初期費用/￥<span class="price">0</span></h3>
    <h3 class="yellow">ドメイン、サーバー、すべてコミコミ！</h3>

    <div class="domain_check">
      <h2>ドメイン検索</h2>
      <h3>ホームページのアドレスはドメインによって決まります。</h3>
      <input type="text" value="" class="domain_name" placeholder="例：fmr">
      <p class="submit">検 索</p>
    </div>

    <script>
      $(function(){
        $(".domain_name").click(function() {
          $(".domain_name").removeAttr('placeholder');
        });
        $(".submit").on("click",function(){
          $(".preloader").addClass("start");
      // $i = "greengreengreen"
      $i = $(".domain_name").val();
      $.post(
        "domain_check.php",
        {
          name:$i,
        },
        function( data ) {
          $( "#domain" ).html( data );
          //console.log("comp");
          $(".preloader").removeClass("start");
        });
    });
      })
    </script>

    <div class="domain_base">
      <img src="img/preloader.gif" class="preloader">
      <table id="domain">
        <tr>
          <th>.com</th>
          <td>　</td>
        </tr>
        <tr>
          <th>.net</th>
          <td>　</td>
        </tr>
        <tr>
          <th>.biz</th>
          <td>　</td>
        </tr>
        <tr>
          <th>.info</th>
          <td>　</td>
        </tr>
        <tr>
          <th>.club</th>
          <td>　</td>
        </tr>
        <tr>
          <th>.top</th>
          <td>　</td>
        </tr>
      </table>
    </div>

  </div>

  <div class="general">



    <h2><span>特徴</span></h2>

    <div class="content_box content_box_read">
      <p>
        Neooo!（ネオー）はどなたでも簡単に扱える○○専門のホームページを<b>“必要以上を必要最小限の費用で”</b>を提供するサービスです。
        これまで○○のホームページを作るのには「デザインの制作・システム機能」といったものに数十万〜数百万円単位の費用と、
        月単位の制作期間が必要とされ、高コストな上に使えるようになるまでに膨大な時間を要するとても面倒なものでした。
      </p>
      <p>
        Neooo!には制作期間というものはありません。すでにホームページ・システム機能は用意されています。
        ですから、制作費用・期間は不要になり最小限の費用で必要以上のものを提供することができます。
      </p>
      <br>


      <h3 class="point_tt">
        <span><img src="img/icon_easy.png" width="200" alt="簡単"></span>
        <span>いつでも簡単に更新！</span>
      </h3>
      <p>
        ホームページの専用管理画面を発行していますので、
        情報の登録はとても簡単です。いつでも好きなタイミングで更新ができます。
      </p>
      <br>


      <h3 class="point_tt">
        <span><img src="img/icon_cost.png" width="200" alt="簡単"></span>
        <span>初期費用￥0／月額￥6,500！</span>
      </h3>
      <p>
        最小限の費用は「月額／6,500円」のみです。それ以上に掛かる費用はありません。
        ○○のホームページを運用するために必要な機能は全て揃えています。
        ま他、広告表記や機能制限も基本的<sup>*1</sup>にありません。
      </p>
      <p>
        <sup>*1</sup>ホームページの容量制限はあります。（約100GB）
      </p>
      <br>


      <h3 class="point_tt">
        <span><img src="img/icon_freedom.png" width="200" alt="高い自由度"></span>
        <span>ページ追加は無料＆自由！</span>
      </h3>
      <p>
        シンプルで高い自由度を取り入れたものにしています。
        新しいページの「作成・公開まで」すべてお店側で行う事ができ、高い拡張性を保ったホームページ運用ができます。
        またブログ機能も取り入れ、容量限界までサイトのページ数を自由に増やすことができます。
      </p>
      <br>

    </div>


    <div class="entry">
      <dl>
        <dt><img src="img/package_icon_500.png" alt="Neooo!" width="250"></dt>
        <dd>
          <p>○○ホームページは必要以上を必要最小限の費用で。</p>
          <h2>月額/￥<span class="price">6,500</span><small>（税込）</small></h2>
          <h3 class="yellow">初期費用/￥<span class="price">0</span></h3>
          <h3 class="yellow">ドメイン、サーバー、すべてコミコミ！</h3>
          <a href="#entry" class="entry_btn"><img src="img/icon_entry.png" width="25">お申し込みはこちら</a>
        </dd>
      </dl>
    </div>


    <h2><span>コンセプト</span></h2>

    <div class="content_box content_box_read">
      <p>
        Neooo!は『ホームページへの投資を確実に利益に還元する』という想いを元に開発・提供を始めました。
        ○○業界では1本当たりの利益は平均約8,000円と言われておりますが、
        Neooo!は月額利用料が6,500円です。それ以外にかかる費用は一切ありません。
      </p>
      <p>
        Neooo!は利益になるホームページを形にした○○専門のホームページサービスです。
      </p>
    </div>


    <div class="merit_wrap">
      <h2><span>レスポンシブデザイン</span></h2>
      <div class="content_box">

        <p>
          レスポンシブデザインとはホームページデザインの手法の一つで様々なデバイスや画面サイズに一つのファイルで対応することです。
          パソコンやスマートフォン、タブレット端末、全てに同じ内容を表示できるので更新作業の簡略化や更新漏れの防止対策にもなっています。
        </p>
        <br>

        <div class="merit">
          <h3>様々なデバイスに最適化されていて見やすい！</h3>
          <p>
            パソコンだけではなく、スマートフォンやタブレットなどデバイス（端末機器）サイズに合わせて、
            最適なレイアウト・デザインに切り替わるレスポンシブデザインを採用しているため、
            様々なデバイスで見やすいデザインになります。
          </p>
        </div>


        <div class="merit">
          <h3>検索エンジン対策（SEO）に有利！</h3>
          <p>
            検索エンジン最大手Googleは検索結果の順位要素の評価基準に『モバイルフレンドリー』というアルゴリズムを追加すると発表しました。
            Neooo!で採用するレスポンシブデザインはGoogleが推奨するモバイルフレンドリーになるため、検索エンジン対策(SEO)に有利となります。
          </p>
        </div>


        <div class="merit">
          <h3>将来的に現れる端末にも対応しやすくなる！</h3>
          <p>レスポンシブデザインでは、デバイスの横幅に合わせてレイアウト・デザインが切り替わるので、
            これから新たに発売される様々サイズのデバイスにも対応しやすくなります。
          </p>
        </div>
      </div>
    </div>



    <h2><span>事例</span></h2>
    <div class="content_box">
      <p>Neooo!の活用事例です。低コスト低リスクでお客様の目標達成に大きく貢献しています。</p>
    </div>


    <div class="entry">
      <dl>
        <dt><img src="img/package_icon_500.png" alt="Neooo!" width="250"></dt>
        <dd>
          <p>○○ホームページは必要以上を必要最小限の費用で。</p>
          <h2>月額/￥<span class="price">6,500</span><small>（税込）</small></h2>
          <h3 class="yellow">初期費用/￥<span class="price">0</span></h3>
          <h3 class="yellow">ドメイン、サーバー、すべてコミコミ！</h3>
          <a href="#entry" class="entry_btn"><img src="img/icon_entry.png" width="25">お申し込みはこちら</a>
        </dd>
      </dl>
    </div>

    <h2><span>費用</span></h2>



    <h2><span>比較</span></h2>

    <div class="content_box">
      <table class="hikaku">
        <tr>
          <th>　</th>
          <td class="emp">Neooo!</td>
          <td>X社</td>
          <td>R社</td>
        </tr>
        <tr>
          <th>初期費用</th>
          <td class="emp">￥0</td>
          <td>￥0</td>
          <td>￥0</td>
        </tr>
        <tr>
          <th>月額</th>
          <td class="emp">6,500</td>
          <td>10,000〜</td>
          <td>8,000</td>
        </tr>
        <tr>
          <th>運用・保守費用</th>
          <td class="emp">無し</td>
          <td>別途費用</td>
          <td>自己負担</td>
        </tr>
        <tr>
          <th>広告・著作権表記</th>
          <td class="emp">無し</td>
          <td>有り</td>
          <td>有り</td>
        </tr>
        <tr>
          <th>広告・著作権表記</th>
          <td class="emp">無し</td>
          <td>無し</td>
          <td>有り</td>
        </tr>
        <tr>
          <th>スマートフォン対応</th>
          <td class="emp">○</td>
          <td>別途費用</td>
          <td>○</td>
        </tr>
        <tr>
          <th>契約期間（縛り）</th>
          <td class="emp">無し</td>
          <td>無し</td>
          <td>1年</td>
        </tr>
        <tr>
          <th>ページ追加</th>
          <td class="emp">￥0／自由追加</td>
          <td>別途費用／依頼</td>
          <td>別途費用／依頼</td>
        </tr>
        <tr>
          <th>ブログ機能</th>
          <td class="emp">有り</td>
          <td>無し</td>
          <td>無し</td>
        </tr>
      </table>

      <p><small>※Neooo!が独自に調査をした結果です。2017.01</small></p>

    </div>



    <h2><span>お店の声</span></h2>
    <div class="content_box">
      <div class="voice">
        <dl>
          <dt>○○○○さま</dt>
          <dd>今までは媒体の追加オプションのサイトを使用していましたが、毎月のコストは2万円以上。
            サイトの内容も媒体と全く同じで、コストに見合うだけの価値があるのか疑問に感じていました。
            しかし、Neooo!ならコストが今ままでの半額以下で、集客1本で元が取れる計算なので、
            かけた費用に見合う効果が得られていると実感しています。
          </dd>
        </dl>

        <dl>
          <dt>○○○○さま</dt>
          <dd>
            ホームページに関して多様知識はあるものに、今までのHPは、女の子情報やスケジュールなど
            あらかじめ決まった事しか追加・編集できず、自由にページを増やすことができませんでした。
            その都度、制作会社に連絡をして打ち合わせ・指示と費用をお支払いし、依頼をせねばなりませんでした。
            すごく簡単なものでも、１週間以上時間がかかったり、連絡も制作会社の営業時間内に限定され、とてもストレスを感じていました。
            Neooo!なら、自分のタイミングで好きな時いつでもページが増やせて、リンクテキストも自動に追加されるのでとても満足しています！
          </dd>
        </dl>
      </div>
    </div>



    <h2><span>よくあるご質問</span></h2>
    <div class="content_box">
      <div class="faq">
        <dl>
          <dt>利用する上でかかる費用は本当に¥6,500だけですか？税別ですか？</dt>
          <dd>
            はい。本当に￥6,500です。
            こちらは税込価格になりますので、
            これ以外の費用は一切かかりません。
            ドメイン代・サーバー代全て込みです。
          </dd>
        </dl>
        <dl>
          <dt>使い方がよくわかりません。</dt>
          <dd>
            使い方はとても簡単です。
            こちらの動画を是非ご覧下さい。
          </dd>
        </dl>
        <dl>
          <dt>申し込んだらどのくらいで使えるようになりますか？</dt>
          <dd>
            お申し込みから2日〜5日ほどでお使い頂けるようになります。
          </dd>
        </dl>
        <dl>
          <dt>女の子情報やスケジュールの登録は誰がするのですか？</dt>
          <dd>
            長くお使い頂きご登録に慣れて頂くためにも、
            こちらは、店舗さまにお願いしています。
          </dd>
        </dl>
        <dl>
          <dt>デザインは自由ですか？</dt>
          <dd>
            はい、自由です。
            こちらから高品質なデザインパターンをご用意しておりますので、
            店舗さまのイメージに合うものをお選び下さい。
            <a href="">デザインを選ぶ</a>
          </dd>
        </dl>
        <dl>
          <dt>気に入ったデザインがありません。</dt>
          <dd>
            新たにデザインを作成いたしますので、
            こちらからご希望のイメージをお伝え下さい。
            <a href="">希望のイメージを伝える</a>
            ※ご希望のデザインに100%お応えすることをお約束することはできませんのでご了承ください。
          </dd>
        </dl>
        <dl>
          <dt>ロゴを一緒に作ってもらうことはできますか？</dt>
          <dd>
            　はい、もちろん出来ます。
            Neooo!申し込み時に、ロゴ制作も一緒にオーダーして下さい。
            <a href="">お申し込みはこちら</a>
            <p>
              ※注記<br>
              別途費用はかかりません。<br>
              ロゴデータのお引き渡しはNeooo!の初月請求のご入金確認後になります。<br>
              デザイン案は一つです。<br>
              修正は一度限りとさせていただきます。<br>
              印刷用、Web用の二つのデータを納品させていただきます。
            </p>
          </dd>
        </dl>
        <dl>
          <dt>ロゴだけ作ってもらいたいのですが、、</dt>
          <dd>
            ロゴのみのご依頼【￥8.000（税込）】も承っておりますので、
            こちらからお気軽にお申し込み下さい。
            <p>
              <a href="">ロゴ制作のみオーダーする</a>
            </p>
          </dd>
        </dl>
      </div>
    </div>



    <h2><span>エントリーフォーム</span></h2>






  </div><!--content-->


</body>

</html>
