<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'."\n";

for ($i = 1; $i <= 100; $i++) {
    echo "\n";
  if ($i%4===0 AND $i%5===0){
    echo'tic-tac';
  }
  elseif($i%5===0) {
    echo'tac';
  }
  elseif($i%4===0) {
    echo 'tic';
  }
  else{
    echo $i;
  }
}

// Q2 多次元連想配列
//問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';
//問題2
foreach ($personalInfos as $number => $profile){
    echo $number+1 . '番目の' .$profile['name'] . 'のメールアドレスは' .$profile['mail'] . 'で、電話番号は' . $profile['tel'] . 'です。'. "\n";
}
//問題3
foreach ($ageList as $key => $val){
    $personalInfos[$key]["age"]=$val;
}

// Q3 オブジェクト-1
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。学籍番号' . $this->studentId . '番は' . $this->studentName . 'です。';
    }
}

$Yamada = new Student('120', '山田');
$Yamada->attend();


// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$Yamada = new Student('120', '山田');
$Yamada->attend('php');

// Q5 定義済みクラス
//問題2
<?php

$Onemonthago = new DateTime();
$Onemonthago->modify('-1 month');
echo $Onemonthago->format('Y-m-d');
?>

//問題2
<?php

$today = new DateTime();
$day = new DateTime('1992-04-25');
$diff = $today->diff($day);
echo $diff->days;
?>