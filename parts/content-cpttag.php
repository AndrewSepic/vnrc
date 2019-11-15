<?php
/**
 * The template part for displaying a tag for CPT categories
 */
?>

<p class="cptTag">
	<?php
		// if child of Issues
		if ($post->post_parent == 16109) {
 			?> <span class="issueTag">Issues</span> <?php
		}
		//if child of Tools
		elseif ($post->post_parent == 16116) {
			?> <span class="toolsTag">Tools</span> <?php
		}
		elseif ($post->post_parent == 16119) {
			?> <span class="caseTag">Case Studies</span> <?php
		}
	?>
</p>
