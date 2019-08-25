<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP digitron</title>
</head>
<body>
    

<h1>PHP kalkulator</h1>
		<div class="container" style="margin-top: 50px">
		    
		    <form method="post" action="week_1_kalkulator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Sabiranje</option>
		            <option value="minus">Oduzimanje</option>
		            <option value="pomnoženo sa">Množenje</option>
		            <option value="podjeljeno sa">Djeljenje</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Izračunaj" class="btn btn-primary" />
		    </form>
	    
		</div>

        <?php
			
                if(isset($_POST['submit'])) 
                {
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'pomnoženo sa')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'podjeljeno sa')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						echo "<h3>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} jednako je {$total}</h3>"; // ispis rezultata
					
					} else {			
						echo '<h3>Popuni sva polja!</h3>';
					
					}
				}
			?>
	
</body>
</html>