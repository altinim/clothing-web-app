<?php
    require_once "config.php";
    require_once WEBROOT . "models/Article.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
$article = Article::getbyId($id);

if(isset($_POST['save'])){
    $article->titulli = $_POST['titulli'];
    $article->cmimi = $_POST['cmimi'];
    $article->pershkrimi = $_POST['pershkrimi'];
    $article->foto = $_POST['foto'];
    $article->priceoff = $_POST['priceoff'];
    $article->olderprice = $_POST['olderprice'];

    $article->save();
    header("Location:article_list.php");

}

?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="../style/style.css">
    <title>Update User</title>
</head>
<body>
<section class="dashboard">
<div class="logindiv"> 
    <form method="post">
        <input type="text" class="input" name="titulli" value="<?php echo $article->titulli ?>" placeholder="Titulli"><br>
        <input type="text" class="input" name="cmimi" value="<?php echo $article->cmimi ?>" placeholder="Cmimi"><br>
        <input type="text" class="input" name="pershkrimi" value="<?php echo $article->pershkrimi ?>" placeholder="Pershkrimi"><br>
        <input type="text" class="input" name="foto" value="<?php echo $article->foto ?>" placeholder="Photo"><br>
        <input type="text" class="input" name="priceoff" value="<?php echo $article->priceoff ?>" placeholder="Price Off"><br>
        <input type="text" class="input" name="olderprice" value="<?php echo $article->olderprice ?>" placeholder="Older price"><br>
        <div class="bttn">
            <button type="submit" class="bttn" name="save">UPDATE</button></div>
    </form>
 </div>
</section>
</body>
</html>


