<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/onlineanswer.css">
<link rel="stylesheet" href="css/notice.css" media="screen" type="text/css" />
<title>OnlineAnswer</title>

</head>

<body>
	
	<?php include 'mysql_connect.php'; ?>
    <?php
		$flag = false;
		if (isset ($_POST['number']))
		{
			if ($_POST['number']==10)
			{
				$score = $_POST['score'];
				$res = mysql_query("SELECT * FROM exam WHERE id=".$_POST['id']);
				$get_row = mysql_fetch_array($res);
				if ($_POST['myanswer']==$get_row['answer'])
				{
					$score++;
					$flag = true;
				}
				$update_score = $_POST['score'];
				$update_username = $_POST['username'];
				$sql = "UPDATE userinfo SET score='$update_score' WHERE username='$update_username'";
				mysql_query($sql) or die(mysql_error());
                $url = "loading.php";
                echo "<script language='javascript' type='text/javascript'>";
                echo "window.location.href='$url'";  
			}
			$number = $_POST['number'] + 1;
		}
		else
			$number = 1;
		if (isset ($_POST['score']))
		{
			$score = $_POST['score'];
			
			$res = mysql_query("SELECT * FROM exam WHERE id=".$_POST['id']);
			$get_row = mysql_fetch_array($res);
			if ($_POST['myanswer']==$get_row['answer'])
			{
				$score++;
				$flag = true;
			}
		}
		else
			$score = 0;
	?>

<center>
<div class="paper">
	<div class="header">
            <div class="guide">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
    </div>
    <div class="content">
      <h1>答题</h1>
        <table align="center">
        <tr>
        <td>
        <blockquote>
        <form action="answer.php" method="post" >
            <?php
                $result = mysql_query("SELECT * FROM exam order by rand() limit 1");
                $row = mysql_fetch_array($result);
                echo $number.'.'.$row['title'];
                echo "<br>";
                echo '<input type="radio" name="myanswer" value="A" /> A'.$row['A'].
                '<br />
                <input type="radio" name="myanswer" value="B" /> B'.$row['B'].
                '<br />
                <input type="radio" name="myanswer" value="C" /> C'.$row['C'].
                '<br />';
            ?>
                <input type="text" hidden="true" name="username" value=<?php echo $_POST["username"]; ?>/>
                <input type="text" hidden="true" name="score" value=<?php echo $score; ?> />
                <input type="text" hidden="true" name="id" value=<?php echo $row['id']; ?> />
                <input type="text" hidden="true" name="number" value=<?php echo $number?>  />
                <center><input type="submit" value="下一题" class="btn btn-success btn-lg" /></center>
        </form>
        </blockquote>
        </td>  
        </tr>
        </table>

    </div>
    <div class="footer"></div>
      <div class="clear"></div>
</div>
</center>
<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>    
<script src="js/notice.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>