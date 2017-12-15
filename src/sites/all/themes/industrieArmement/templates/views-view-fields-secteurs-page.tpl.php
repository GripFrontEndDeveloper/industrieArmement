print '<pre>' . htmlentities(print_r($fields, 1)) . '</pre>'
<div class="col-md-12">
    <div class="col-md-8">
        <div class="col-md-5">
            <div class="col-md-10">
                <?php print $field['field_image_secteur']->content;?>
            </div>
        </div>
        <div class="col-md-7">
            <div class="col-md-12">
                <?php print $field['title']->content;?>
                [title]
            </div>
            <div class="col-md-12">
                <?php print $field['field_corps_texte_secteur']->content;?>
                [title]
            </div>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">

    </div>
</div>
