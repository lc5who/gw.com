<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/www/wwwroot/mygw.com/public/../application/index/view/index/yuanma.html";i:1598100310;s:63:"/www/wwwroot/mygw.com/application/index/view/common/header.html";i:1598182396;s:63:"/www/wwwroot/mygw.com/application/index/view/common/footer.html";i:1598094191;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $site['name']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html"><?php echo $site['name']; ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/index'); ?>">首页</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        网站程序
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <?php if(is_array($appcat) || $appcat instanceof \think\Collection || $appcat instanceof \think\Paginator): $i = 0; $__LIST__ = $appcat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a class="dropdown-item" href="<?php echo url('index/yuanma'); ?>?cat=<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a>

                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Blog-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">-->
<!--                        <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>-->
<!--                        <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>-->
<!--                        <a class="dropdown-item" href="blog-post.html">Blog Post</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Other Pages-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">-->
<!--                        <a class="dropdown-item" href="full-width.html">Full Width Page</a>-->
<!--                        <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>-->
<!--                        <a class="dropdown-item" href="faq.html">FAQ</a>-->
<!--                        <a class="dropdown-item" href="404.html">404</a>-->
<!--                        <a class="dropdown-item" href="pricing.html">Pricing Table</a>-->
<!--                    </div>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/cdn'); ?>">CDN防攻击业务</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/vps'); ?>">香港国内外服务器</a>
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        行业资讯-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">-->
<!--                        <?php if(is_array($appcat) || $appcat instanceof \think\Collection || $appcat instanceof \think\Paginator): $i = 0; $__LIST__ = $appcat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
<!--                        <a class="dropdown-item" href="portfolio-4-col.html"><?php echo $vo['name']; ?></a>-->

<!--                        <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--                    </div>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/news'); ?>">行业资讯</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/contact'); ?>">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">网站程序
      <small><?php echo $cat['name']; ?></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo url('index/index'); ?>">首页</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $cat['name']; ?></li>
    </ol>

    <div class="row">
      <?php if(is_array($app) || $app instanceof \think\Collection || $app instanceof \think\Paginator): $i = 0; $__LIST__ = $app;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="<?php echo url('index/yuanmadetail'); ?>?id=<?php echo $vo['id']; ?>"><img class="card-img-top" src="<?php echo $vo['image']; ?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php echo url('index/yuanmadetail'); ?>?id=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a>
            </h4>
            <p class="card-text"><?php echo $vo['description']; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    <!-- Pagination -->
    <?php echo $app->render(); ?>
<!--    <ul class="pagination justify-content-center">-->
<!--      <li class="page-item">-->
<!--        <a class="page-link" href="#" aria-label="Previous">-->
<!--          <span aria-hidden="true">&laquo;</span>-->
<!--          <span class="sr-only">Previous</span>-->
<!--        </a>-->
<!--      </li>-->
<!--      <li class="page-item">-->
<!--        <a class="page-link" href="#">1</a>-->
<!--      </li>-->
<!--      <li class="page-item">-->
<!--        <a class="page-link" href="#">2</a>-->
<!--      </li>-->
<!--      <li class="page-item">-->
<!--        <a class="page-link" href="#">3</a>-->
<!--      </li>-->
<!--      <li class="page-item">-->
<!--        <a class="page-link" href="#" aria-label="Next">-->
<!--          <span aria-hidden="true">&raquo;</span>-->
<!--          <span class="sr-only">Next</span>-->
<!--        </a>-->
<!--      </li>-->
<!--    </ul>-->

  </div>
  <!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/static/vendor/jquery/jquery.min.js"></script>
<script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
