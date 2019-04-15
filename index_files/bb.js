    function bb(_obj_name, _tag_start, _tag_end)

    {
    var area=document.getElementsByName(_obj_name).item(0);




    if (document.getSelection)

    { 

      area.value=area.value.substring(0,area.selectionStart)+

      _tag_start+

	  area.value.substring(area.selectionStart, area.selectionEnd)+

      _tag_end+


      area.value.substring(area.selectionEnd,area.value.length);

    }


    else

    { var selectedText=document.selection.createRange().text;
      if (selectedText!='')

      { var newText=_tag_start+selectedText+_tag_end;

        document.selection.createRange().text=newText;

      }

    }

    }


