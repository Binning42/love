
<div class="p-5 text-center ">
  	<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_2352616_iqir3bihvlf.css">
    <h6>©2021 Freda <i class="iconfont icon-icon_love"></i> YYHua</h6>
    <p class="h6">Powered by <a href="https://typecho.org/" target="blank" rel="nofollow"> Typecho </a> ※ Theme is <a href="https://blog.zwying.com/archives/59.html" target="blank">Brave</a></p>
  </div>


<script>
	window.showSiteRuntime = function() {
		site_runtime = $("#site_runtime");
		if (!site_runtime) {
			return;
		}
		window.setTimeout("showSiteRuntime()", 1000);
		start = new Date("<?php $this->options->lovetime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		site_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showSiteRuntime();
</script>
</body>

</html>