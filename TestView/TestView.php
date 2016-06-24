<?php
# MantisBT - a php based bugtracking system
# Copyright (C) 2002 - 2014  MantisBT Team - mantisbt-dev@lists.sourceforge.net
# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.



class TestViewPlugin extends MantisPlugin  {

	/**
	 *  A method that populates the plugin information and minimum requirements.
	 */
	function register( ) {
		$this->name = "Test view plug-in";
		$this->description = "This is a short description.";
		$this->page = 'configuration_page';

		$this->version = '1.0';
		$this->requires = array(
			'MantisCore' => '1.2.0',
		);

		$this->author = 'Universum Team';
		$this->contact = 'mantisbt-dev@lists.sourceforge.net';
		$this->url = 'http://www.mantisbt.org';
		
		
	}

function hooks( ) {
      $hooks = array(
         'EVENT_MENU_MAIN' => 'links',
      );
      return $hooks;
   }
   
   function links(){
   $t_links = array();
		$t_report_page = plugin_page( 'configuration_page' );
		$t_view_page = plugin_page( 'configuration_update' );
		
		$t_links[] = "<a href=\"$t_report_page\">Test Report Issue</a>";
		$t_links[] = "<a href=\"$t_view_page\">Test View Issues</a>";
		return $t_links;
   }
	
	
	
	/**
	 * Default plugin configuration.
	 */
	/*function config() {
		return array(
			'config1' => ON,

			'config2' => ON
			
		);
	}
	
	
	
	
	function hooks( ) {
		$hooks = array(
			'EVENT_VIEW_BUG_EXTRA' => 'event_view_bug_extra',
			'EVENT_LAYOUT_CONTENT_BEGIN' => 'event_layout_page_header',
		);
		return $hooks;
	}
	
	function event_view_bug_extra(){
	echo 'Inside event_view_bug_extra function';
	}
	function event_layout_page_header(){
		$t_date = date("H:i:s");
		return ' logged into the system at '.$t_date;
	}*/

}
