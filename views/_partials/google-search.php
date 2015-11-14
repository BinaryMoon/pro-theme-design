
<form method="get" id="searchform" class="searchform" id="searchbox_<?php echo GOOGLE_CSE; ?>" action="<?php echo path( 'search' ); ?>">
    <input value="<?php echo GOOGLE_CSE; ?>" name="cx" type="hidden"/>
    <input value="FORID:11" name="cof" type="hidden"/>
    <input type="text" value="" placeholder="Search..." name="q" id="q" class="text" />
    <input type="submit" id="searchsubmit" value="Search" class="button" />
</form>
