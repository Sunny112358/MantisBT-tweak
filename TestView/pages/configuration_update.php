<?php
html_page_top("User view");
?>
<div align="center">
<table class="width190" cellspacing="1">
	<tr>
		<td class="form-title" colspan="10" >
			This page will display reports but it is under progress now<br><br><br>
			<progress id="p1" ></progress>
 </td>
 
	</tr>
	</table>
	<form method="post" name="filters_open" id="filters_form_open" action="view_all_set.php?f=3">
				<input type="hidden" name="type" value="1" />
				<input type="hidden" name="page_number" value="1" />
		<input type="hidden" name="view_type" value="simple" />
		<table class="width100" cellspacing="1">

		
		<tr class="row-category2">
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=reporter_id[]" id="reporter_id_filter">Reporter:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=user_monitor[]" id="user_monitor_filter">Monitored By:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=handler_id[]" id="handler_id_filter">Assigned To:</a>
			</td>
			<td colspan="2" class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_category[]" id="show_category_filter">Category:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_severity[]" id="show_severity_filter">Severity:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_resolution[]" id="show_resolution_filter">Resolution:</a>
			</td>
			<td class="small-caption" valign="top">
									<a href="view_filters_page.php?for_screen=1&amp;target_field=show_profile[]" id="show_profile_filter">Profile:</a>
							</td>
					</tr>

		<tr class="row-1">
			<td class="small-caption" valign="top" id="reporter_id_filter_target">
							<input type="hidden" name="reporter_id[]" value="0" />any			</td>
			<td class="small-caption" valign="top" id="user_monitor_filter_target">
							<input type="hidden" name="user_monitor[]" value="0" />any			</td>
			<td class="small-caption" valign="top" id="handler_id_filter_target">
							<input type="hidden" name="handler_id[]" value="0" />any			</td>
			<td colspan="2" class="small-caption" valign="top" id="show_category_filter_target">
							<input type="hidden" name="show_category[]" value="0" />any			</td>
			<td class="small-caption" valign="top" id="show_severity_filter_target">
							<input type="hidden" name="show_severity[]" value="0" />any			</td>
			<td class="small-caption" valign="top" id="show_resolution_filter_target">
																	<input type="hidden" name="show_resolution[]" value="0" />
										any			</td>
						<td class="small-caption" valign="top" id="show_profile_filter_target">
																	<input type="hidden" name="show_profile[]" value="0" />
										any			</td>
						</tr>

		<tr class="row-category2">
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_status[]" id="show_status_filter">Status:</a>
			</td>
			<td class="small-caption" valign="top">
									<a href="view_filters_page.php?for_screen=1&amp;target_field=hide_status[]" id="hide_status_filter">Hide Status:</a>
							</td>
			<td class="small-caption" valign="top">
						</td>
						<td colspan="2" class="small-caption" valign="top">
				&#160;
			</td>
			<td colspan="1" class="small-caption" valign="top">
				&#160;
			</td>
			<td colspan="1" class="small-caption" valign="top">
				&nbsp;
			</td>
						<td colspan="1" class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_priority[]" id="show_priority_filter">Priority:</a>
			</td>
					</tr>

		<tr class="row-1">
			<td class="small-caption" valign="top" id="show_status_filter_target">
							<input type="hidden" name="show_status[]" value="0" />any			</td>
			<td class="small-caption" valign="top" id="hide_status_filter_target">
							<input type="hidden" name="hide_status[]" value="90" />closed (And Above)			</td>
						<td class="small-caption" valign="top"></td>
						<td colspan="2" class="small-caption" valign="top">
				&#160;
			</td>
			<td colspan="1" class="small-caption" valign="top">
				&#160;
			</td>
			<td colspan="1" class="small-caption" valign="top">
				&nbsp;
			</td>
						<td colspan="1" class="small-caption" valign="top" id="show_priority_filter_target">
              <input type="hidden" name="show_priority[]" value="0" />any	    	</td>
			
		</tr>

		<tr class="row-category2">
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=per_page" id="per_page_filter">Show:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=view_state" id="view_state_filter">View Status:</a>
			</td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=sticky_issues" id="sticky_issues_filter">Show Sticky Issues:</a>
			</td>
			<td class="small-caption" valign="top" colspan="2">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=highlight_changed" id="highlight_changed_filter">Changed(hrs):</a>
			</td>
			<td class="small-caption" valign="top" >
				<a href="view_filters_page.php?for_screen=1&amp;target_field=do_filter_by_date" id="do_filter_by_date_filter">Use Date Filters:</a>
			</td>
			<td class="small-caption" valign="top" colspan="2">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=relationship_type" id="relationship_type_filter">Relationships:</a>
			</td>
					</tr>
		<tr class="row-1">
			<td class="small-caption" valign="top" id="per_page_filter_target">
				50<input type="hidden" name="per_page" value="50" />			</td>
			<td class="small-caption" valign="top" id="view_state_filter_target">
				any<input type="hidden" name="view_state" value="0" />			</td>
			<td class="small-caption" valign="top" id="sticky_issues_filter_target">
				Yes				<input type="hidden" name="sticky_issues" value="on" />
			</td>
			<td class="small-caption" valign="top" colspan="2" id="highlight_changed_filter_target">
				6<input type="hidden" name="highlight_changed" value="6" />			</td>
			<td class="small-caption" valign="top"  id="do_filter_by_date_filter_target">
									<script type="text/javascript" language="JavaScript">
		<!--
			function SwitchDateFields() {
		    	// All fields need to be enabled to go back to the script
				document.filters_open.start_month.disabled = ! document.filters_open.do_filter_by_date.checked;
				document.filters_open.start_day.disabled = ! document.filters_open.do_filter_by_date.checked;
				document.filters_open.start_year.disabled = ! document.filters_open.do_filter_by_date.checked;
				document.filters_open.end_month.disabled = ! document.filters_open.do_filter_by_date.checked;
				document.filters_open.end_day.disabled = ! document.filters_open.do_filter_by_date.checked;
				document.filters_open.end_year.disabled = ! document.filters_open.do_filter_by_date.checked;

		   		return true;
			}
		// -->
		</script>
							No			</td>

			<td class="small-caption" valign="top" colspan="2" id="relationship_type_filter_target">
							<input type="hidden" name="relationship_type" value="-1" /><input type="hidden" name="relationship_bug" value="0" />any			</td>
					</tr>
		<tr class="row-category2">
			<td class="small-caption" valign="top">
									<a href="view_filters_page.php?for_screen=1&amp;target_field=platform" id="platform_filter">Platform:</a>
							</td>
			<td class="small-caption" valign="top">
									<a href="view_filters_page.php?for_screen=1&amp;target_field=os" id="os_filter">OS:</a>
							</td>
			<td class="small-caption" valign="top">
									<a href="view_filters_page.php?for_screen=1&amp;target_field=os_build" id="os_build_filter">OS Version:</a>
							</td>
			<td class="small-caption" valign="top" colspan="5">
								<a href="view_filters_page.php?for_screen=1&amp;target_field=tag_string" id="tag_string_filter">Tags:</a>
							</td>
					</tr>
		<tr class="row-1">
						<td class="small-caption" valign="top" id="platform_filter_target">
								<input type="hidden" name="platform[]" value="0" />
				any			</td>
			<td class="small-caption" valign="top" id="os_filter_target">
								<input type="hidden" name="os[]" value="0" />
				any			</td>
			<td class="small-caption" valign="top" id="os_build_filter_target">
								<input type="hidden" name="os_build[]" value="0" />
				any			</td>
			
			<td class="small-caption" valign="top" id="tag_string_filter_target" colspan="5">
				<input type="hidden" name="tag_string" value="" />			</td>
		</tr>
				<tr class="row-1">
			<td class="small-caption category2" valign="top">
                <a href="view_filters_page.php?for_screen=1&amp;target_field=note_user_id" id="note_user_id_filter">Note By:</a>
            </td>
            <td class="small-caption" valign="top" id="note_user_id_filter_target">
                <input type="hidden" name="note_user_id[]" value="0" />any            </td>
			<td class="small-caption" valign="top">
				<a href="view_filters_page.php?for_screen=1&amp;target_field=show_sort" id="show_sort_filter">Sort by:</a>
			</td>
			<td class="small-caption" valign="top" id="show_sort_filter_target">
				Updated Descending<input type="hidden" name="sort_0" value="last_updated" /><input type="hidden" name="dir_0" value="DESC" />			</td>
			<td class="small-caption" valign="top" colspan="6">&#160;</td>		</tr>
		<tr class="row-1">
			<td class="small-caption" valign="top"><a href="view_filters_page.php?for_screen=1&amp;target_field=match_type" id="match_type_filter">Match Type:</a></td>
			<td class="small-caption" valign="top" id="match_type_filter_target">
			All Conditions			<input type="hidden" name="match_type" value="0"/>
			</td>
			<td colspan="6">&#160;</td>
		</tr>
				<tr>
			<td colspan="2">
				<a href="" onclick="ToggleDiv( 'filter' ); return false;"
			><img border="0" src="images/minus.png" alt="-" /></a>&#160;Search&#160;<input type="text" size="16" name="search" value="" />
				<input type="submit" name="filter" class="button-small" value="Apply Filter" />
			</td>
			</form>
			<td class="center" colspan="2"> <!-- use this label for padding -->
				<span class="bracket-link">[&#160;<a href="view_all_set.php?type=6&amp;view_type=advanced">Advanced Filters</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="permalink_page.php?url=http%3A%2F%2Fmantis_test.universum.int%2Fsearch.php%3Fproject_id%3D1%26sticky_issues%3D1%26sortby%3Dlast_updated%26dir%3DDESC%26hide_status_id%3D90%26match_type%3D0" target="_blank">Create Permalink</a>&#160;]</span> 			</td>
			<td class="right" colspan="4">
								<form method="get" name="reset_query" action="view_all_set.php">
										<input type="hidden" name="type" value="3" />
					<input type="hidden" name="source_query_id" value="-1" />
					<input type="submit" name="reset_query_button" class="button-small" value="Reset Filter" />
					</form>
									<form method="post" name="save_query" action="query_store_page.php">
										<input type="submit" name="save_query_button" class="button-small" value="Save Current Filter" />
					</form>
						</td>
		</tr>
		</table>
</div><div id="filter_closed" class="hidden">
		<br />
		<form method="post" name="filters_closed" id="filters_form_closed" action="view_all_set.php?f=3">
				<input type="hidden" name="type" value="1" />
				<input type="hidden" name="page_number" value="1" />
		<input type="hidden" name="view_type" value="simple" />
		<table class="width100" cellspacing="1">

				<tr>
			<td colspan="2">
				<a href="" onclick="ToggleDiv( 'filter' ); return false;"
			><img border="0" src="images/plus.png" alt="+" /></a>&#160;Search&#160;<input type="text" size="16" name="search" value="" />
				<input type="submit" name="filter" class="button-small" value="Apply Filter" />
			</td>
			</form>
			<td class="center" colspan="2"> <!-- use this label for padding -->
				<span class="bracket-link">[&#160;<a href="view_all_set.php?type=6&amp;view_type=advanced">Advanced Filters</a>&#160;]</span> <span class="bracket-link">[&#160;<a href="permalink_page.php?url=http%3A%2F%2Fmantis_test.universum.int%2Fsearch.php%3Fproject_id%3D1%26sticky_issues%3D1%26sortby%3Dlast_updated%26dir%3DDESC%26hide_status_id%3D90%26match_type%3D0" target="_blank">Create Permalink</a>&#160;]</span> 			</td>
			<td class="right" colspan="4">
								<form method="get" name="reset_query" action="view_all_set.php">
										<input type="hidden" name="type" value="3" />
					<input type="hidden" name="source_query_id" value="-1" />
					<input type="submit" name="reset_query_button" class="button-small" value="Reset Filter" />
					</form>
									<form method="post" name="save_query" action="query_store_page.php">
										<input type="submit" name="save_query_button" class="button-small" value="Save Current Filter" />
					</form>
						</td>
		</tr>
		</table>
	
	</div>
<?php
html_page_bottom();
?>


<!-- print_successful_redirect( plugin_page( 'configuration_page', true ) );-->