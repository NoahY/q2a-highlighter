<?php

	class qa_html_theme_layer extends qa_html_theme_base {

		function head_custom() {
			qa_html_theme_base::head_custom();
			if(qa_opt('highlight_plugin_css_enable')) {
				$this->output('<style>');
				include(QA_HTML_THEME_LAYER_DIRECTORY.'css/'.qa_opt('highlight_plugin_css_style'));
				$this->output('</style>');
				$this->output('<script type="text/javascript">');
				include(QA_HTML_THEME_LAYER_DIRECTORY.'highlight.js');
				$this->output('</script>');
				$this->output('<script type="text/javascript">
				$("document").ready(function(){ 
					//hljs.selected_languages = hljs.LANGUAGES;
					$(".wmd-button-bar").click(function(){
						window.clearTimeout(hljs.Timeout);
						hljs.Timeout = window.setTimeout(function() {
							hljs.initHighlighting.called = false;
							hljs.initHighlighting();
							
						},200);
					});
					$("textarea").each(function(){
						$(this).keypress(function(){
							window.clearTimeout(hljs.Timeout);
							hljs.Timeout = window.setTimeout(function() {
								hljs.initHighlighting.called = false;
								hljs.initHighlighting();
								
							},200);
						});
					});
					window.setTimeout(function() {
						hljs.initHighlighting.called = false;
						hljs.initHighlighting();
					},200);
				});
				</script>');
			}
		}
		
	}

