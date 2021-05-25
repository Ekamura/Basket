
<form action="insertVideo.php" method="post" enctype="multipart/form-data">
    Выберите видео-файл который необходимо загрузить <br><br><br>
    <div>
        <label for="image">Выберите файл-изображение</label>
        <br>
        <input class="btn" type="file" name="video" id="image">
    </div>
    <br>
    <video controls>
        <source src="" type="video/mp4" id="loadVideo">
    </video>
    <label for="article_id"></label>
    <select name="article_id" id="article_id" >
        <?php foreach ($articles as $article):?>
            <option value="<?=$article->id?>"><?=$article->name?></option>

        <?php endforeach;?>
    </select><br>
    <input type="submit" name="submit"><br>

</form>
<script>
    let loadVideo = document.querySelector("#loadVideo"),
        video = document.querySelector("#video");

    video.addEventListener("change", function (e) {
        loadVideo.src = URL.createObjectURL(e.target.files[0]);
        loadVideo.style.display = 'block';
        loadVideo.onload = function () {
            URL.revokeObjectURL(e.target.src)
        }
    });
</script>