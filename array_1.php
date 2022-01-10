<?PHP
function array_1($arr)
{
  for ($i = 1; isset($arr[$i + 1]); $i++) // для каждого элемента массива
  {
    if ((($arr[$i] > $arr[$i - 1]) && ($arr[$i] > $arr[$i + 1])) || (($arr[$i] < $arr[$i - 1]) && ($arr[$i] < $arr[$i + 1])))
      $arr_return[$i - 1] = 1; 
    else $arr_return[$i - 1] = 0;
  }
    return $arr_return; // Исходящие данные: Массив
}

// Закончилось определение функции. Дальше продолжение скрипта.

$array_input = array(1, 3, 5, 4, 5, 7);  // Входящие данные: Массив

$array_echo = array_1($array_input);

for ($i = 0; isset($array_echo[$i]); $i++) echo $array_echo[$i];
?>
