<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php if(isset($data)){
    extract($data);
} ?>
    <div class="container">
        <hr>
        
        <br>
        <h5 class="text-center">SỬA SẢN PHẨM</h5>


<br>
<form action="?act=update_category" method="post" enctype="multipart/form-data">
        <input type="text"  name="id" value="<?php if(isset($id) && ($id !="")) echo $id; ?>" class="form-control" disabled> <br>
        <input type="text" placeholder="Nhập tên sản phẩm" name="category" value="<?php if(isset($category) && ($category !="")) echo $category; ?>" class="form-control"> <br>
        <div class="form-group">
        </div>
         <br><br>
         <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
         <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" >
        <a href="" type="reset" class="btn btn-primary">Hủy bỏ</a> <br><br>
        <a href="index.php">Trở lại </a>
        <hr>
      </form>
        
    </div>
    </div>

    <?php 
?>
