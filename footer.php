
		 <footer id="footer" class="site-footer card shadow-sm border-0">
            <?php
              echo get_option('argon_footer_html');
            ?>
        
<!-- 文字颤抖+ 运行时间 -->    
<div class="github-badge-big">
    <span class="badge-subject">
        <span class="my-face">୧(๑•̀⌄•́๑)૭</span> 
    </span>
    <span class="badge-value bg-apricots">
        <i class="fa fa-clock-o"></i> 
        <span id="blog_running_days" class="odometer odometer-auto-theme">100</span> 天
        <span id="blog_running_hours" class="odometer odometer-auto-theme">0</span> 小时
        <span id="blog_running_mins" class="odometer odometer-auto-theme">17</span> 分
        <span id="blog_running_secs" class="odometer odometer-auto-theme">26</span> 秒
    </span>
</div>

<!--耗时及占用内存开始-->
<span id="momk"></span>
<span id="momk" style="color: #ff0000;"></span>
<script type="text/javascript">
    function NewDate(str) {
        str = str.split('-');
        var date = new Date();
        date.setUTCFullYear(str[0], str[1] - 1, str[2]);
        date.setUTCHours(0, 0, 0, 0);
        return date;
    }
</script>
<style>
    #momk{animation:change 10s infinite;font-weight:800; }
    @keyframes change {
        0% {color:#5cb85c;}
        25% {color:#556bd8;}
        50% {color:#e40707;}
        75% {color:#66e616;}
        100% {color:#67bd31;}
    }
</style>

<span id="momk" style="display: inline-block;">
    <span id="timeValue" class="dynamic-text" style="animation: pulse 2s infinite;"></span> |
    <span id="queryValue" class="dynamic-text" style="animation: pulse 2s infinite;"></span> |
    <span id="memoryValue" class="dynamic-text" style="animation: pulse 2s infinite;"></span>
</span>

<script type="text/javascript">
    // 使用JavaScript获取PHP变量的值并更新文本内容
    var timeValue = "<?php echo sprintf('%.3f', timer_stop(0, 3)); ?>";
    var queryValue = "<?php echo get_num_queries(); ?>";
    var memoryValue = "<?php echo sprintf('%.2f', memory_get_peak_usage() / 1024 / 1024); ?>";

    document.getElementById("timeValue").textContent = "argon耗时 " + timeValue + " 秒";
    document.getElementById("queryValue").textContent = "查询 " + queryValue + " 次";
    document.getElementById("memoryValue").textContent = "内存 " + memoryValue + " MB";
</script>
<!--耗时及占用内存结束-->
        
          </footer>
        </main>
      </div>
    </div>
    <script src="<?php echo $GLOBALS['assets_path']; ?>/argontheme.js?v<?php echo $GLOBALS['theme_version']; ?>"></script>
    <?php if (get_option('argon_math_render') == 'mathjax3') { /*Mathjax V3*/?>
      <script>
        window.MathJax = {
          tex: {
            inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
            displayMath: [['$$','$$']],
            processEscapes: true,
            packages: {'[+]': ['noerrors']}
          },
          options: {
            skipHtmlTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code'],
            ignoreHtmlClass: 'tex2jax_ignore',
            processHtmlClass: 'tex2jax_process'
          },
          loader: {
            load: ['[tex]/noerrors']
          }
        };
      </script>
      <script src="<?php echo get_option('argon_mathjax_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml-full.js' : get_option('argon_mathjax_cdn_url'); ?>" id="MathJax-script" async></script>
    <?php }?>
    <?php if (get_option('argon_math_render') == 'mathjax2') { /*Mathjax V2*/?>
      <script type="text/x-mathjax-config" id="mathjax_v2_script">
        MathJax.Hub.Config({
          messageStyle: "none",
          tex2jax: {
            inlineMath: [["$", "$"], ["\\\\(", "\\\\)"]],
            displayMath: [['$$','$$']],
            processEscapes: true,
            skipTags: ['script', 'noscript', 'style', 'textarea', 'pre', 'code']
          },
          menuSettings: {
            zoom: "Hover",
            zscale: "200%"
          },
          "HTML-CSS": {
            showMathMenu: "false"
          }
        });
      </script>
      <script src="<?php echo get_option('argon_mathjax_v2_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/mathjax@2.7.5/MathJax.js?config=TeX-AMS_HTML' : get_option('argon_mathjax_v2_cdn_url'); ?>"></script>
    <?php }?>
    <?php if (get_option('argon_math_render') == 'katex') { /*Katex*/?>
      <link rel="stylesheet" href="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.css">
      <script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>katex.min.js"></script>
      <script src="<?php echo get_option('argon_katex_cdn_url') == '' ? '//cdn.jsdelivr.net/npm/katex@0.11.1/dist/' : get_option('argon_katex_cdn_url'); ?>contrib/auto-render.min.js"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          renderMathInElement(document.body,{
            delimiters: [
              {left: "$$", right: "$$", display: true},
              {left: "$", right: "$", display: false},
              {left: "\\(", right: "\\)", display: false}
            ]
          });
        });
      </script>
    <?php }?>

    <?php if (get_option('argon_enable_code_highlight') == 'true') { /*Highlight.js*/?>
      <link rel="stylesheet" href="<?php echo $GLOBALS['assets_path']; ?>/assets/vendor/highlight/styles/<?php echo get_option('argon_code_theme') == '' ? 'vs2015' : get_option('argon_code_theme'); ?>.css">
    <?php }?>

  </div>
</div>
<?php 
  wp_enqueue_script("argonjs", $GLOBALS['assets_path'] . "/assets/js/argon.min.js", null, $GLOBALS['theme_version'], true);
?>
<?php wp_footer(); ?>

<!--全页特效开始-->
<script src="https://cdn.jsdelivr.net/gh/bauw2008/bauw/js/mobile-detect.js"></script>
<script type="text/javascript">
    // 设备检测
    var md = new MobileDetect(window.navigator.userAgent);
 
    // PC生效，手机/平板不生效
    // md.mobile(); md.phone(); 
    if(!md.phone()){
        if(!md.tablet()){
      // 雪花
      $.getScript("https://cdn.jsdelivr.net/gh/bauw2008/bauw/js/xiaxue.js");
      
      // 樱花
      //$.getScript("https://cdn.jsdelivr.net/gh/bauw2008/bauw/js/yinghua.js");
      
      // 小烟花特效
      // $.getScript("https://cdn.jsdelivr.net/gh/huangwb8/bloghelper@latest/js/mouse-click.js");
      
      //大烟花特效
      //$.getScript("https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/mouse-click-02/mouse-canvas.js");
      // document.write('<style>#mouse-canvas {z-index:217483647; pointer-events: none;  box-sizing: border-box !important; display: block !important; position: fixed !important; left: 0; right: 0; top: 0; bottom: 0; width: 100%; height: 100vh;}</style>')
      
      // 鼠标移动的仙女棒特效
      $.getScript("https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/halo-dream/fairyDustCursor.min.js");
      
      // 鼠标移动的泡泡特效
      // $.getScript("https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/joe/censor10.js");
      
      // 春节灯笼
      // document.write('<link href="https://cdn.jsdelivr.net/gh/bauw2008/bauw/css/deng.css" rel="stylesheet">');
      // document.write('<div class="deng-box"><div class="deng"><div class="xian"></div><div class="deng-a"><div class="deng-b"><div class="deng-t">春节</div></div></div><div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div></div></div>');
      // document.write('<div class="deng-box1"><div class="deng"><div class="xian"></div><div class="deng-a"><div class="deng-b"><div class="deng-t">快乐</div></div></div><div class="shui shui-a"><div class="shui-c"></div><div class="shui-b"></div></div></div></div>');  
      
      // 随机图API之动态壁纸
      // document.write('<style type="text/css" id="wp-custom-css">#content:before{opacity: 0;}</style>');
      // document.write('<video src="https://blognas.hwb0307.com/imgapi/index-animated.php" class="bg-video" autoplay="" loop="loop" muted=""></video>');
      // document.write('<style> video.bg-video {position: fixed; z-index: -1;left: 0;right: 0;top: 0;bottom: 0;width: 100vw;height: 100vh; object-fit: cover;pointer-events: none;transition: opacity .3s ease;}</style>')
      }
  }
</script>
<!--全页特效结束-->


<!--鼠标悬停3D效果start-->
<div class="article.post:not(.post-full)" data-tilt="" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"></div>
<div class=".shuoshuo-preview-container" data-tilt="" style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"></div>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bauw2008/bauw/vanilla3D/vanilla-tilt.js"></script>-->
<script type="text/javascript" src="/wp-content/themes/argon-theme-master/js/vanilla-tilt.js"></script>

<script type="text/javascript">
    // 设备检测
    var md = new MobileDetect(window.navigator.userAgent);

    // PC生效，手机/平板不生效
    // md.mobile(); md.phone(); 
    if(!md.phone() && !md.tablet()){
        window.pjaxLoaded = function(){
            // 正文卡片
            VanillaTilt.init(document.querySelectorAll("article.post:not(.post-full)"),{
                reverse:                true,  // reverse the tilt direction
                max:                    8,     // max tilt rotation (degrees)
                startX:                 0,      // the starting tilt on the X axis, in degrees.
                startY:                 0,      // the starting tilt on the Y axis, in degrees.
                perspective:            1000,   // Transform perspective, the lower the more extreme the tilt gets.
                scale:                  1.02,      // 2 = 200%, 1.5 = 150%, etc..
                speed:                  600,    // Speed of the enter/exit transition
                transition:             false,   // Set a transition on enter/exit.
                axis:                   "y",    // What axis should be banned. Can be "x", "y", or null
                reset:                  true,   // If the tilt effect has to be reset on exit.
                easing:                 "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
                glare:                  false,  // if it should have a "glare" effect
                "max-glare":            0.8,      // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                "glare-prerender":      false,  // false = VanillaTilt creates the glare elements for you, otherwise
                                                // you need to add .js-tilt-glare>.js-tilt-glare-inner by yourself
                "mouse-event-element":  null,   // css-selector or link to HTML-element what will be listen mouse events
                gyroscope:              true,   // Boolean to enable/disable device orientation detection,
                gyroscopeMinAngleX:     -45,    // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
                gyroscopeMaxAngleX:     45,     // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
                gyroscopeMinAngleY:     -45,    // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
                gyroscopeMaxAngleY:     45,     // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
            })
        
            // 说说卡片
             // VanillaTilt.init(document.querySelectorAll(".shuoshuo-preview-container"),{
                //  reverse:                true,  // reverse the tilt direction
                //  max:                    5,     // max tilt rotation (degrees)
                //  startX:                 0,      // the starting tilt on the X axis, in degrees.
                //  startY:                 0,      // the starting tilt on the Y axis, in degrees.
                //  perspective:            2000,   // Transform perspective, the lower the more extreme the tilt gets.
                //  scale:                  1.02,      // 2 = 200%, 1.5 = 150%, etc..
                //  speed:                  300,    // Speed of the enter/exit transition
                //  transition:             false,   // Set a transition on enter/exit.
                //  axis:                   "y",    // What axis should be banned. Can be "x", "y", or null
                //  reset:                  true,   // If the tilt effect has to be reset on exit.
                //  easing:                 "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
                //  glare:                  false,  // if it should have a "glare" effect
                //  "max-glare":            0.8,      // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                //  "glare-prerender":      false,  // false = VanillaTilt creates the glare elements for you, otherwise
                                                 // you need to add .js-tilt-glare>.js-tilt-glare-inner by yourself
                //  "mouse-event-element":  null,   // css-selector or link to HTML-element what will be listen mouse events
                //  gyroscope:              true,   // Boolean to enable/disable device orientation detection,
                //  gyroscopeMinAngleX:     -45,    // This is the bottom limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the left border of the element;
                //  gyroscopeMaxAngleX:     45,     // This is the top limit of the device angle on X axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the right border of the element;
                //  gyroscopeMinAngleY:     -45,    // This is the bottom limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the top border of the element;
                //  gyroscopeMaxAngleY:     45,     // This is the top limit of the device angle on Y axis, meaning that a device rotated at this angle would tilt the element as if the mouse was on the bottom border of the element;
            //  })
        }
        $(window.pjaxLoaded);
        $(document).on('pjax:end', window.pjaxLoaded); 
    }
</script>

<!--鼠标悬停3D效果end-->

<!--鼠标名单开始-->
<!--<script type="text/javascript">
    var a_idx = 0;
    jQuery(document).ready(function($) {
    $("body").click(function(e) {   
        // var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正", "法治", "爱国", "敬业", "诚信", "友善");
        // var a = new Array("❤为汝祈福❤", "❤早日康复❤");
        var a = new Array("❤身体健康❤", "❤万事如意❤", "❤心想事成❤", "❤笑口常开❤", "❤年年有余❤", "❤金榜题名❤", "❤前程似锦❤", "❤一帆风顺❤");
        var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
        var x = e.pageX,
        y = e.pageY;
        $i.css({
            "z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
            // "z-index": -1,
            "top": y - 20,
            "left": x,
            "position": "absolute",
            "font-weight": "bold",
            "color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
            "top": y - 180,
            "opacity": 0
        },
        1500,
        function() {
            $i.remove();
        });
    });
    });
</script>
<!--鼠标名单结束-->

<!--鼠标指针外观2 开始-->
<style type="text/css">
    .main-content img,body{cursor:url(https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/halo-dream/cursor/breeze/Arrow.cur),auto}.actions>div,.expand-done,.main-content figure>figcaption div,.navbar-above .navbar-nav .item,.navbar-searchicon,.navbar-slideicon,.photos .picture-details,.widget .ad-tag .click-close,a,button{cursor:url(https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/halo-dream/cursor/breeze/Hand.cur),auto}blockquote,code,h1,h2,h3,h4,h5,h6,hr,input[type=text],li,p,td,textarea,th{cursor:url(https://cdn.jsdelivr.net/gh/bauw2008/bauw/mouse/halo-dream/cursor/breeze/IBeam.cur),auto}
</style>
<!--鼠标指针外观2 结束-->

<!-- 文字抖动特效 -->
<link rel="stylesheet" href="/wp-content/themes/argon-theme-master/css/myface.css">

<!-- 看板娘 -->
<!-- <script src="https://fastly.jsdelivr.net/gh/huangwb8/live2d_bensz@latest/front/autoload.js"></script> -->
<script src="/wp-content/live2dyy/autoload.js"></script>

<!-- APlayer引入外部资源 -->
<link rel="stylesheet" href="/wp-content/themes/argon-theme-master/css/APlayer.min1.css">
<!--<script src="/wp-content/themes/argon-theme-master/js/APlayer.min.js"></script>-->
<!--<script src="/wp-content/themes/argon-theme-master/js/Meting.min.js"></script>-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">-->
<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/meting@2.0.1/dist/Meting.min.js"></script>

<!-- APlayer 音乐播放器 -->
<meting-js 
    id="26688818" 
    server="netease" 
    type="playlist" 
    theme="#339981" 
    fixed="true" 
    preload="auto" 
    autoplay="false" 
    loop="all" 
    order="random" 
    volume="0.3"
    lrcType="0"> <!-- 默认不显示歌词 -->
</meting-js>

<!-- APlayer CSS 修饰 -->
<style type="text/css">
    /* 默认情况下，显示播放器 */
    .aplayer {
        display: block;
    }

    /* 当屏幕宽度小于或等于 768px 时，隐藏播放器 */
    @media (max-width: 768px) {
        .aplayer {
            display: none !important;
        }
    }

    /* APlayer 固定显示，并在窄屏下调整 */
    .aplayer.aplayer-fixed.aplayer-narrow .aplayer-body {
        left: -66px !important;
    }
    .aplayer.aplayer-fixed.aplayer-narrow .aplayer-body:hover {
        left: 0 !important;
    }

    /* 默认隐藏歌词 */
    .ap-lrc {
        display: none !important;
    }
</style>

<!-- 自定义 JavaScript 代码 -->
<script>
        // 创建一个MutationObserver实例，用于监听DOM的变化
        var observer = new MutationObserver(function (mutations) {
            // 查找页面中class为"aplayer-icon-lrc"的元素
            var lrcButton = document.querySelector(".aplayer-icon-lrc");
            // 如果找到了lrcButton
            if (lrcButton) {
                // 延迟1毫秒执行点击操作
                setTimeout(function () {
                    lrcButton.click();
                }, 1);
                // 打印"success"到控制台
                console.log("success");
                // 断开MutationObserver实例，停止监听DOM的变化
                observer.disconnect();
            }
        });
        // 监听整个文档及其子节点的变化
        observer.observe(document, { childList: true, subtree: true });
</script>


<!--网站输入效果-->
<script src="https://cdn.jsdelivr.net/gh/bauw2008/bauw/js/input-with-fire.js"></script>
<canvas width="904" height="803" style="position: fixed; top: 0px; left: 0px; pointer-events: none; z-index: 999999;"></canvas>

<!--主题搞笑字符-->
<link href="https://cdn.jsdelivr.net/gh/bauw2008/bauw/css/myface.css" rel="stylesheet">

<!-- 浏览器搞笑标题-->
<script>
    var OriginTitle = document.title;
    var titleTime;
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            // $('[rel="icon"]').attr('href', "/funny.ico");
            document.title = '╭(°A°`)╮ 页面崩溃啦 ~';
            clearTimeout(titleTime);
        }
        else {
            $('[rel="icon"]').attr('href', "/favicon.ico");
            document.title = '(ฅ>ω<*ฅ) 噫又好啦 ~' + OriginTitle;
            titleTime = setTimeout(function () {
                document.title = OriginTitle;
            }, 2000);
        }
    });
</script>

<!--统计js-->
<!--script async src="/https://cdn.jsdelivr.net/gh/bauw2008/bauw/js/busuanzi.pure.mini.js"></script>-->
<!--<script async src="/wp-content/themes/argon-theme-master/js/busuanzi.pure.mini.js"></script>-->
<script defer src="https://cn.vercount.one/js"></script>

<!-- 主题额外CSS 开始 -->

<?php require(get_template_directory() . '/theme-diy/other-css.php'); ?>

<!-- 主题额外CSS 结束 -->

</body>

<?php echo get_option('argon_custom_html_foot'); ?>

</html>
