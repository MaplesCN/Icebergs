<?php date_default_timezone_set("PRC");?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" name="viewport">
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<?php wp_head();?>
	<meta property="og:site_name" content="<?php bloginfo('name');?> · <?php bloginfo('description');?>"/>
	<meta property="og:locale" content="<?php bloginfo('language');?>"/>
	<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<script src="https://cdn.staticfile.org/jquery/3.7.0/jquery.min.js"></script>
	<script>
	var dark='<i class="fa-solid fa-moon"></i>',light='<i class="fa-solid fa-lightbulb"></i>',auto='<i class="fa-solid fa-circle-half-stroke"></i>',mode=localStorage.getItem("darkMode"),toggler="dark-toggler";$(function(){let content=document.getElementById("emoji").innerHTML,emoji=content.match(/\p{Emoji_Presentation}/gu);for(emoji=Array.from(new Set(emoji)),emo=0;emo<emoji.length;emo++){content=content.replaceAll(emoji[emo],"<emoji>"+emoji[emo]+"</emoji>");document.getElementById("emoji").innerHTML=content.replaceAll("</emoji><emoji>","")};"off"==mode?document.getElementById(toggler).innerHTML=light:"on"==mode?(document.getElementById(toggler).innerHTML=dark,$("html").addClass("dark-mode")):(document.getElementById(toggler).innerHTML=auto,$("html").addClass("auto")),$("#dark-toggler").click(function(){mode=localStorage.getItem("darkMode"),$("html").addClass("toggler"),"off"==mode?($("html").toggleClass("dark-mode"),document.getElementById(toggler).innerHTML=dark,localStorage.setItem("darkMode","on")):"on"==mode?($("html").toggleClass("dark-mode auto"),document.getElementById(toggler).innerHTML=auto,localStorage.setItem("darkMode","auto")):($("html").toggleClass("auto"),document.getElementById(toggler).innerHTML=light,localStorage.setItem("darkMode","off"))})});
	</script>
</head>
<body <?php body_class();?> id="emoji">
<?php wp_body_open();?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail()):?>
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
			<div class="site-featured-image">
				<?php twentynineteen_post_thumbnail(); the_post(); $discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; $classes = 'entry-header'; if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) { $classes = 'entry-header has-discussion'; }?>
				<div class="<?php echo $classes; ?>">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</div>
				<?php rewind_posts(); ?>
			</div>
		</header>
		<?php endif; ?>
		<?php if ( is_home()):?>
		<style>
		.site-header.featured-image .site-featured-image .entry-header .entry-title::before{display:none}
		.site-header.featured-image::after,.site-header.featured-image .site-featured-image::after{background:unset}
		</style>
		<header id="top" class="site-header featured-image">
		<div class="site-featured-image">
			<figure class="post-thumbnail">
				<img width="1568" height="882" id="home" src="https://res.1word.cn/icebergs/icebergs-pixelated.svg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 1568px) 100vw, 1568px" style="user-select:none"/></figure>
			<div class="entry-header"><h1 class="entry-title" style="text-align:center"><sup><i class="fa-solid fa-hashtag"></i></sup><a class="typed-text" href="#primary">ONEWORD</a></h1></div>
		</div>
		</header>
		<?php endif; ?>