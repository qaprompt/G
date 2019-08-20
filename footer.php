</div>
</div>
<div id="footer">
	<div id="footer-content" class="clear">
		<div id="footer-content-left">
			<p>©<?php $this->options->title(); ?> | <?php getBuildTime($this->options->builtTime); ?></p>
			<p><?php $this->options->beian(); ?></p>
			<nav id="nav-2">
				<a href="<?php Helper::options()->siteUrl()?>">首页</a>
				<?php if ($this->options->enableIndexPage): ?>
						<a href="<?php Helper::options()->siteUrl()?>blog">文章</a>
				<?php endif; ?>
				<a href="<?php Helper::options()->siteUrl()?>links.html">友人帐</a>
				<a href="<?php Helper::options()->siteUrl()?>archive.html">归档</a>
				<a href="<?php Helper::options()->siteUrl()?>about.html">关于</a>
				<?php if (isset($this->options->plugins['activated']['ExSearch'])) : ?>
				<a class="search-form-input">搜索</a>
				<?php endif ?>
			</nav>
		</div>
		<div id="footer-content-right">
			<p>
				<?php if ($this->options->enableUpyun): ?>
       		<a href="https://upyun.com" target="_blank"><img src="https://i.loli.net/2019/02/11/5c6187c809c8c.png"/></a>
      	<?php endif; ?>
				<?php if ($this->options->enableAliLogo): ?>
	       <img src="https://i.loli.net/2019/02/11/5c6187e663b3a.png"/></p>
	      <?php endif; ?>

		</div>


	</div>

	<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
 	<script src="<?php $this->options->themeUrl('JS/X.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('JS/prism.js'); ?>"></script>
	<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>
	<?php $this->footer(); ?>

	<script>
		ajaxc();
		PreFancybox();
	</script>

</div>


<?php if (isset($this->options->plugins['activated']['ExSearch'])) : ?>
	<div id="m_search">
		<span><a><i class="i m_search search-form-input"></i></a></span>
	</div>
<?php endif ?>


<div id="m_top">
	<span><a onclick="gototop();"><i class="i gototop"></i></a></span>
</div>

<div id="m_menu">
	<span><a onclick="sideMenu_toggle();"><i class="i m_menu"></i></a></span>
</div>
<?php  $this->need('sliderbar.php'); ?>
</body>
