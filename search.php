<?php 
include('connect.php');
// include('header.php');
$search = "";
if( !empty($_GET['Search'])){
    $search = $_GET['Search'];
    $song_image_path = "assets\img\song_img\\";
}
?>
<h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px;">
<div class="row">
    <?php
    if( !empty($search)) {
        $sql = "SELECT * FROM song,singer,genre WHERE song.song_name LIKE '%{$search}%'
        and song.singer_id=singer.singer_id and song.genre_id=genre.genre_id";
        $rs = mysqli_query($connect, $sql);
         while($row  = mysqli_fetch_assoc($rs)){
    ?> 
    <div style="height: 80px;">
            <h2><?php echo $row['song_name']?></h2>
        </div>
        <div><img class="card-img-top" src="<?php echo  $song_image_path .  $row['song_img'] ?>" style="width: 240px;height: 240px;padding: 7px"></div> 
        <p style="color: red;"><?php echo $row['song_price']." $"; ?></p>     
        <h4 style="color: black;"><?php echo $row['singer_name'] ?></h4> 
        <h5>Genre <?php echo $row['genre_name']?></h5>
         </a>
</div>
        <?php
         }
    }
?>
</div>
</div>
<?php 
include('footer.php');
?>