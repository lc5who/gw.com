<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/www/wwwroot/mygw.com/public/../application/index/view/index/cdn.html";i:1598094961;s:63:"/www/wwwroot/mygw.com/application/index/view/common/header.html";i:1598095193;}*/ ?>
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
                        <a class="dropdown-item" href="portfolio-4-col.html"><?php echo $vo['name']; ?></a>

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
                    <a class="nav-link" href="<?php echo url('index/cdn'); ?>">香港国内外服务器</a>
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
    <h1 class="mt-4 mb-3">CDN防攻击
      <small>Subheading</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo url('index/index'); ?>">首页</a>
      </li>
      <li class="breadcrumb-item active">CDN加速防攻击业务</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">Basic</h3>
          <div class="card-body">
            <div class="display-4">$19.99</div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card card-outline-primary h-100">
          <h3 class="card-header bg-primary text-white">Plus</h3>
          <div class="card-body">
            <div class="display-4">$39.99</div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">Ultra</h3>
          <div class="card-body">
            <div class="display-4">$159.99</div>
            <div class="font-italic">per month</div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">
              <a href="#" class="btn btn-primary">Sign Up!</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.row -->

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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
