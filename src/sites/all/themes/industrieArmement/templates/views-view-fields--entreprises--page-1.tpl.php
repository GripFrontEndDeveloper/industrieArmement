<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="col-md-12 singleHeader"><h2><?php print $fields['title']->content ?></h2></div>
<div class="col-md-12 sectNacReg">
    <div class="col-md-3 singleSecteur"><?php print $fields['field_secteur_node']->content ?></div>
    <div class="col-md-3 singleRegion">
        <div class="col-md-6"><?php print $fields['field_image_r_gion']->content ?></div>
        <div class="col-md-6"><?php print $fields['field_entreprise_region']->content ?></div>
    </div>
    <div class="col-md-3 singleNacebel">
        <div class="col-md-4"><?php print $fields['field_code_nacebel']->content ?></div>
        <div class="col-md-7 col-md-offset-1"><?php print $fields['field_d_finition_de_code_nace_be']->content ?></div>
    </div>
</div>
<div class="col-md-12 singleCorps">
    <div class="col-md-5 photoMargin">
        <div class="col-md-11 photosSlider"><?php print $fields['field_photos_entreprise']->content ?></div>
    </div>
    <div class="col-md-7 singleCorps">
        <div class="col-md-12 singleDescription"><?php print $fields['body']->content ?></div>
        <div class="col-md-12 dirigeantsCoordonnees">
            <div class=" col-md-7 dirigeants">
                <div class="col-md-12 "><?php print $fields['field_actionnaire_entreprise']->content ?></div>
                <div class="col-md-12 "><?php print $fields['field_filiales_entreprise']->content ?></div>
                <div class="col-md-12 "><?php print $fields['field_dirigeants_de_l_entreprise']->content ?></div>
            </div>
            <div class="col-md-4 col-md-offset-1 coordonnees">
                <div class="col-md-8 col-md-offset-2 tva"><?php print $fields['field_entrnumerodetva']->content ?></div>
                <div class="col-md-8 col-md-offset-2 website"><?php print $fields['field_entrwebsite']->content ?></div>
                <div class="col-md-8 col-md-offset-2 adress"><?php print $fields['field_adresse']->content ?></div>
                <div class="col-md-8 col-md-offset-2 tel"><?php print $fields['field_tel']->content ?></div>
                <div class="col-md-8 col-md-offset-2 fax"><?php print $fields['field_entrfax']->content ?></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 donneeSocioEcon">
    <div class="nav col-md-12"></div>
    <div class="col-md-12 donnGraph"></div>
    <div class="col-md-12 tableau"></div>
    <div class="col-md-12 graph"></div>
</div>
