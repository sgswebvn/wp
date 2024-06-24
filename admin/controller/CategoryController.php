<?php


class CategoryController {
    public function category() {
        $category = new Category();
        $data = $category->category();
        view('category/index', ['data' => $data ]);
    }
    public function add_category() {
        view('category/add_category');
    }
    public function insert_category() {
        if(isset($_POST['submit'])) {
            $category = $_POST['category'];
            $created_time = date('Y-m-d');
        }
        $insert_category = new Category();
        $insert_category->insert_category($category, $created_time);
        view('category/index', ['data' => $category]);
    }
    public function delete_category() {
        $id = $_GET['id'];
        $delete_category = new Category();
        $delete_category->delete_category($id);
    }
    
    public function edit_category() {
        $id = $_GET['id'];
        $edit_category = new Category();
        $data = $edit_category->show_one($id);
        view('category/edit_category', ['data' => $data]);
    
    }
    public function update_category() {
        if(isset($_POST['submit']) && $_POST['submit']) {
            $category = $_POST['category'];
        }
        $update_category = new Category();
        $data = $update_category->update_category($category);
        view('category/index', ['data' => $data]);
    }
}