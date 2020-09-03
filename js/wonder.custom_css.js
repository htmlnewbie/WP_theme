var editor = ace.edit("customCSS");       /* Ace is built in vanilla, that's why no jQuery is needed   */
editor.setTheme("ace/theme/monokai");     /* This will call the ace edit in the custmo div and use a prebuilt API of ace to set the theme of the CSS bos */
editor.getSession().setMode("ace/mode/css");