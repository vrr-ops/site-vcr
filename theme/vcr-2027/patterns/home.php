<?php
/**
 * Title: Accueil — vélodrome
 * Slug: vcr/home
 * Categories: vcr
 * Inserter: true
 */
$img = get_theme_file_uri( 'assets/img/' );
?>
<!-- wp:group {"align":"full","className":"vcr-arch","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"rose","textColor":"blanc-pur","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull vcr-arch has-blanc-pur-color has-rose-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Vélo Club Roubaix · Van Rysel Roubaix · Saison 2027</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Toutes les routes démarrent du vélodrome.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"l"} -->
<p class="has-l-font-size">Une équipe UCI Continental, un club formateur, deux Paris-Roubaix et un camp de base ouvert à tous.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"noir"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-noir-background-color has-background wp-element-button" href="/equipe-pro/">Découvrir l'équipe 2027</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/boutique/">Le maillot 2027</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","align":"center","style":{"color":{"duotone":null}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $img . 'maillot_front.png' ); ?>" alt="Maillot Van Rysel Roubaix 2027, vue de face" style="filter:drop-shadow(0 30px 40px rgba(0,0,0,.25));max-width:460px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Choisis ta route</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Six routes, un seul point de départ</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"11rem"},"style":{"spacing":{"blockGap":"1rem","margin":{"top":"2rem"}}}} -->
<div class="wp-block-group" style="margin-top:2rem">
<?php
$routes = [
	[ 'Équipe Pro', 'Coureurs, race center, résultats, médias', '/equipe-pro/', '#DC3553' ],
	[ 'Le Club', 'École de vélo, route, piste, BMX, licence 2027', '/club/', '#B9B1AA' ],
	[ 'Courses', 'Paris-Roubaix Espoirs et Juniors', '/courses/', '#121214' ],
	[ 'Vélodrome & Café', 'Van Rysel Café, sorties, parcours GPX', '/velodrome/', '#F4B3C0' ],
	[ 'Boutique', 'Collection équipe 2027, cadeaux, expériences', '/boutique/', '#D9D2CD' ],
	[ 'Entreprises', 'Partenariats, séminaires, hospitalités', '/entreprises/', '#3A3A3F' ],
];
foreach ( $routes as $r ) : ?>
<!-- wp:group {"className":"vcr-route","style":{"border":{"radius":"14px","width":"1px","color":"#EEE3E3","top":{"color":"<?php echo $r[3]; ?>","width":"6px"}},"spacing":{"padding":{"top":"1.375rem","bottom":"1.375rem","left":"1.375rem","right":"1.375rem"},"blockGap":"0.5rem"}},"backgroundColor":"blanc-pur","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group vcr-route has-border-color has-blanc-pur-background-color has-background" style="border-color:#EEE3E3;border-width:1px;border-radius:14px;border-top-color:<?php echo $r[3]; ?>;border-top-width:6px;padding-top:1.375rem;padding-right:1.375rem;padding-bottom:1.375rem;padding-left:1.375rem"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><a href="<?php echo esc_url( $r[2] ); ?>"><?php echo esc_html( $r[0] ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"gris","fontSize":"s"} -->
<p class="has-gris-color has-text-color has-s-font-size"><?php echo esc_html( $r[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"backgroundColor":"noir","textColor":"blanc-pur","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-blanc-pur-color has-noir-background-color has-text-color has-background" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"12rem"},"style":{"typography":{"textAlign":"center"}}} -->
<div class="wp-block-group" style="text-align:center">
<?php foreach ( [ [ '7', 'Victoires en 2026' ], [ '17', 'Podiums' ], [ '63', 'Top 10' ], [ 'TOP 50', 'Mondial, toutes équipes' ] ] as $s ) : ?>
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"vcr-score","fontSize":"score"} -->
<p class="vcr-score has-score-font-size"><?php echo esc_html( $s[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"}},"fontSize":"xs"} -->
<p class="has-xs-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html( $s[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Équipe Van Rysel Roubaix</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Les coureurs 2027</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
<p style="font-weight:800;letter-spacing:0.06em;text-transform:uppercase"><a href="/equipe-pro/coureurs/">Voir tout l'effectif →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"coureur","order":"asc","orderBy":"rand","inherit":false},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-query" style="margin-top:2rem"><!-- wp:post-template {"className":"vcr-rider-card","layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"10rem"}} -->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-title {"isLink":true,"level":3} /-->
<!-- wp:post-terms {"term":"specialite"} /-->
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"nationalite"}}}},"className":"vcr-meta","textColor":"gris"} -->
<p class="vcr-meta has-gris-color has-text-color"></p>
<!-- /wp:paragraph -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"beton","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-beton-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1.5rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"18px","width":"1px","color":"#ECE6E3"}},"backgroundColor":"blanc-pur"} -->
<div class="wp-block-column has-border-color has-blanc-pur-background-color has-background" style="border-color:#ECE6E3;border-width:1px;border-radius:18px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;flex-basis:60%"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Race center</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">[Nom de la course]</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>[Cat. UCI] · [km] · Dernier résultat : <strong>[place] — [Prénom NOM]</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"noir"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-noir-background-color has-background wp-element-button" href="/equipe-pro/race-center/">Calendrier &amp; résultats</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"18px"}},"backgroundColor":"noir","textColor":"blanc-pur"} -->
<div class="wp-block-column has-blanc-pur-color has-noir-background-color has-text-color has-background" style="border-radius:18px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:paragraph {"className":"is-style-kicker","textColor":"piste"} -->
<p class="is-style-kicker has-piste-color has-text-color">Saison 2027</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"l"} -->
<p class="has-l-font-size"><strong>[0]</strong> victoires · <strong>[0]</strong> podiums · <strong>[0]</strong> top 10</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"},"blockGap":{"left":"2.5rem"}},"border":{"radius":"24px"}},"backgroundColor":"blush"} -->
<div class="wp-block-columns are-vertically-aligned-center has-blush-background-color has-background" style="border-radius:24px;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Nouvelle collection</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Le maillot de toutes les routes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Le maillot officiel 2027, floqué au nom de ton coureur préféré. Retrait gratuit au Van Rysel Café.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/boutique/">Précommander · [prix]</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/boutique/">Toute la boutique</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"isStackedOnMobile":false,"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img . 'maillot_back.png' ); ?>" alt="Maillot Van Rysel Roubaix 2027, vue de dos"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $img . 'cuissard.jpg' ); ?>" alt="Cuissard Van Rysel Roubaix 2027, quatre vues" style="border-radius:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vcr-arch vcr-arch--center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"piste","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull vcr-arch vcr-arch--center has-piste-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","className":"is-style-kicker"} -->
<p class="has-text-align-center is-style-kicker">Gratuit · ouvert à tous · départ du Van Rysel Café</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"xxl"} -->
<h2 class="wp-block-heading has-text-align-center has-xxl-font-size">Rejoins le Peloton Rose</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
<p class="has-text-align-center has-l-font-size">Roule avec nous le samedi, supporte l'équipe au bord de la route, cumule des points et gagne des expériences : sortie avec les pros, accès au bus en course.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"noir"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-noir-background-color has-background wp-element-button" href="/peloton-rose/">Je rejoins le peloton</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Actus</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
<p style="font-weight:800;letter-spacing:0.06em;text-transform:uppercase"><a href="/actus/">Toutes les actus →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","separator":" · "} /-->

<!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}},"border":{"top":{"color":"#ECE6E3","width":"1px"}}},"backgroundColor":"blanc-pur","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-blanc-pur-background-color has-background" style="border-top-color:#ECE6E3;border-top-width:1px;padding-top:3rem;padding-bottom:3rem"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:paragraph {"className":"is-style-kicker"} -->
<p class="is-style-kicker">Ils roulent avec nous</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800"}}} -->
<p style="font-weight:800"><a href="/entreprises/">Devenir partenaire →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"textColor":"gris","style":{"typography":{"fontWeight":"800","textTransform":"uppercase","letterSpacing":"0.12em","lineHeight":"2"}},"fontSize":"s"} -->
<p class="has-gris-color has-text-color has-s-font-size" style="font-weight:800;letter-spacing:0.12em;line-height:2;text-transform:uppercase">Van Rysel · MEL · Région Hauts-de-France · Nord · BC Nord · Dalkia · Materiel-velo.com · Diffu Sport · SRAM · Zipp · fi'zi:k · Deda · Michelin · Hotel Cap Negret · Saint-Amand · Ibis Styles · Newcom · Skoda Verbaere · Cryotera</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
