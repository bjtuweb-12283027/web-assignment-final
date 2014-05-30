<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
<title>OnlineAnswer</title>

</head>

<body>
	<?php include 'mysql_connect.php'; ?>
    <?php
						echo "<center>";
						mysql_select_db("webhomework", $con) or die(mysql_error());
						$result = mysql_query("SELECT * FROM userinfo") or die(mysql_error());
						echo "<font size='+6'>答题记录</font>";
						echo
						"<div style='width:500px'>
						<table class='table table-hover'>";
						echo
						"<th>用户名</th> <th>分数</th>";
						while($row = mysql_fetch_array($result))
						{
							echo
							"<tr>
								<td>".$row['username']."</td> <td>".$row['score']."</td>
							 </tr>";	
						}
						echo "</table>  </div>";
						echo "</center>";
						mysql_close($con);
	?>
    
    
      <div id="slime_conteneur">
	<div class="slime" id="slime1">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="125px" height="100px" viewBox="0 0 126.75 103.25" enable-background="new 0 0 126.75 103.25" xml:space="preserve">
		<g class="corps">
			<path d="M126.153,71.798c0,35.275-30.128,31.452-65.403,31.452S0.411,107.073,0.411,71.798S34,0.927,63.282,0.927
				C92,0.927,126.153,36.523,126.153,71.798z"/>
		</g>
		<g class="ombre">
			<path opacity="0.1" d="M98.583,98.968c0,5.085-4.708,4.313-37.833,4.313c-29.563,0-32.769,0.771-32.769-4.313
				c0-8.718,18.86-10.218,35.301-10.218C79.407,88.75,98.583,91.125,98.583,98.968z"/>
		</g>
		<g class="reflet">

				<ellipse transform="matrix(0.5486 -0.8361 0.8361 0.5486 20.2905 77.5842)" opacity="0.5" fill="#FFFFFF" cx="82" cy="20" rx="7.75" ry="13.75"/>
		</g>
		<g class="yeux">
			<g>
				<path d="M36.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C42.917,69.307,40.193,66.583,36.833,66.583z M39.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C41.083,70.541,40.375,71.25,39.5,71.25z"/>
				<circle fill="#FFFFFF" cx="39.5" cy="69.667" r="1.583"/>
				<path d="M88.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C94.917,69.307,92.193,66.583,88.833,66.583z M91.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C93.083,70.541,92.375,71.25,91.5,71.25z"/>
				<circle fill="#FFFFFF" cx="91.5" cy="69.667" r="1.583"/>
			</g>
		</g>
		<g class="bouche">
			<g>
				<path fill="#A862A6">
					<animate id="animBouche" attributeName="d" dur="3s" repeatCount="indefinite" values="M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z; 
					M49.9,73c0,3.151,1.885,10.435,4.528,12c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-8.849,4.528-12H65.584H49.9z;
			M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z" />
				</path>
				<path fill="#E0B7E5" d="M52.678,84.25c7.116,3.558,15.028,3.558,22.144,0C68.463,80.485,59.037,80.485,52.678,84.25
					C52.679,84.25,52.656,84.25,52.678,84.25z"/>
			</g>
		</g>
		</svg>
	</div>
	<div class="slime" id="slime2">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="125px" height="100px" viewBox="0 0 126.75 103.25" enable-background="new 0 0 126.75 103.25" xml:space="preserve">
		<g class="corps">
			<path d="M126.153,71.798c0,35.275-30.128,31.452-65.403,31.452S0.411,107.073,0.411,71.798S34,0.927,63.282,0.927
				C92,0.927,126.153,36.523,126.153,71.798z"/>
		</g>
		<g class="ombre">
			<path opacity="0.1" d="M98.583,98.968c0,5.085-4.708,4.313-37.833,4.313c-29.563,0-32.769,0.771-32.769-4.313
				c0-8.718,18.86-10.218,35.301-10.218C79.407,88.75,98.583,91.125,98.583,98.968z"/>
		</g>
		<g class="reflet">

				<ellipse transform="matrix(0.5486 -0.8361 0.8361 0.5486 20.2905 77.5842)" opacity="0.5" fill="#FFFFFF" cx="82" cy="20" rx="7.75" ry="13.75"/>
		</g>
		<g class="yeux">
			<g>
				<path d="M36.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C42.917,69.307,40.193,66.583,36.833,66.583z M39.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C41.083,70.541,40.375,71.25,39.5,71.25z"/>
				<circle fill="#FFFFFF" cx="39.5" cy="69.667" r="1.583"/>
				<path d="M88.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C94.917,69.307,92.193,66.583,88.833,66.583z M91.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C93.083,70.541,92.375,71.25,91.5,71.25z"/>
				<circle fill="#FFFFFF" cx="91.5" cy="69.667" r="1.583"/>
			</g>
		</g>
		<g class="bouche">
			<g>
				<path fill="#A862A6">
					<animate id="animBouche" attributeName="d" dur="3s" repeatCount="indefinite" values="M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z; 
					M49.9,73c0,3.151,1.885,10.435,4.528,12c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-8.849,4.528-12H65.584H49.9z;
			M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z" />
				</path>
				<path fill="#E0B7E5" d="M52.678,84.25c7.116,3.558,15.028,3.558,22.144,0C68.463,80.485,59.037,80.485,52.678,84.25
					C52.679,84.25,52.656,84.25,52.678,84.25z"/>
			</g>
		</g>
		</svg>
	</div>
	<div class="slime" id="slime3">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="125px" height="100px" viewBox="0 0 126.75 103.25" enable-background="new 0 0 126.75 103.25" xml:space="preserve">
		<g class="corps">
			<path d="M126.153,71.798c0,35.275-30.128,31.452-65.403,31.452S0.411,107.073,0.411,71.798S34,0.927,63.282,0.927
				C92,0.927,126.153,36.523,126.153,71.798z"/>
		</g>
		<g class="ombre">
			<path opacity="0.1" d="M98.583,98.968c0,5.085-4.708,4.313-37.833,4.313c-29.563,0-32.769,0.771-32.769-4.313
				c0-8.718,18.86-10.218,35.301-10.218C79.407,88.75,98.583,91.125,98.583,98.968z"/>
		</g>
		<g class="reflet">

				<ellipse transform="matrix(0.5486 -0.8361 0.8361 0.5486 20.2905 77.5842)" opacity="0.5" fill="#FFFFFF" cx="82" cy="20" rx="7.75" ry="13.75"/>
		</g>
		<g class="yeux">
			<g>
				<path d="M36.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C42.917,69.307,40.193,66.583,36.833,66.583z M39.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C41.083,70.541,40.375,71.25,39.5,71.25z"/>
				<circle fill="#FFFFFF" cx="39.5" cy="69.667" r="1.583"/>
				<path d="M88.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C94.917,69.307,92.193,66.583,88.833,66.583z M91.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C93.083,70.541,92.375,71.25,91.5,71.25z"/>
				<circle fill="#FFFFFF" cx="91.5" cy="69.667" r="1.583"/>
			</g>
		</g>
		<g class="bouche">
			<g>
				<path fill="#A862A6">
					<animate id="animBouche" attributeName="d" dur="3s" repeatCount="indefinite" values="M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z; 
					M49.9,73c0,3.151,1.885,10.435,4.528,12c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-8.849,4.528-12H65.584H49.9z;
			M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z" />
				</path>
				<path fill="#E0B7E5" d="M52.678,84.25c7.116,3.558,15.028,3.558,22.144,0C68.463,80.485,59.037,80.485,52.678,84.25
					C52.679,84.25,52.656,84.25,52.678,84.25z"/>
			</g>
		</g>
		</svg>
	</div>
	<div class="slime" id="slime4">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="125px" height="100px" viewBox="0 0 126.75 103.25" enable-background="new 0 0 126.75 103.25" xml:space="preserve">
		<g class="corps">
			<path d="M126.153,71.798c0,35.275-30.128,31.452-65.403,31.452S0.411,107.073,0.411,71.798S34,0.927,63.282,0.927
				C92,0.927,126.153,36.523,126.153,71.798z"/>
		</g>
		<g class="ombre">
			<path opacity="0.1" d="M98.583,98.968c0,5.085-4.708,4.313-37.833,4.313c-29.563,0-32.769,0.771-32.769-4.313
				c0-8.718,18.86-10.218,35.301-10.218C79.407,88.75,98.583,91.125,98.583,98.968z"/>
		</g>
		<g class="reflet">

				<ellipse transform="matrix(0.5486 -0.8361 0.8361 0.5486 20.2905 77.5842)" opacity="0.5" fill="#FFFFFF" cx="82" cy="20" rx="7.75" ry="13.75"/>
		</g>
		<g class="yeux">
			<g>
				<path d="M36.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C42.917,69.307,40.193,66.583,36.833,66.583z M39.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C41.083,70.541,40.375,71.25,39.5,71.25z"/>
				<circle fill="#FFFFFF" cx="39.5" cy="69.667" r="1.583"/>
				<path d="M88.833,66.583c-3.359,0-6.083,2.724-6.083,6.083c0,3.359,2.724,6.083,6.083,6.083c3.36,0,6.083-2.724,6.083-6.083
					C94.917,69.307,92.193,66.583,88.833,66.583z M91.5,71.25c-0.874,0-1.583-0.709-1.583-1.583c0-0.875,0.709-1.583,1.583-1.583
					c0.875,0,1.583,0.709,1.583,1.583C93.083,70.541,92.375,71.25,91.5,71.25z"/>
				<circle fill="#FFFFFF" cx="91.5" cy="69.667" r="1.583"/>
			</g>
		</g>
		<g class="bouche">
			<g>
				<path fill="#A862A6">
					<animate id="animBouche" attributeName="d" dur="3s" repeatCount="indefinite" values="M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z; 
					M49.9,73c0,3.151,1.885,10.435,4.528,12c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-8.849,4.528-12H65.584H49.9z;
			M49.9,78c0,3.151,1.885,5.435,4.528,7c3.228-1.911,7.589-2.749,11.072-2.749S73.344,83.089,76.572,85
			c2.643-1.565,4.528-3.849,4.528-7H65.584H49.9z" />
				</path>
				<path fill="#E0B7E5" d="M52.678,84.25c7.116,3.558,15.028,3.558,22.144,0C68.463,80.485,59.037,80.485,52.678,84.25
					C52.679,84.25,52.656,84.25,52.678,84.25z"/>
			</g>
		</g>
		</svg>
	</div>
</div>

  <script src="js/index.js"></script>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
    
    
    
    
    
    
    
    
    
    
    <div align="center">
              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#showModal"> 我也要答题 </button>
              <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">请输入您的昵称</h4>
                    </div>
                    <div class="modal-body">
                    	输入好昵称后确定即可前去答题
                      	<form action="answer.php" method="post">
                        	昵称 <input type="text" name="username" />
                            <input type="submit" class="btn btn-success btn-sm" value="确定" />
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
          </div>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>