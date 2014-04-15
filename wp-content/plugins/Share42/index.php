<?php
/*
Plugin Name: Share42
Description: Share online
License: None
Author: dgael
Version: 1.0
*/

function fb_add_custom_user_profile_fields($user)
{
//	On ajoute les données ici ?>
	<h3><?php _e('Social Networks', '42born2code'); ?></h3>
	<table class="form-table">
		<tr>
			<th>
				<label for="facebook"><?php _e('Facebook', '42born2code'); ?></label>
			</th>
			<td>
				<input type="text" name="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Your Facebook account', '42born2code'); ?></span>
			</td>
		</tr>
		<tr>
			<th>
				<label for="twitter"><?php _e('Twitter', '42born2code'); ?></label>
			</th>
			<td>
				<input type="text" name="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Your Twitter account', '42born2code'); ?></span>
			</td>
		</tr>
		<tr>
			<th>
				<label for="dailymotion"><?php _e('Dailymotion', '42born2code'); ?></label>
			</th>
			<td>
				<input type="text" name="dailymotion" value="<?php echo esc_attr(get_the_author_meta('dailymotion', $user->ID)); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Your Dailymotion video', '42born2code'); ?></span>
			</td>
		</tr>
		<tr>
			<th>
				<label for="mood"><?php _e('Mood', '42born2code'); ?></label>
			</th>
			<td>
				<select name="mood">
					<option value="Happy">Happy</option>
					<option value="Tired">Tired</option>
					<option value="Sad">Sad</option>
				</select><br />
				<span class="description"><?php _e('Your mood', '42born2code'); ?></span>
			</td>
		</tr>
	</table>
<?php }

function fb_save_custom_user_profile_fields($user_id)
{
//	On sauvegarde les données ici
	if (!current_user_can('edit_user', $user_id))
		return FALSE;
	update_usermeta($user_id, 'facebook', $_POST['facebook']);
	update_usermeta($user_id, 'twitter', $_POST['twitter']);
	update_usermeta($user_id, 'dailymotion', $_POST['dailymotion']);
	update_usermeta($user_id, 'mood', $_POST['mood']);
}

// On dit que fb_add_custom... va « agir » avec show_user_profile et edit_user_profile /on exécute
add_action('show_user_profile', 'fb_add_custom_user_profile_fields');
add_action('edit_user_profile', 'fb_add_custom_user_profile_fields');
// On dit que fb_save_custom... va « agir » avec personal_option_update et edit_user_profile_update /on exécute
add_action('personal_options_update', 'fb_save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'fb_save_custom_user_profile_fields');
?>
