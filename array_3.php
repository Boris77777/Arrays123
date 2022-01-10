<?PHP
function array_3($arr, $arr2, $Limit_characters)
{
  $n = 0;
  $temp_array[0] = '';
  global  $array_formatting_conditions2;

    for ($j = 0; isset($arr[$j][0]); $j++) // для каждого элемента массива
    {  
      for ($i = 0; isset($arr[$j][$i]); $i++) // для каждого элемента массива
      {
        if (!isset($temp_array[$n])) $temp_array[$n] = '';
        if (strlen($temp_array[$n] . ' ' . $arr[$j][$i]) <= $Limit_characters)
        {
          if ($i == 0) $temp_array[$n] = $arr[$j][$i]; //собираем массив строк  
          else $temp_array[$n] = $temp_array[$n] . ' ' . $arr[$j][$i]; //собираем массив строк
          $array_formatting_conditions2[$n] = $arr2[$j];
        }
        else 
        {
          $n++;
          if (!isset($temp_array[$n])) $temp_array[$n] = '';
          $temp_array[$n] = $arr[$j][$i]; //собираем массив строк
          $array_formatting_conditions2[$n] = $arr2[$j];
        }
      }
      $n++;
    }
    return $temp_array; // Исходящие данные: Массив
}

// Закончилось определение функции. Дальше продолжение скрипта.

// Входящие данные: Массив
$array_input = array( array("Hello", "world"),
                      array("Brad", "came", "to", "dinner", "with", "us"),
                      array("He", "loves", "tacos"));

$Limit_characters_line = 16;//Лимит символов в строке

$array_formatting_conditions = array("LEFT", "RIGHT", "LEFT");// Входящие данные: Массив

$array_echo = array_3($array_input, $array_formatting_conditions, $Limit_characters_line);

$Limit_characters_line_string = (string)($Limit_characters_line);

for ($x = 0; $x < ($Limit_characters_line + 2); $x++) echo '*';

for ($i = 0; isset($array_echo[$i]); $i++) 
{
  echo "<br />"; 
  if ($array_formatting_conditions2[$i] == "LEFT") 
  {
    echo '*';
    printf("%-'." . $Limit_characters_line_string . "s", $array_echo[$i]);// выравнивание влево
    echo '*';
  }
  if ($array_formatting_conditions2[$i] == "RIGHT") 
  {
    echo '*';
    printf("%'." . $Limit_characters_line_string . "s", $array_echo[$i]);// выравнивание вправо
    echo '*';
  }
}

echo "<br />"; 
for ($x = 0; $x < ($Limit_characters_line + 2); $x++) echo '*';
?>
