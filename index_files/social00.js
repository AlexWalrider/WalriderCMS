function jqsocial(u,t) {
	var folder = '/images/social/';
	document.write('<div class="jsb-wrap"><div class="jsb-title"><span title="Кликните для переключения">Поделиться</span></div><ul class="jsb-list1">');
	function so(u,t) {
    document.write('<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="pst_kz" data-lang="ru">Твитнуть</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>')
    document.write('<g:plusone size="small"></g:plusone>')
		for (i=0; i< s.length; i=i+2) document.write(
			'<li><a style="background: url('+folder+s[i]+'.ico) no-repeat; background-position: 0 50%" href="http://'+s[i]+'/'+s[i+1].replace('{u}',u).replace('{t}',t)+'">'+s[i]+'</a></li>'
		);
	}
	var s=new Array(
		'100zakladok.ru','save/?bmurl='+u+'&bmtitle='+t,
		'delicious.com','post?url='+u+'&title='+t,
		'google.com','bookmarks/mark?op=edit&bkmk='+u+'&title='+t,
		'bobrdobr.ru','add.html?url='+u+'&title='+t,
		'links.i.ua','mark/?url='+u+'&ename='+t,
		'memori.ru','link/?sm=1&u_data[url]='+u+'&u_data[name]='+t,
		'moemesto.ru','post.php?url='+u+'&title='+t,
		'mister-wong.ru','add_url/?bm_url='+u+'&bm_description='+t,
		'linkstore.ru','servlet/LinkStore?a=add&url='+u+'&title='+t,
		'lopas.ru','add_story.php?story_url='+u,
		'myscoop.ru','add/?title='+t+'&URL='+u,
		'ruspace.ru','index.php?link=bookmark&action=bookmarkNew&bm=1&url='+u+'&title='+t,
		'vaau.ru','submit/?action=step2&url='+u
	);
	so (u,t);
	document.write('</ul><ul class="jsb-list2">');
	function so2(u,t) {
		for (i=0; i< s2.length; i=i+2) document.write(
			'<li><a style="background: url('+folder+s2[i]+'.ico) no-repeat; background-position: 0 50%" href="http://'+s2[i]+'/'+s2[i+1].replace('{u}',u).replace('{t}',t)+'">'+s2[i]+'</a></li>'
		);
	}
	var s2=new Array(
		'badabadu.com','?url='+u+'&posttitle='+t,
		'chipp.ru','submit.php?url='+u,
		'feedblog.ru','submit.php?url='+u,
		'korica.info','add_story.php?story_url='+u+'&story_title='+t,
		'monrate.ru','submit.php?url='+u,
		'news2.ru','add_story.php?url='+u,
		'newsland.ru','News/Add/type/news/',
		'sloger.net','submit.php?url='+u
	);
	so2 (u,t);
	document.write('</ul></div>');
}

$(document).ready(function() {
	var is_toogled = false;
	$('.jsb-wrap a').attr({target: '_blank'});
	$('.jsb-wrap').hover(
		function() {
			$(this).addClass('jsb-current');
			$('.jsb-current ul').css({opacity: 0}).hide();
			$('.jsb-current .jsb-list1').animate({opacity: 1}, 300).show();
			$('.jsb-current .jsb-title').addClass('jsb-s1').removeClass('jsb-s2');
		},
		function() {
			if( is_toogled == true ) { $('.jsb-title').click(); }
			$('.jsb-current ul').hide();
			$('.jsb-current .jsb-title').removeClass('jsb-s1').removeClass('jsb-s2');
			$('.jsb-current .jsb-title span').text('Поделиться');
			$('.jsb-wrap').removeClass('jsb-current');
		}
	);
	$('.jsb-title').toggle(
		function() {
			$('.jsb-current .jsb-list1').css({opacity: 0}).hide();
			$('.jsb-current .jsb-list2').animate({opacity: 1}, 300).show();
			$('.jsb-current .jsb-title').removeClass('jsb-s1').addClass('jsb-s2');
			$('.jsb-current .jsb-title span').text('Добавить в соц. сервисы');
			is_toogled = true;
		},
		function() {
			$('.jsb-current .jsb-list2').css({opacity: 0}).hide();
			$('.jsb-current .jsb-list1').animate({opacity: 1}, 300).show();
			$('.jsb-current .jsb-title').removeClass('jsb-s2').addClass('jsb-s1');
			$('.jsb-current .jsb-title span').text('Добавить в закладки');
			is_toogled = false;
		}
	);
})