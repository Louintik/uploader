<h1>
    Single upload
</h1>

<form method="post" action="core/upload.php" enctype="multipart/form-data">
	<input type="file" name="image">
	<button type="submit"> Upload </button>
</form>

<h1>
    Multi upload
</h1>
<form method="post" action="core/multiUpload.php" enctype="multipart/form-data">
<!--  для мультизагрузки (то есть для загрузки нескольки файлов массивом ставятся скобки image[]-->
    <input type="file" name="image[]">
    <input type="file" name="image[]">
    <button type="submit"> Upload </button>
</form>

<style>
    * {
        font-size: 15px;
    }

    input, button{
        display: block;
        margin-bottom: 15px;
    }
</style>


