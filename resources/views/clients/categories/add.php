<h1>Thêm chuyên mục</h1>
<form action="<?php echo route('categories.add');?>" method="post">
    <div>
        <input type="text" name="category_name" placeholder="Tên chuyên mục" value="<?php echo old('category_name','default value');?>">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <button type="submit">Thêm chuyên mục</button>
</form>