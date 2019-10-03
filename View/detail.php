<h2 class="title">Thông tin bài viết</h2>
<?php
	$showDetail = mysqli_fetch_assoc($ar_Detail);
	$date       = date_create($showDetail['created_at']);
?> 
<div class="detail">
	<h3><?php echo $showDetail['title'] ?></h3>
	<h5>Đăng ngày: <?php echo date_format($date,"d-m-Y H:i:s");?></h5> 
	<img src='public/img/<?php echo $showDetail['image'] ?>' style="width: 620px" alt=""> 
	<span><?php echo $showDetail['description'] ?></span>
</div>
