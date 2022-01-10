<?PHP
function array_2($arr)
{
  for ($i = 0; (isset($arr[1][$i+2])); $i++) // для каждого элемента массива
  {
     if                                 (($arr[0][$i] == $arr[0][$i+1]) || ($arr[0][$i] == $arr[0][$i + 2]) ||
       ($arr[0][$i] == $arr[1][$i]) || ($arr[0][$i] == $arr[1][$i + 1]) || ($arr[0][$i] == $arr[1][$i + 2]) ||
       ($arr[0][$i] == $arr[2][$i]) || ($arr[0][$i] == $arr[2][$i + 1]) || ($arr[0][$i] == $arr[2][$i + 2]) ||

                                           ($arr[0][$i + 1] == $arr[0][$i + 2]) ||
       ($arr[0][$i + 1] == $arr[1][$i]) || ($arr[0][$i + 1] == $arr[1][$i + 1]) || ($arr[0][$i + 1] == $arr[1][$i + 2]) ||
       ($arr[0][$i + 1] == $arr[2][$i]) || ($arr[0][$i + 1] == $arr[2][$i + 1]) || ($arr[0][$i + 1] == $arr[2][$i + 2]) ||

       ($arr[0][$i + 2] == $arr[1][$i]) || ($arr[0][$i + 2] == $arr[1][$i + 1]) || ($arr[0][$i + 2] == $arr[1][$i + 2]) ||
       ($arr[0][$i + 2] == $arr[2][$i]) || ($arr[0][$i + 2] == $arr[2][$i + 1]) || ($arr[0][$i + 2] == $arr[2][$i + 2]) ||

       ($arr[1][$i] == $arr[1][$i + 1]) || ($arr[1][$i] == $arr[1][$i + 2]) ||
           ($arr[1][$i] == $arr[2][$i]) || ($arr[1][$i] == $arr[2][$i + 1]) || ($arr[1][$i] == $arr[2][$i + 2]) ||

      ($arr[1][$i + 1] == $arr[1][$i + 2]) ||
          ($arr[1][$i + 1] == $arr[2][$i]) || ($arr[1][$i + 1] == $arr[2][$i + 1]) || ($arr[1][$i + 1] == $arr[2][$i + 2]) ||

        ($arr[1][$i + 2] == $arr[2][$i]) || ($arr[1][$i + 2] == $arr[2][$i + 1]) || ($arr[1][$i + 2] == $arr[2][$i + 2]) ||

        ($arr[2][$i] == $arr[2][$i + 1]) || ($arr[2][$i] == $arr[2][$i + 2]) ||

        ($arr[2][$i + 1] == $arr[2][$i + 2]))

    $arr_return[$i] = 0; 
    else $arr_return[$i] = 1;
  }
    return $arr_return; // Исходящие данные: Массив
}

// Закончилось определение функции. Дальше продолжение скрипта.

// Входящие данные: Массив
$array_input = array( array(1, 2, 3, 2, 7),
                      array(4, 5, 6, 8, 1),
                      array(7, 8, 9, 4, 5));

$array_echo = array_2($array_input);

for ($i = 0; isset($array_echo[$i]); $i++) 
{
   if ($array_echo[$i] == 1)  echo 'true  ';
   if ($array_echo[$i] == 0)  echo 'false  ';
}
?>
