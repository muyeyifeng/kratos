<?php
/**
 * 主题页脚
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2020.09.27
 */
?>
<div class="k-footer">
    <div class="f-toolbox">
        <div class="gotop <?php if ( kratos_option('s_wechat', false) ){ echo 'gotop-haswechat'; } ?>">
            <div class="gotop-btn">
                <span class="kicon i-up"></span>
            </div>
        </div>
        <?php if ( kratos_option('s_wechat', false) ){ ?>
        <div class="wechat">
            <span class="kicon i-wechat"></span>
            <div class="wechat-pic">
                <img src="<?php echo kratos_option('s_wechat_url', ASSET_PATH . '/assets/img/wechat.png'); ?>">
            </div>
        </div>
        <?php } ?>
        <div class="search">
            <span class="kicon i-find"></span>
            <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" id="search-footer" placeholder="<?php _e('搜点什么呢?', 'kratos'); ?>" style="display:none"/>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="social">
                <?php
                    $social = array('s_sina', 's_bilibili', 's_coding', 's_gitee', 's_twitter', 's_telegram', 's_linkedin', 's_youtube', 's_github', 's_stackflow', 's_email');
                    foreach ($social as $social) {
                        if (kratos_option($social)) {
                            echo '<a target="_blank" rel="nofollow" href="' . kratos_option($social . '_url') . '"><i class="kicon i-' . str_replace("s_", "", $social) . '"></i></a>';
                        }
                    }
                ?>
                </p>
                <?php
                    $sitename = get_bloginfo('name');
                    $img = ASSET_PATH . '/assets/img/police-ico.png';
                    echo '<p>' . kratos_option('s_copyright', 'COPYRIGHT © 2020 ' . $sitename . '. ALL RIGHTS RESERVED.') . '</p>';
                    echo '<p><img src="' . $img . '" ><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802023745" target="_blank" rel="nofollow">京公网安备 11010802023745号</a> 京ICP备17013053号</p>';
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
