function parse_text_htmlspch(a){a=a.replace(/</g,"&lt;");a=a.replace(/>/g,"&gt;");return a=a.replace(/"/g,"&quot;")}
function load_image_html(a,c){var b=parse_text_htmlspch(a.innerHTML);"auto"!=a.style.cursor&&(a.style.cursor="auto",c.innerHTML='<img border="0" src="'+b+'" style="max-width: 1500px;" alt="image '+b+'">')};