<?php
    class qa_highlight_plugin_admin {

		function allow_template($template)
		{
			return ($template!='admin');
		}

		function option_default($option) {
			
			switch($option) {
				case 'highlight_plugin_css_style':
					return 'default.css';
				default:
					return null;
			}

		}

		function admin_form(&$qa_content)
		{

		//	Process form input
			$ok = null;

		
			if (qa_clicked('highlight_plugin_save')) {

				qa_opt('highlight_plugin_css_style',qa_post_text('highlight_plugin_css_style'));
				qa_opt('highlight_plugin_css_enable',qa_post_text('highlight_plugin_css_enable'));
				$ok = qa_lang('admin/options_saved');
			}


		// Create the form for display

			$fields = array();
			
			$csses['default.css'] = 'Default';
			$csses['dark.css'] = 'Dark';
			$csses['far.css'] = 'FAR';
			$csses['idea.css'] = 'IDEA';
			$csses['sunburst.css'] = 'Sunburst';
			$csses['zenburn.css'] = 'Zenburn';
			$csses['vs.css'] = 'Visual Studio';
			$csses['ascetic.css'] = 'Ascetic';
			$csses['magula.css'] = 'Magula';
			$csses['github.css'] = 'GitHub';
			$csses['brown_paper.css'] = 'Brown Paper';
			$csses['school_book.css'] = 'School Book';
			$csses['ir_black.css'] = 'IR Black';
			$csses['solarized_dark.css'] = 'Solarized - Dark';
			$csses['solarized_light.css'] = 'Solarized - Light';
			$csses['arta.css'] = 'Arta';
			
            $fields[] = array(
                'label' => 'Enable syntax highlighting',
                'tags' => 'NAME="highlight_plugin_css_enable"',
                'type' => 'checkbox',
                'value' => qa_opt('highlight_plugin_css_enable'),
            );
            
			$fields[] = array(
				'id' => 'highlight_plugin_css_style',
				'label' => 'Syntax highlighting style',
				'note' => 'For examples, see <a href="http://softwaremaniacs.org/media/soft/highlight/test.html">this page</a>',
				'tags' => 'NAME="highlight_plugin_css_style" ID="highlight_plugin_css_style"',
				'type' => 'select',
				'options' => $csses,
				'value' => @$csses[qa_opt('highlight_plugin_css_style')],
			);			

			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
					
				'fields' => $fields,
				
				'buttons' => array(
					array(
					'label' => qa_lang_html('main/save_button'),
					'tags' => 'NAME="highlight_plugin_save"',
					),
				),
			);
		}
    }