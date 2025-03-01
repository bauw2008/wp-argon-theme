<style>
/* 在不改变主题色的前提下，将卡片等事物的背景透明化 */
#leftbar_announcement {
    background: var(--themecolor-gradient) !important;
}

#footer {
    background: var(--themecolor-gradient) !important;
}

/* 
 * 页尾脚本：
 * op1——“白天”状态主题色透明度
 * op2——“白天”状态卡片颜色透明度
 * op3——“夜间”状态卡片颜色透明度
 * op4——“夜间”状态主题色透明度
 */
 
/* 顶栏图标-图片和右侧文字的间距 */
/*  .navbar-brand img {
	  height: 50px;
 }   */

 /*.mr-lg-5, .mx-lg-5 {
margin-right: 0.2rem !important;
}*/

/* 头像自动缩放、高亮 / 暗 */
#leftbar_overview_author_image {
    width: 100px;
    height: 100px;
    margin: auto;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: rgba(127, 127, 127, 0.1);
    overflow: hidden;
    box-shadow: 0 0 5px rgba(116, 8, 204, 0.3);
    transition: transform 0.3s ease; /* 变化速度 */
}

#leftbar_overview_author_image:hover {
    transform: scale(1.2); /* 缩放大小 */
    filter: brightness(110%); /* 调节亮度 */
}

/* 隐藏公告栏名字 */
.leftbar-announcement-title.text-white {
    display: none;
}

/* 额外小工具背景透明 */
div#block-22 {
    background-color: #ffffff00 !important;
}
	
/* 用于额外诗词布局 */
.custom-widget {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 5px;
    width: 100%;
}

.custom-card .item-headline {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    color: var(--themecolor);
}

.item-headline i {
    margin-right: 10px;
}

.item-headline span {
    font-weight: bold;
}

#jinrishici-sentence {
    text-align: left; /* 确保文本左对齐 */
}

/* 用于额外站点信息部分 */
.custom-card .webinfo-item {
    display: flex;
    justify-content: space-between;
}

</style>