<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></br></div><?php echo "<h2>" . __("Post from Flickr Options", "postflickr_trdom") . "</h2>"; ?>
	<form name="postflickr_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<?php echo "<h3>" . __("Your Flickr user data") . "</h3>"; ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th>
						<label for="postflickr_feed_url"><?php _e("Flickr feed URL: "); ?></label>
					</th>
					<td>
						<input id="category_base" class="regular-text code" type="text" value="<?php echo $feed_url; ?>" name="postflickr_feed_url"></input>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="submit"><input type="submit" name="Submit" class="button button-primary" value="<?php _e("Save Changes"); ?>"></p>
	</form>
</div>