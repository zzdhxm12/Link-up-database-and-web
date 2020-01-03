<?php
include 'board.php';

$bNo = $_GET['bno'];
$bosql = 'SELECT title,content,day,name FROM board WHERE num='.$bNo;
$boresult = $bmysqli->query($bosql);
$borow = $boresult->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>NMM</title>
<link href="css/style.css?ver=1" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css?ver=1" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js 모달-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Savory Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<style>
textarea{
  width: 100%;
  padding: 12px 20px;

  box-sizing: border-box;
  border: 1px solid black;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
textarea:focus{
  border: 1px solid red;
}

</style>

</head>
<body>
  <!-- header -->
    <div class="header">
      <div class="container">
        <div class="header-top">
          <div class="logo">
            <center>
            <a href="index.html"><img src="nmm.png" alt=" " /></a>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>

      <div class="container">
        <article class="boardArticle">

        <div id="boardView">
        <h3 id="boardTitle"><?php echo $borow['title'];?></h3>
				<hr>
        <div id="boardInfo">
        <span id="boardID"><?php echo $borow['name'];?>  |  </span>
        <span id="boardDate"><?php echo $borow['day'];?></span>
        </div>
				 <hr>
        <div id="boardContent"><?php echo $borow['content'];?></div>
        </div>
        </article>
				<br><hr><br>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">삭제</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">글 삭제</h4>
							</div>
							<div class="modal-body">
								<form action="board_delete.php" method="post" enctype="multipart/form-data">
									<label for="bpass">password:</label>
									<input type="password" name="bpass" style="width:100%;">
									<input type='hidden' name='bnumm' value='<?=$bNo?>'>
									<hr>
									<button type="submit" class="btn btn-default">delete</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</form>
							</div>
						</div>

					</div>
				</div>
				<button type="button" class="btn btn-default" onclick="location.href='board.html'">목록</button>
				<br><br>
        <form action="comment_update.php" method="post">
          <input type="hidden" name="bno" value="<?php echo $bNo?>">
          <textarea rows="3" name="coContent" id="bre"></textarea>
          <button type="submit" class="btn btn-default" style="width:100%;">댓글 달기</button>
      </form>
			<hr>
      <?php
	$sql = "SELECT * FROM comment WHERE bnum='$bNo'";
	$result = $bmysqli->query($sql);
?>
<div id="commentView">
					<?php
						while($row = $result->fetch_assoc()) {
					?>
					<p><strong><?php echo $row['name']?></strong></p><br>
					<p><?php echo $row['content']?></p>
					<hr color="red">
					<?php
							}
						?>
</div>
      </div>
</body>
</html>
