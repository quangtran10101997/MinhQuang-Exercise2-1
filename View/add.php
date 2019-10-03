<h2 class="title">Thêm tin tức</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên tin tức</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tiêu đề tin tức" style="width: 100%; height: 30px;" minlength="6" required/>
    </div>
    <div class="form-group">
        <label>Nội dung</label>
        <textarea rows="3" cols="112" name="detail" placeholder="Nhập nội dung tin tức" minlength="6" required></textarea>
    </div>
    <div class="form-group">
        <label>Hình ảnh</label>
        <img class="image" id="myImg" src="#" alt="your image" style="width: 200px">
        <input type="file" name="image" required accept="image/png, image/jpeg"/>
    </div>
    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm tin tức</button>
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