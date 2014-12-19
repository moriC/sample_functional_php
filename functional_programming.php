<?php
	# PHPでの関数型プログラミングを勉強するためのサンプルコード
	# 1から10までの値を持つ配列の奇数の値の合計値を求める
	# 求める結果は25(1+3+5+7+9=25)

	# 引数として与えら得れた値が素数であるか判定する関数
	function check_odd_number($num){
		if($num%2==1){
			return true;
		}else{
			return false;
		}
	}

	# 配列の中の奇数の合計値を演算して結果を出力する関数を呼び出す
	echo array_sum(array_filter(range(1,10), "check_odd_number")). "\n";

