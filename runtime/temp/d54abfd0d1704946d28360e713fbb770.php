<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"/www/wwwroot/mygw.com/public/../application/index/view/index/contact.html";i:1598095958;s:63:"/www/wwwroot/mygw.com/application/index/view/common/header.html";i:1598182396;}*/ ?>
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
    <h1 class="mt-4 mb-3">联系我们
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo url('index/index'); ?>">首页</a>
      </li>
      <li class="breadcrumb-item active">联系我们</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
<!--      <div class="col-lg-8 mb-4">-->
<!--        &lt;!&ndash; Embedded Google Map &ndash;&gt;-->
<!--        <iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
<!--      </div>-->
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>联系方式</h3>
<!--        <p>-->
<!--          3481 Melrose Place-->
<!--          <br>Beverly Hills, CA 90210-->
<!--          <br>-->
<!--        </p>-->
        <p>
          <abbr title="Phone">QQ</abbr>: 23585792
        </p>
        <p>
          <abbr title="Phone">微信</abbr>: tx258hb
        </p>
        <p>
          <abbr title="Email">Telegram</abbr>:
          <a href="mailto:name@example.com">name@example.com
          </a>
        </p>
        <p>
          <abbr title="Hours">工作时间</abbr>: 09:00 - 20:00
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<!--    <div class="row">-->
<!--      <div class="col-lg-8 mb-4">-->
<!--        <h3>给我们留言</h3>-->
<!--        <form name="sentMessage" id="contactForm" novalidate>-->
<!--          <div class="control-group form-group">-->
<!--            <div class="controls">-->
<!--              <label></label>-->
<!--              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">-->
<!--              <p class="help-block"></p>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="control-group form-group">-->
<!--            <div class="controls">-->
<!--              <label>Phone Number:</label>-->
<!--              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="control-group form-group">-->
<!--            <div class="controls">-->
<!--              <label>Email Address:</label>-->
<!--              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="control-group form-group">-->
<!--            <div class="controls">-->
<!--              <label>Message:</label>-->
<!--              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div id="success"></div>-->
<!--          &lt;!&ndash; For success/fail messages &ndash;&gt;-->
<!--          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>-->
<!--        </form>-->
<!--      </div>-->

<!--    </div>-->
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
  <script src="/static/vendor/jquery/jquery.min.js"></script>
  <script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<!--  <script src="/static/js/jqBootstrapValidation.js"></script>-->
  <script src="/static/js/contact_me.js"></script>

</body>

</html>
