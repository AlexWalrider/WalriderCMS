 $(document).ready(function() 
 {$('#title_input').bind('keyup', function() { 
 var perem = $('#title_input').val();/*извлекаю введённое после каждого keyup*/
var shablon = /\w{1,100}/;/*только A-Z a-z 0-9 _  разрешённые значение символов*/
var result = perem.match(shablon);/*обрабатываю введённое шаблоном и заношу в переменную*/
if (result!=perem){/*если после и до обработки переменная отличается-значит вводились не те символы */
$('#info').text('Смените раскладку');
}
else {
$('#info').text('');
}
});
});//End READY