<div id="sideBar">
	<div id="activeUser">
		<span class="userName" style="float: left;"><?=$cp_screen_name?></span>
		<a class="logOutButton" href="<?=BASE.AMP.'C=login'.AMP.'M=logout'?>" title="<?=lang('logout')?>"><?=lang('logout')?></a>
	</div>
	<div<?=$sidebar_state?>>
	<h4><?=lang('myaccount')?></h4>

	<div id="siteLogo">
		<a href="<?=BASE.AMP.'C=myaccount'.AMP.'M=edit_avatar'?>" id="user_avatar"><img src="<?=$cp_avatar_path ? $cp_avatar_path : $cp_theme_url.'images/site_logo.gif'?>" width="50" alt="Site Logo" /></a>
		<p>
			<strong><?=$this->session->userdata('username')?></strong>
			<span><?=$this->session->userdata('group_title')?></span>
			<a href="<?=BASE.AMP.'C=myaccount'?>"><?=lang('control_panel')?></a>
		</p>
		<div class="clear_left"></div>
	</div>

	<div id="notePad">
	<?=form_open('C=myaccount'.AMP.'M=notepad_update', array('id' => 'notepad_form'), array('redirect_to' => $this->cp->get_safe_refresh()))?>
		
		<h4>
			<?=lang('notepad')?>
			<span id="sidebar_notepad_edit_desc" class="sidebar_hover_desc"><?=lang('click_to_edit')?></span>
		</h4>

		<p id="notePadText" class="js_show"><?=lang('notepad_no_content')?></p>
		<?=form_textarea(array('name' => 'notePadTextEdit', 'value' => $cp_notepad_content, 'id' => 'notePadTextEdit', 'class' => 'js_hide'))?>
		<p id="notePadControls" class="js_hide"><br />
			<input type="submit" class="submit" value="<?=lang('save')?>" />
			<a class="cancel" href="#"><?=lang('cancel')?></a>
			<img src="<?=$cp_theme_url?>images/indicator.gif" id="notePadSaveIndicator" alt="Notepad Save Indicator" style="display: none;" width="16" height="16" />
		</p>

	<?=form_close()?>
	</div>

	<div id="search">
		<h4><?=lang('search')?></h4>
		<?=form_open('C=search', array('id' => 'cp_search_form'))?>
			<input type="text" id="cp_search_keywords" name="cp_search_keywords" value="" maxlength="80" class="input" />
			<input type="image" src="<?=$cp_theme_url?>images/search_button.gif" class="searchButton" />
			<input type="image" src="<?=$cp_theme_url?>images/indicator.gif" id="cp_search_ajax_indicator" class="searchButton" style="display: none;" />
		<?=form_close()?>

	</div> <!-- search -->

	<!-- quickLinks -->
	<?php $this->load->view('_shared/quick_links')?>
	</div> <!-- sidebar_state -->
	<a href="#" id="hideSidebarLink" onclick="document.cookie='exp_cp_sidebar_state=off;'"><?=lang('hide_sidebar')?></a>
	<a href="#" id="revealSidebarLink" onclick="document.cookie='exp_cp_sidebar_state=on;'"><?=lang('reveal_sidebar')?></a>
</div> <!-- sideBar -->