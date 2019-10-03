<h2 class="title">Tin tức</h2>
<button class="add"><a href="index.php?action=add">Thêm tin tức</a></button>
<?php 
	while($displayNew = mysqli_fetch_assoc($ar_News)){
		$id = $displayNew['id'];
?>
<div class="index">
	<a href="index.php?action=detail&id=<?php echo $id?>" title="">
		<img src='public/img/<?php echo $displayNew['image'] ?>' style="width: 120px" alt="Image">
	</a>
	<h3><a href="index.php?action=detail&id=<?php echo $id?>" title=""><?php echo $displayNew['title'] ?></a></h3>
	<div class="button">
		<button class="edit"><a href="index.php?action=edit&id=<?php echo $id?>">Sửa</a></button>
		<button class="delete" onclick="alert('Bạn chắc chắn muốn xóa')"><a href="index.php?action=delete&id=<?php echo $id?>">Xóa</a></button>
	</div>
</div>

<?php 
	} 
?>
