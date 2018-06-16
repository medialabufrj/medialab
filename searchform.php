<?php /**
Template Name: Search Form
**/ ?>

<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
	<div class="control has-icons-left">
		<!-- <label for="s">Search for:</label> -->
		<input class="input is-small" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="buscar"/>
		<span class="icon is-small is-left">
			<i class="fas fa-search" aria-hidden="true"></i>
		</span>
		<input type="submit" id="searchsubmit" value="Buscar" style="display:none;" />
	</div>
</form>