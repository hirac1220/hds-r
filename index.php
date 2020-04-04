<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="医療機関で認知症の診断に広く使われる認知機能テストのひとつです。Q1〜Q9の質問に回答すると認知機能スコア化します。">
	<!-- ogp tag -->
	<meta property="og:url" content="ページのURL" />
	<meta property="og:title" content="長谷川式認知症スケール(自動計算)" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="医療機関で認知症の診断に広く使われる認知機能テストのひとつです。Q1〜Q9の質問に回答すると認知機能スコア化します。" />

	<title>長谷川式認知症スケール(自動計算サイト)</title>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">	
	<link rel="stylesheet" href="css/style.css">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<link rel="icon" type="image/x-icon" href="img/medica.ico">
</head>
<div class="container">
	<div class="row">
		<div class="col s12">
			<header>
				<div class="title">
					<p><i class="fas fa-file-medical fa-3x"></i></p>
					<h1>長谷川式認知症スケール</h1>
				</div>
			</header>
			<body>
			<form action="php/insert.php" method="POST">
				<!-- personal info -->
				<div class="form-inline" id="personal">	
				<h2><b>医療機関で認知症の診断に広く使われる認知機能テストのひとつです。</b></h2>
				<h2><b>テスト回答者</b></h2>
					<div class="input-field">
						<input type="text" id="name" name="name" class="validate">
						<label for="name">ニックネーム:</label>
					</div>
					<!-- <div class="input-field">
						<input type="email" id="mail" name="mail" class="validate">
						<label for="mail">Email:</label>
					</div>
					<p> -->
					<label>
						<input class="with-gap" name="sex" type="radio" value="男性"/>
						<span>男性</span>
					</label>
					</p>
					<p>
					<label>
						<input class="with-gap" name="sex" type="radio" value="女性"/>
						<span>女性</span>
					</label>
					</p>
					<div>
						<label>年代:</label>
						<select class="browser-default" name="age">
							<option value="" disabled selected>回答者の年代をお答えください。</option>
							<option value="10代">10代</option>
							<option value="20代">20代</option>
							<option value="30代">30代</option>
							<option value="40代">40代</option>
							<option value="50代">50代</option>
							<option value="60代">60代</option>
							<option value="70代">70代</option>
							<option value="80代">80代</option>
							<option value="90代">90代</option>
						</select>
					</div>
					<div>
						<label>地域:</label>
						<select class="browser-default" name="area">
							<option value="" disabled selected>お住まいの地域をお答えください。</option>
							<option value="北海道">北海道</option>
							<option value="青森県">青森県</option>
							<option value="岩手県">岩手県</option>
							<option value="宮城県">宮城県</option>
							<option value="秋田県">秋田県</option>
							<option value="山形県">山形県</option>
							<option value="福島県">福島県</option>
							<option value="茨城県">茨城県</option>
							<option value="栃木県">栃木県</option>
							<option value="群馬県">群馬県</option>
							<option value="埼玉県">埼玉県</option>
							<option value="千葉県">千葉県</option>
							<option value="東京都">東京都</option>
							<option value="神奈川県">神奈川県</option>
							<option value="新潟県">新潟県</option>
							<option value="富山県">富山県</option>
							<option value="石川県">石川県</option>
							<option value="福井県">福井県</option>
							<option value="山梨県">山梨県</option>
							<option value="長野県">長野県</option>
							<option value="岐阜県">岐阜県</option>
							<option value="静岡県">静岡県</option>
							<option value="愛知県">愛知県</option>
							<option value="三重県">三重県</option>
							<option value="滋賀県">滋賀県</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫県">兵庫県</option>
							<option value="奈良県">奈良県</option>
							<option value="和歌山県">和歌山県</option>
							<option value="鳥取県">鳥取県</option>
							<option value="島根県">島根県</option>
							<option value="岡山県">岡山県</option>
							<option value="広島県">広島県</option>
							<option value="山口県">山口県</option>
							<option value="徳島県">徳島県</option>
							<option value="香川県">香川県</option>
							<option value="愛媛県">愛媛県</option>
							<option value="高知県">高知県</option>
							<option value="福岡県">福岡県</option>
							<option value="佐賀県">佐賀県</option>
							<option value="長崎県">長崎県</option>
							<option value="熊本県">熊本県</option>
							<option value="大分県">大分県</option>
							<option value="宮崎県">宮崎県</option>
							<option value="鹿児島県">鹿児島県</option>
							<option value="沖縄県">沖縄県</option>
						</select>
					</div>
				</div>
				<!-- check -->
				<div class="form-inline" id="check">
				<h2><b>Q1〜Q9の質問に二人一組(質問者・回答者)で実施してください。</b></h2>
					<div class="q">
						Q1. 年齢はいくつですか？(2年までの誤差は正解)
						<p>
						<label>
							<input class="with-gap" name="age_check" type="radio" value="1"/>
							<span>正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="age_check" type="radio" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q2. 今日は何年何月何日ですか？何曜日ですか？</br>
						(年/月/日/曜日それぞれ正解にチェック。各1点)
						<p>
						<label>
							<input class="with-gap" name="year" type="hidden"   value="0"/>
							<input class="with-gap" name="year" type="checkbox" value="1"/>
							<span>年(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="month" type="hidden"   value="0"/>
							<input class="with-gap" name="month" type="checkbox" value="1"/>
							<span>月(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="day" type="hidden"   value="0"/>
							<input class="with-gap" name="day" type="checkbox" value="1"/>
							<span>日(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="date" type="hidden"   value="0"/>
							<input class="with-gap" name="date" type="checkbox" value="1"/>
							<span>曜日(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="date_none" type="hidden"   value="0"/>
							<input class="with-gap" name="date_none" type="checkbox" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q3. 私たちが今いるところはどこですか？</br>
						(正答がでなければ5秒後にヒントを与える)
						<p>
						<label>
							<input class="with-gap" name="place_check" type="radio" value="2"/>
							<span>自発的に答えられた(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="place_check" type="radio" value="1"/>
							<span>5秒おいて「家ですか？病院ですか？施設ですか？」の中から正しい選択ができた(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="place_check" type="radio" value="0"/>
							<span>不正解(0点)</span>
						</label>
						<p>
					</div>	
					<div class="q">
						Q4. これから言う3つの言葉を言ってみてください。あとの設問でまた聞きますのでよく覚えておいてください。(以下の系列のいずれか1つで実施)</br>
							1:  a)桜  b)猫  c)電車</br>
							2:  a)梅  b)犬  c)自動車
						<p>
						<label>
							<input class="with-gap" name="comment_check" type="radio" value="3"/>
							<span>3つ正解(3点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="comment_check" type="radio" value="2"/>
							<span>2つ正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="comment_check" type="radio" value="1"/>
							<span>1つ正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="comment_check" type="radio" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>	
					<div class="q">
						Q5. 100から7を順番に引いてください。(aに正解のときのみbも行う。各1点)</br>
						a) 100―7は？</br>
						b) それから7を引くと？
						<p>
						<label>
							<input class="with-gap" name="calc_check_a" type="hidden"   value="0"/>
							<input class="with-gap" name="calc_check_a" type="checkbox" value="1"/>
							<span>a) 正解:93(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="calc_check_b" type="hidden"   value="0"/>
							<input class="with-gap" name="calc_check_b" type="checkbox" value="1"/>
							<span>b) 正解:86(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="calc_none" type="hidden"   value="0"/>
							<input class="with-gap" name="calc_none" type="checkbox" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q6. これから言う数字を逆から言ってください。(aに正解のときのみbも行う。各1点)</br>
						a) 6―8―2</br>
						b) 3―5―2―9
						<p>
						<label>
							<input class="with-gap" name="memory_check_a" type="hidden"   value="0"/>
							<input class="with-gap" name="memory_check_a" type="checkbox" value="1"/>
							<span>a) 正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="memory_check_b" type="hidden"   value="0"/>
							<input class="with-gap" name="memory_check_b" type="checkbox" value="1"/>
							<span>b) 正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="memory_none" type="hidden"   value="0"/>
							<input class="with-gap" name="memory_none" type="checkbox" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q7. 先ほど覚えてもらった言葉(Q4の3つの言葉)をもう一度言ってみてください。(回答がでなかった言葉にはヒントを与える。ヒント無各2点。ヒント有各1点)
						<p>
						<label>
							<input class="with-gap" name="repeat_check_plant" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_plant" type="checkbox" value="2"/>
							<span>a) 植物(ヒント無) 正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_check_animal" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_animal" type="checkbox" value="2"/>
							<span>b) 動物(ヒント無) 正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_check_vehcle" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_vehcle" type="checkbox" value="2"/>
							<span>c) 乗物(ヒント無) 正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_check_plant_hint" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_plant_hint" type="checkbox" value="1"/>
							<span>a) 植物(ヒント有) 正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_check_animal_hint" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_animal_hint" type="checkbox" value="1"/>
							<span>b) 動物(ヒント有) 正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_check_vehcle_hint" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_check_vehcle_hint" type="checkbox" value="1"/>
							<span>c) 乗物(ヒント有) 正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="repeat_none" type="hidden"   value="0"/>
							<input class="with-gap" name="repeat_none" type="checkbox" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q8. これから5つの品物を見せます。それを隠しますので何があったか言って下さい。
						(1つずつ名前を言いながら並べ覚えさせる。次に隠す。時計、鍵、タバコ、ペン、硬貨など必ず相互に無関係なものを使う)
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="5"/>
							<span>5つ正解(5点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="4"/>
							<span>4つ正解(4点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="3"/>
							<span>3つ正解(3点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="2"/>
							<span>2つ正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="1"/>
							<span>1つ正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="correct_check" type="radio" value="0"/>
							<span>不正解(0点)</span>
						</label>
						</p>
					</div>
					<div class="q">
						Q9. 知っている野菜の名前をできるだけ多く言ってください。</br>
						(答えた野菜の名前を記入する。約10秒待ってもでない場合にはそこで打ち切る)
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="5"/>
							<span>10個以上正解(5点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="4"/>
							<span>9個正解(4点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="3"/>
							<span>8個正解(3点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="2"/>
							<span>7個正解(2点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="1"/>
							<span>6個正解(1点)</span>
						</label>
						</p>
						<p>
						<label>
							<input class="with-gap" name="fluent_check" type="radio" value="0"/>
							<span>0〜5個正解(0点)</span>
						</label>
						</p>
					</div>														
				</div>
				<button class="btn waves-effect waves-light" type="submit" id="button">
					<i class="far fa-check-circle"></i> 判定する
  				</button>
			</form>

			<script>
				$(document).ready(function(){
					$('select').formSelect();
				});
			</script>
			</body>
			<footer>
				<div>
					<p class="copyright">Copyright © 2018, hirac All rights reserved.&nbsp;</p>
				</div>
			</footer>
		</div>
	</div>
</div>
</html>