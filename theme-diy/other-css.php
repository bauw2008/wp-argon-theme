
<style>
/*========透明设置===========*/

/*白天卡片背景透明*/
.card {
    background-color: rgba(255, 255, 255, 0.85) !important;
    -webkit-backdrop-filter: blur(6px);
}

/*小工具栏背景完全透明*/
.card .widget, .darkmode .card .widget, #post_content > div > div > div.argon-timeline-card.card.bg-gradient-secondary.archive-timeline-title {
    background-color: #ffffff00 !important;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
}

.emotion-keyboard, #fabtn_blog_settings_popup {
    background-color: rgba(255, 255, 255, 0.95) !important;
}

/*分类卡片透明*/
.bg-gradient-secondary {
    background: rgba(255, 255, 255, 0.1) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/*夜间透明*/
html.darkmode.bg-white, html.darkmode .card, html.darkmode #footer {
    background: rgba(66, 66, 66, 0.9) !important;
}

html.darkmode #fabtn_blog_settings_popup {
    background: rgba(66, 66, 66, 0.95) !important;
}
</style>
