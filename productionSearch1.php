<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<h1>Поиск запчасти</h1>
<div class="container">
			
			<form method="post"> <br> 
			<div>Тип поиска</div> 
			<select name="type">
			    <option selected value="zapchast_name">По названию</option>
			    <option value="price">По цене</option>
			   </select>
		 <br>
		 Сортировка:<br>
		 	<select name="sort">
		 	    <option selected value="ASC">По возрастанию</option>
		 	    <option value="DESC">По убыванию</option>
		 	   </select>
		  <br>
			Введите информацию для поиска:<br/>
			<input name="search" type="text"><br>
			<input type="submit" class="btn btn-secondary" value="Поиск"> 
			</form>
		</div>
        </body>
</html>

<?php
  $type=$_POST['type'];
  $search=$_POST['search'];
  $sort=$_POST['sort'];
  
  
  $user = 'root';
  $password = '';
  $db = 'zxc';
  $host = 'localhost';
  $conn = mysqli_connect($host,$user, $password, $db);
  mysqli_query($conn, "SET NAMES utf8");
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
  if (!$type || !$search)
  {
     echo 'Вы не ввели параметры поиска.';
     exit();
  }
  $sql = mysqli_query($conn, 'SELECT * FROM `spares` where '.$type.' LIKE "%'.$search.'%" ORDER BY Price '.$sort.'');
    while ($result = mysqli_fetch_array($sql)) {
    ?>
    <div class="col-md-4">
            <form method="post" action="zxc.php?action=add&id=<?php echo
                                                                $result["id_zapchasti"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; 
border-radius:5px; padding:16px;" align="center">
                    <img src="img/<?php echo $result["zapchast_img"]; ?>" class="img-responsive" /><br />
                    <h4 class="text-info"><?php echo $result["zapchast_name"]; ?></h4>
                    <h4 class="text-danger">Кол-во:<?php echo
                                                    $result["kolichestvo"]; ?></h4>
                    <h4 class="text-danger"><?php echo $result["Price"]; ?>
                        Рублей</h4>
                    


                    <input type="hidden" name="hidden_name" value="<?php echo $result["zapchast_name"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $result["Price"]; ?>" />

                    

                </div>
            </form>
        </div>
<?php

    }
    
?>

