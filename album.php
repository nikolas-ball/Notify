<?php include("includes/header.php");

if(isset($_GET['id'])) {
    $albumId = $_GET['id'];
}
else {
    header("Location: index.php");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();
?>

<div class="entityInfo">

    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath(); ?>" alt="Album Art">
    </div>

    <div class="rightSection">
        <h2><?php echo $album->getTitle(); ?></h2>
        <p>Album By: <strong><?php echo $artist->getName(); ?></strong></p>
        <p><?php echo $album->getNumberOfSongs(); ?> songs</p>
    </div>

</div>

<?php include("includes/footer.php"); ?>