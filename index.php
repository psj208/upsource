<!DOCTYPE html>
<html lang="ko">
<head>
    <title>코드 리뷰</title>
    <script>
    </script>
</head>
<body>
<?php
    $i = 1;
    for (; ; ) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }

    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );

    for($i = 0; $i < count($people); ++$i) {
        $people[$i]['salt'] = mt_rand(000000, 999999);
    }
?>

UPSOURCE 입니다.
</body>
</html>
