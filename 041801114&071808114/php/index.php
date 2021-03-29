<!doctype html>
<?php
    global $wpdb;
	$myrows = $wpdb->get_results( "SELECT title FROM cv_posts LIMIT 3;" );
?>
<html>
<head>
<meta charset="utf-8">
<title>template</title>
<link href="<?= bloginfo('template_url'); ?>/quickfind/QuickFind.css" rel="stylesheet" type="text/css">
<script>
	window.onload = function(){
	/*从url中解析出参数*/
	var re = /\?param=([^&]+)$/gi;
	var p = re.exec(location.search);
	document.getElementById('searchtext').value = p[1];
}
	
	
	
	/*function mutiselectfunc(){
		var checkboxs=document.getElementsByClassName("checkbox");
        	for (var i = 0; i<checkboxs.length;i++) {
        		   checkboxs[i].style.display='inline';
        		 };
	}*/
	
	
	
	function checkboxfunc(){
		/*var checkboxs=document.getElementsByClassName("checkbox");
        	for (var i = 0; i<checkboxs.length;i++) {
        		if(checkboxs[i].style.checked='true'){
					document.getElementById('deletebtn').style.backgroundColor='red';
					break;
				}
        		 else document.getElementById('deletebtn').style.backgroundColor='black';*/
			document.getElementById('deletebtn').style.backgroundColor='#D60104';
			}
		
	function jump(){
		window.location.href="";
	}
	</script>
</head>

<body>
	<?= $_GET['page']?>
	<div class="nav">
		<ul class="template">
			<li><a href="" id="navIcon"></a></li>
			<li><a href="" >论文列表</a></li>
			<li><a href="">趋势分析</a></li>
			<li><a href="">关于我们</a></li>
		</ul>
	</div>
<div class="main">
	<div class="upper">
		<form class="operate">
			<input type="text" class="search" id="searchtext"  name="search">
			<input type="button" class="button" id="searchbtn" value="搜索">
	    </form>
    </div>
		
		
		
	<div class="middle">
		<form >
			<div class="texttitle">
				<input type="checkbox" class="checkbox" name="text" value="" onclick="checkboxfunc();" />
					<p class="list" onclick="jump();"><?=$myrows[0]->title;?></p>	
		    </div>
				
			<div class="texttitle">
				<input type="checkbox" class="checkbox" name="text" value="" onclick="checkboxfunc();" />
					<p class="list" onclick="jump();">    论文标题2*******************************</p>	
		    </div>
				
			<div class="texttitle">
				<input type="checkbox" class="checkbox" name="text" value="" onclick="checkboxfunc();" />
					<p class="list" onclick="jump();">    论文标题3*******************************</</p>	
		    </div>
	    </form>
    </div>
		
	<div class="down">
		<div class="delete">
		  <form >
			  <input type="button" class="deletebtn" id="deletebtn" value="删除">
		  </form>
	    </div>
		<div class="pagelist">
			<a href="#">«</a>
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a href="#">6</a>
	 		<a href="#">»</a>
			
	    </div>
    </div>
	
</div>
	

</body>
</html>
