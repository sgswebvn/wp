
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">

        <br>
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>ID </th>
                <th>Tên danh mục</th>
               
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            if (is_array($data)) {
            foreach($data as $item) { ?>
              <tr>
                <th><?= $item['id'] ?></th>
                <td><h6><?= $item['category'] ?></h6></td>
                <td align="center" >
                  <a href="?act=edit_category&&id=<?= $item['id']?>">
                  <input type="submit" class="btn btn-primary" value="Sửa">
                  </a>
                  <a href="?act=delete_category&&id=<?= $item['id']?>">
                  <input type="submit" class="btn btn-primary" value="Xóa">
                </a>
                </td>
              </tr>
            </tbody>
            <?php } 
        } ?>

          </table>
          <a href="?act=add_category">
          <input type="submit" class="btn btn-primary" value="Thêm sản phẩm">
          </a>

    </div>
