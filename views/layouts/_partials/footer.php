<?php

/* @var $this \yii\web\View */

?>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-sm-6 scrollreveal">
                <p>PLYR</p>
                <p class="copyright">&copy; <?= date( 'Y' ); ?> PLYR Template</p>
            </div> <!-- /.col-sm-6 -->

            <div class="col-sm-6 scrollreveal">
                <ul class="social pull-right list-unstyled list-inline">
                    <li><a href="<?= Yii::$app->params[ 'socialLinks.facebook' ]; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?= Yii::$app->params[ 'socialLinks.twitter' ]; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?= Yii::$app->params[ 'socialLinks.dribbble' ]; ?>"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div> <!-- /.col-sm-6 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</footer> <!-- /.footer -->