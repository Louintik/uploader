<form method="post" action="core/upload.php" enctype="multipart/form-data">
<!-- action - файл, который отвечает за загрузку файлов  -->
<!-- Для того чтобы отправить файл с формы необходим атрибут enctype -->
	<input type="file" name="image">
<!-- значение атрибута name является ключом в массиве с файлами -->
	<button type="submit"> Upload </button> <!--При нажатии на кнопку с типом submit будет срабатывать action -->
</form>

<style>
    * {
        font-size: 15px;  /* настройка размера текста */
    }

    input, button{
        display: block; /* Чтобы кнопки и сроки были не в строку а друг под другом */
        margin-bottom: 15px; /* чтобы было расстояние между внешними границами элементов */
    }
</style>
