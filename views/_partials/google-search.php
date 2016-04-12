
<form method="get" class="searchform" id="searchbox_<?php echo GOOGLE_CSE; ?>" action="<?php echo path( 'search' ); ?>">
    <input value="<?php echo GOOGLE_CSE; ?>" name="cx" type="hidden" />
    <input value="FORID:11" name="cof" type="hidden" />
    <input type="text" placeholder="Search..." name="q" id="q" class="text squashy" />
    <button type="submit" id="searchsubmit" class="button">
        <i class="fa fa-search solo" aria-hidden="true"></i><span class="screen-reader-text">Search</span>
    </button>
</form>
