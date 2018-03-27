[{* Den ursprünglichen Block übernehmen *}]
[{$smarty.block.parent}]
<div class="smallFont">
    [{*Gewicht ausgeben*}]
    [{oxmultilang ident="DETAILS_ARTWEIGHT"}]: [{$basketitem->getWeight()*1000}] g[{*oxmultilang ident="DETAILS_ARTWEIGHTUNIT"*}]
</div>
<div class="smallFont">
    [{*Kurzbeschreibung ausgeben*}]
    [{ $basketproduct->oxarticles__oxshortdesc->value }]</div>
