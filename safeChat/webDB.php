<?
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpwd="qqq511468";
	$dbname="webchat";
	$conn=mysql_connect($dbhost,$dbuser,$dbpwd);
	
	mysql_select_db($dbname,$conn) or die("无法打开数据库");
	$strsql="select * from t_user;";
	$result=mysql_query($strsql,$conn) or die("error");
	//显示查询的总行数：mysql_num_rows；
	$columnNum=mysql_num_rows($result);
	//遍历并显示查询的所有信息
	$i=0;
	while($i<$columnNum){
		$colname = mysql_fetch_array($result);
		print_r($colname);
		$i++;
	};
	mysql_query("set names 'UTF-8'");
	if($conn){
		echo  "connection success";
	}
	else{
		echo "connection flase";
	}
	mysql_close($conn);
?>