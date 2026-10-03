<?php
preg_replace('#x.x#', '!', 'xax eee');

$str = 'xx xax xaax xbx';
$res = preg_replace('#xa?x#', '!', $str);

$str = 'xabx xababx xaabbx';
$res = preg_replace('#x(ab)+x#', '!', $str);

$str = 'a+x ax aax aaax';
$res = preg_replace('#a\+x#', '!', $str);

$str = 'a.x abx azx';
$res = preg_replace('#a\.x#', '!', $str);

$str = 'a.x abx azx';
$res = preg_replace('#a.x#', '!', $str);

preg_replace('#a.x#', '!', 'a.x');

preg_replace('#a.x#', '!', 'a.x abx azx');

$str = '2+3 223 2223';
$str = '23 2+3 2++3 2+++3 445 677';
$str = '[abc] {abc} abc (abc) [abc]';

$str = 'xx xax xaax xaaax';
$res = preg_replace('#xa{2,}x#', '!', $str);
echo $res . "<br>";

$str = 'xx xax xaax xaaax';
$res = preg_replace('#xa{3}x#', '!', $str);
echo $res . "<br>";

$str = 'aaa aaaaaaaaaa aaa';
$res = preg_replace('#a{10}#', '!', $str);
echo $res . "<br>";

$str = 'xx xax xaax xaaax';
$res = preg_replace('#xa{0,3}x#', '!', $str);

$res = preg_replace('#a.+x#', '!', $str);
echo $res . "<br>";

$str = '123abc3@@';
$res = preg_replace('#\D+#', '!', $str);
echo $res . "<br>";

$str = '1 12 123 abc @@@';
$res = preg_replace('#\s#', '!', $str);
echo $res . "<br>";

$str = '1 12 123 abc @@@';
$res = preg_replace('#\S+#', '!', $str);
echo $res . "<br>";

$str = '1 12 123a Abc @@@';
$res = preg_replace('#\w+#', '!', $str);
echo $res . "<br>";

$str = 'xax xbx xmx x@x';
$res = preg_replace('#x[a-k]x#', '!', $str);
echo $res . "<br>";

$str = 'xax xBx xcx x@x';
$res = preg_replace('#x[A-Z]x#', '!', $str);
echo $res . "<br>";

$str = 'xax x1x x3x x5x x@x';
$res = preg_replace('#x[0-9]x#', '!', $str);
echo $res . "<br>";

$str = 'xax x1x x3x x5x x@x';
$res = preg_replace('#x[a-z1-9]x#', '!', $str);
echo $res . "<br>";

$str = 'xax xbx x1x x2x x3x';
$res = preg_replace('#x[a-z12]x#', '!', $str);
echo $res . "<br>";

$str = 'xx xabesx xaadx x123x xa3x';
$res = preg_replace('#x[a-z]*x#', '!', $str);
echo $res . "<br>";

$str = 'xaz xbz x1z xCz';
$res = preg_replace('#x[^a-z]z#', '!', $str);
echo $res . "<br>";

$str = 'яяя ййй ёёё';
$res = preg_replace('#[а-яё]#u', '!', $str);
echo $res . "<br>";

$str = 'xax xbx xcx x@x';
$res = preg_replace('#x[a-z.]x#', '!', $str);
echo $res . "<br>";

$str = 'xaz x1z xAz x.z x@z';
$res = preg_replace('#x[^\d.a-z]z#', '!', $str);
echo $res . "<br>";

$str = 'x]x xax x[x x1x';
$res = preg_replace('#x[\[\]]x#', '!', $str);
echo $res . "<br>";

$str = 'axx bxx ^xx dxx';
$res = preg_replace('#[^d]xx#', '!', $str);
echo $res . "<br>";

$str = 'axx 9xx -xx @xx';
$res = preg_replace('#[a-z-0-9]xx#', '!', $str);
echo $res . "<br>";

$str = 'aaa';
$res = preg_replace('#^a+$#', '!', $str);
echo $res . "<br>";

echo preg_replace('#\b[a-z]+\b#', '!', 'axx bxx xxx exx');

$str = 'axx bxx bbxx exx';
$res = preg_replace('#(a|b+)xx#', '!', $str);
echo $res . "<br>";

echo preg_replace('(a+)', '!', 'text');

echo preg_replace('&a\&b&', '!', 'a&b');

echo preg_replace('#\\\\+#', '!', '\\ \\\\ \\\\\\');

echo preg_match('#a+#', 'eee bbb');

$reg   = '#\d{3,}#'; // ваша регулярка
echo $res . "<br>";

$arr[] = 'aaa 123 bbb';
$arr[] = 'aaa 12345 bbb';
$arr[] = 'aaa 12x bbb';
$arr[] = 'aaa 12 bbb';

foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}

echo preg_match('#^a+$#', 'aaaa');
echo preg_match('#^a+$#', 'aaab');

preg_match($reg, $str, $res);
var_dump($res);

$str = 'a aa aaa bbb';
echo preg_match_all('#a+#', $str);

$time = '12:01:02 13:03:04 14:05:06';
preg_match_all('#(\d\d):(\d\d):(\d\d)#', $time, $res, PREG_SET_ORDER);
print_r($res);

$str = 'abab123';
$reg = '#(?:ab)+([1-9]+)#';
preg_match_all($reg, $str, $res);
echo $res . "<br>";

$str = 'aaa@bbb ccc@ddd';
$res = preg_replace('#([a-z]+)@([a-z]+)#', '$2@$1', $str);
echo $res . "<br>";
$res = preg_replace('#([a-z])([a-z])\g{-2}#', '!', $str);
echo $res . "<br>";

$str = '2025-10-29';
$reg = '#(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})#';
echo $res . "<br>";

preg_match($reg, $str, $match);
var_dump($match);

$res = preg_replace('#(?<letter>[a-z])\k<letter>#', '!', $str);

if (!empty($res[1])){
    $year = $res[1];
} else{
    $year = $res[2];
}

preg_replace('#aaa(?!x)#', '!', 'aaab');

preg_replace('#(?<!x)aaa#', '!', 'baaa');

$str = '2+3= 3+5= 7+8=';

$res = preg_replace_callback('#(\d+)\+(\d+)=#', function($match) {
    return $match[0] . ($match[1] + $match[2]);
}, $str);

echo $res;

preg_replace('#[a-z]+#i', '!', 'aaa bbb AAA');

preg_replace('~
		[a-z]+ # буквы 
		@      # символ собаки
		[0-9]+ # цифры
	~x', '!', 'aaa@333');