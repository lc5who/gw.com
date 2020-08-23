<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/www/wwwroot/mygw.com/public/../application/index/view/index/yuanmadetail.html";i:1598100329;s:63:"/www/wwwroot/mygw.com/application/index/view/common/header.html";i:1598099636;}*/ ?>
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
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="<?php echo url('index/cdn'); ?>">香港国内外服务器</a>-->
<!--                </li>-->
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
    <h1 class="mt-4 mb-3"><?php echo $article['title']; ?>
<!--      <small>by-->
<!--        <a href="#">管理员</a>-->
<!--      </small>-->
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo url('index/index'); ?>">首页</a>
      </li>
      <li class="breadcrumb-item active">程序详情</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">

        <!-- Preview Image -->
<!--        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="" width="100%">-->

        <hr>

        <!-- Date/Time -->
        <p>发布于 <?php echo date('Y-m-d H:i:s',$vo['createtime']); ?></p>

        <hr>

        <!-- Post Content -->
        <?php echo $article['content']; ?>
<!--        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>-->

<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>-->

<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>-->

<!--        <blockquote class="blockquote">-->
<!--          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>-->
<!--          <footer class="blockquote-footer">Someone famous in-->
<!--            <cite title="Source Title">Source Title</cite>-->
<!--          </footer>-->
<!--        </blockquote>-->

<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>-->

<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>-->

        <hr>

        <!-- Comments Form -->
<!--        <div class="card my-4">-->
<!--          <h5 class="card-header">Leave a Comment:</h5>-->
<!--          <div class="card-body">-->
<!--            <form>-->
<!--              <div class="form-group">-->
<!--                <textarea class="form-control" rows="3"></textarea>-->
<!--              </div>-->
<!--              <button type="submit" class="btn btn-primary">Submit</button>-->
<!--            </form>-->
<!--          </div>-->
<!--        </div>-->

        <!-- Single Comment -->
<!--        <div class="media mb-4">-->
<!--          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--          <div class="media-body">-->
<!--            <h5 class="mt-0">Commenter Name</h5>-->
<!--            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--          </div>-->
<!--        </div>-->

        <!-- Comment with nested comments -->
<!--        <div class="media mb-4">-->
<!--          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--          <div class="media-body">-->
<!--            <h5 class="mt-0">Commenter Name</h5>-->
<!--            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->

<!--            <div class="media mt-4">-->
<!--              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--              <div class="media-body">-->
<!--                <h5 class="mt-0">Commenter Name</h5>-->
<!--                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--              </div>-->
<!--            </div>-->

<!--            <div class="media mt-4">-->
<!--              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">-->
<!--              <div class="media-body">-->
<!--                <h5 class="mt-0">Commenter Name</h5>-->
<!--                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
<!--              </div>-->
<!--            </div>-->

<!--          </div>-->
<!--        </div>-->

      </div>

      <!-- Sidebar Widgets Column -->
<!--      <div class="col-md-4">-->

<!--        &lt;!&ndash; Search Widget &ndash;&gt;-->
<!--        <div class="card mb-4">-->
<!--          <h5 class="card-header">Search</h5>-->
<!--          <div class="card-body">-->
<!--            <div class="input-group">-->
<!--              <input type="text" class="form-control" placeholder="Search for...">-->
<!--              <span class="inpug-group-append">-->
<!--                <button class="btn btn-secondary" type="button">Go!</button>-->
<!--              </span>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Categories Widget &ndash;&gt;-->
<!--        <div class="card my-4">-->
<!--          <h5 class="card-header">Categories</h5>-->
<!--          <div class="card-body">-->
<!--            <div class="row">-->
<!--              <div class="col-lg-6">-->
<!--                <ul class="list-unstyled mb-0">-->
<!--                  <li>-->
<!--                    <a href="#">Web Design</a>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#">HTML</a>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#">Freebies</a>-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--              <div class="col-lg-6">-->
<!--                <ul class="list-unstyled mb-0">-->
<!--                  <li>-->
<!--                    <a href="#">JavaScript</a>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#">CSS</a>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#">Tutorials</a>-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

<!--        &lt;!&ndash; Side Widget &ndash;&gt;-->
<!--        <div class="card my-4">-->
<!--          <h5 class="card-header">Side Widget</h5>-->
<!--          <div class="card-body">-->
<!--            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!-->
<!--          </div>-->
<!--        </div>-->

<!--      </div>-->

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
