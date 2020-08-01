<?php
session_start();

//require'main_php.php';  //загружаем основной пхп

//сортируем
if (isset($_POST['button']))
{
  if ($_POST['button']==0)
  {
    $_SESSION['sort_0']=0;
  }
  if ($_POST['button']==1)
  {
    $_SESSION['sort_0']=1;
  }
  if ($_POST['button']==2)
  {
    $_SESSION['sort_0']=2;
  }
}

 ?>
