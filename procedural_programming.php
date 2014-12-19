<?php
	# PHPでの手続き型プログラミングを勉強するためのサンプルコード
	# 1から10までの値を持つ配列の奇数の値の合計値を求める
	# 求める結果は25(1+3+5+7+9=25)

	# valuesという変数に1から10までの要素で構成される1次元配列で初期化する
	$values = range(1,10);

	# sum_oddsという変数に初期値0を代入して初期化する
	$sum_odds = 0;

	# foreachで配列の要素数だけ素数判定を行い、素数の総和を求める
	foreach($values as $value){
		if($value % 2 == 1){
			$sum_odds += $value;
		}
	}

	# 素数の総和を出力する
	echo $sum_odds. "\n";


