<?php 
include 'header.php'; 

$dir    = 'images/logo';
$files = scandir($dir);
unset($files[0]);
unset($files[1]);
?>

<div class="col-lg-3 hidden-xs" style="padding-top:50px;">
    <div class="col-lg-12" style="position:fixed;max-width:175px;margin-left:20px;">
        <img src="images/logo_web.png" class="img-responsive" style="margin-bottom:60px;" />
        <ul style="font-family: gotham_book;text-align:left;font-size:12px;">
            <li class="active"><a href="#">LOGOS</a></li>
            <li><a href="#">WEB DESIGN</a></li>
            <li><a href="#">GRAPHIC DESIGN</a></li>
            <li><a href="#">ME</a></li>
        </ul>
        <div style="font-family: gotham_book;text-align:left;margin-top:170px;font-size:12px;">ATTEMPT</div>
    </div>
    <div style="clear:both;"></div>
</div>
<div class="col-lg-3 visible-xs" style="padding-top:10px;">
    <nav class="bs-docs-nav navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <img src="images/menu.png" style="width:40px;"/>
                </button>
              <a class="navbar-brand" href="#"><img src="images/logo_mobile.png" style="width:150px;"/></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul style="font-family: gotham_book;text-align:left;">
                    <li class="active"><a href="#">LOGOS</a></li>
                    <li><a href="#">WEB DESIGN</a></li>
                    <li><a href="#">GRAPHIC DESIGN</a></li>
                    <li><a href="#">ME</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="col-lg-9">
    <div class="hidden-xs" style="padding-top:50px;"></div>
    <?php foreach($files as $image_name) { ?>
        <div class="col-lg-3 col-xs-6" style="margin:0px 0px 20px 0px;">
            <a class="example-image-link" href="images/logo/<?php echo $image_name; ?>" data-lightbox="example" data-title="<?php echo $image_name; ?>">
                <img class="img-responsive" src="images/logo_thumbnail/<?php echo $image_name; ?>" />
            </a>
        </div>
    <?php } ?>
    <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<?php include 'footer.php'; ?>