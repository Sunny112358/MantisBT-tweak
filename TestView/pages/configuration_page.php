<?php
html_page_top("User view");
?>


<div align="center">
<form action="<?php echo plugin_page( 'configuration_update' )?>" method="post" onsubmit="return confirm('Are you sure you want to submit?');">

<table id="t1" class="width190" cellspacing="1">
	<tr>
		<td class="form-title" colspan="2">
			Erfasser <input type="text" name="name" value='Sunny' disabled>&nbsp;&nbsp;&nbsp;
			Telefonnummer <input type="text" name="name" value='+4917680783666' disabled>&nbsp;&nbsp;&nbsp;
			Bereich <select name="Bereich">
  <option value="">Select...</option>
  <option value="Inkasso">Inkasso</option>
  <option value="Sales">Sales</option>
  <option value="ITMaintenance">IT Maintenance</option>
</select><br><br>
			Zeit <input type="text" name="name" value='<?php echo date("H:i:s"); ?>' disabled><br><br>
			Anforderer <input type="text" name="name" size="50" ><br><br>
			
			
			Geben Sie bitte Ihre Anforderung ein
		</td>
	</tr>

	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Zusammenfassung</label>
		</td>
		<td>
			<textarea name="summary" cols="80" placeholder=""></textarea>
		</td>
	</tr>
	
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Beschreibung</label>
		</td>
		<td>
			<textarea name="description" cols="80" rows="10" placeholder="Was soll veraendert werden?"></textarea>
		</td>
	</tr>

<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Nutzen / Begruendung:</label>
		</td>
		<td>
			<textarea name="description" cols="80" rows="10" placeholder="Was ist der Vorteil / Nutzen durch die Veraenderung fuer Universum?
Welche Personen / Geschaeftsbereiche profitieren davon?
Begruendungen koennen sein: 
Gesetzesaenderung, Mandantenwunsch, Prozessoptimierung, Fehlerkorrektur, Featurewunsch, Auftrag der GF"></textarea>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Auswirkungen bei Verzicht:</label>
		</td>
		<td>
			<textarea name="description" cols="80" rows="10" placeholder="Was passiert, wenn der Change nicht durchgefuehrt wird ?"></textarea>
		</td>
	</tr>
	

	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Wunschdatum:</label>
		</td>
		<td>
			<input name="wishdate" type="date"></input>
		</td>
	</tr>

<tr <?php echo helper_alternate_class() ?>>
		<td class="points" >
			<label for="table"></label>
		</td>
		<td>
			
		</td>
	</tr>
	
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points" >
			<label for="table">Business Value</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Story Points</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Prioritaet</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">CAB-Termin aufgenommen</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Endedatum geplant</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Endedatum Ist</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Aufwaende geplant</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table">Aufwaende ist</label>
		</td>
		<td>
			<input name="value" type="number" placeholder="1"></input>
		</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?>>
		<td class="points">
			<label for="table"></label>
		</td>
		<td>
			
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="table">Referenz zu confluence</label>
		</td>
		<td>
			<input name="urltoconfluence" type="url" placeholder="" ></input>
		</td>
	</tr>
	
	<tr <?php echo helper_alternate_class() ?>>
		<td class="category">
			<label for="textarea">Kommentare oder weitere Anregungen</label>
		</td>
		<td>
			<textarea name="description" cols="80" rows="10" placeholder="analog zum confluence"></textarea>
		</td>
	</tr>


	
	<tr>
		<td class="left">
			<span class="required"> * <?php echo lang_get( 'required' ) ?></span>
		</td>
		<td class="center">
			<input <?php echo helper_get_tab_index() ?> type="submit" class="button" value="Submit Report" />
		</td>
	</tr>
</table>
</form>
</div>
<?php
html_page_bottom();
?>