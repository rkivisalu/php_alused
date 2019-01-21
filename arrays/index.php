<?php

/*$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);
*/
/*for($i = 0; $i < count($kasutajad); $i++){
  //  echo $i.' - '.$kasutajad[$i].'<br>';
//}
foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}
*/
/*$kasutajad = array();

$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');
*/
/*foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}*/
echo '<hr>';
/*array_shift($kasutajad);
array_pop($kasutajad);

foreach($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
*/
 /*   echo '<pre>';
    var_dump($kasutajad);
    echo '</pre>';
*/
// sort($kasutajad);
// lisavõimalused massiivitöötluses
// http://php.net/manual/en/book.

$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddle',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);

  /*  echo '<hr>';
    echo '<pre>';
    print_r($kasutajad);
    echo '</pre>';
  */

foreach ($kasutajad as $kasutaja) {
    for ($i = 0; $i < count($kasutaja); $i++) {
        if ($kasutaja[3] == 'female') {
            echo '<div style="color: red">';
        } else {
            echo '<div style="color: blue">';
        }
        echo $kasutaja[$i] . '</div>';
    }
    echo '<hr>';
}
