<?php include("../content/connection.php") ?>
<?php

    $sql = "SELECT title FROM posts ORDER BY created_at DESC";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();

?>


<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest Posts</h4>
        <?php
            for ($i=0; $i <= 5 ; $i++) {

         ?>

        <p><a href="../"<?php echo ($posts[$i]['title']) ?></p>

        <?php
            };

         ?>
       </div>

    <div class="sidebar-module">
        <!-- <h4>Archives</h4>
        <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
        </ol> -->
    </div>
    <!-- <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div> -->
</aside><!-- /.blog-sidebar -->