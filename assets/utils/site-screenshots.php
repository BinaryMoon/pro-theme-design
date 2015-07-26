<?php

$urls = <<<SITES
jamesobrien.id.au
aosugo.com
molduvidrios.com
losangelesparanormalassociation.wordpress.com
feijoadapop.com
brendaforever.wordpress.com
shortblacktechie.com
prytkovalexey.org
budgetrf.org
theversion.co.uk
thelostologist.com
aengineering.org
prothemedesignsandbox.wordpress.com
bellastravels.zerolimits.com
therobmccallum.wordpress.com
cadiballo.com
drignaciodallo.com.ar/
gamerfeedradio.com
4vientocomics.com
sacredparent.com
soropositivo-cinquentao.com.br
buckthesystemux.wordpress.com
thebulbgames.com
popupoffice.wordpress.com
undeuxmike.com
lilyhammer0709.wordpress.com
legosandfriends.com
romerodemo.wordpress.com
escreveravida.com
realcondolife.me
acgreviews.com
jambeyancyber.wordpress.com
robodudereview.wordpress.com
denpeakacademy.com
oaklandartsreview.com
hanleystrength.com
ohchrismartin.com
nickxmac.com
easysimplegood.wordpress.com
leonardfreed.wordpress.com
torrentthis.tv
gooddirectionsandturnipgreens.wordpress.com
kittycarmodytraveladventures.com
westernasbestos.wordpress.com
maic2705.wordpress.com
vueltarapidagt.com
jaqdoro4vice.wordpress.com
firstbloodgames.com
lagginout.wordpress.com
casadapassarela.com
geeksdownunder.com.au
finessefanatics.com
lifehackersunion.com
kenkatu.wordpress.com
tuwebmasters.com
kraeglerarcade.wordpress.com
xiopcompos.wordpress.com
fansmoretzmexico.com
nutritiousrecipes101.wordpress.com
sylmaplugplantsbvba.wordpress.com
analysisplayground.wordpress.com
kissthemovies.com
photoshopee.wordpress.com
starcade5.wordpress.com
brandnewglory.com
teamworksapp.wordpress.com
africacreed.com
latinagaming.com
trigontv.com
lecheshabo.wordpress.com
hmctestingdemo.wordpress.com
geeklynet.wordpress.com
textgestalterin.wordpress.com
quikegamingtemadeneme.com
allnbacanada.com
africanjungleking.org
motivatedgamer.com
ralphsmart.com
hauseliving.com
tictactock.com
bloomdw.wordpress.com
SITES;

$sites = explode( "\n", $urls );

foreach( $sites as $site ) {

        $width = 400;
        $height = 300;
        $image_url = 'https://s0.wordpress.com/mshots/v1/' . urlencode( $site ) . '?w=' . $width . '&h=' . $height;

?>
<a href="http://<?php echo $site; ?>" target="_blank">
            <img src="<?php echo $image_url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
</a>
<?php
}
