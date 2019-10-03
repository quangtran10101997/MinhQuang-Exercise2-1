<h2 class="title">Sửa tin tức</h2>
<?php 
    $displayEdit = mysqli_fetch_assoc($ar_Edit);
?>
<form action="index.php?action=update&id=<?php echo $displayEdit['id']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên tin tức</label>
        <input type="text" name="name" class="form-control" value="<?php echo $displayEdit['title'] ?> " style="width: 100%; height: 30px;" required />
    </div>
    <div class="form-group">
        <label>Chi tiết</label>
        <textarea rows="3" cols="112" required name="detail"><?php echo $displayEdit['description'] ?></textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh</label>
        <img src="public/img/<?php echo $displayEdit['image'] ?>" id="myImg" style="width: 300px" alt="Image">
        
        <input type="file" name="image" style="display: block;" accept="image/png, image/jpeg" />
    </div>
    <button type="submit" name="submit" >Edit</button>
</form>
<script>
    window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('img');  
            img.src = URL.createObjectURL(this.files[0]); 
            img.onload = imageIsLoaded; 
      }
  });
});


</script>