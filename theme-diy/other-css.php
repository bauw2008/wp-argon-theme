<style>
/*========颜色设置===========*/
 
/*左侧菜单栏突出颜色修改*/
/*.leftbar-menu-item > a:hover, .leftbar-menu-item.current > a{
    background-color: #f9f9f980;
} */
 
/*左侧栏搜索框的颜色*/
button#leftbar_search_container {
    background-color: transparent;
}

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
 
/*========排版设置===========*/

/*顶栏菜单放大*/
/*这里也可以设置刚刚我们设置的btfFont字体。试试看！*/
 
.navbar-nav .nav-link {
    font-size: 1rem;
    font-family: 'echo';
			
}
.navbar-brand {
	font-family: 'echo';
    font-size: 1rem;
    margin-right: 1.0 rem;
    padding-bottom: 0.2 rem;	
 	
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