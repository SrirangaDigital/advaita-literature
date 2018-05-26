<script type="text/javascript">
$(document).ready(function(){

    var name = $('#name').html();
    name = name + ' <small>(' + titleCase(devanagari2iast(name)) + ')</small>';
    $('#name').html(name);
});
</script>
<div id="grid" class="container pt-5">
    <div class="row">
        <div class="col-md-12 main">
            <div class="name">
                <h1 id="name"><?=$data->name?></h1>
                <h5><?=(isset($data->period)) ? $data->period : ''?></h5>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-6 main">
            <div class="lineage">
                <p class="type">गुरुशिष्यपरम्परा</p>
                <!-- lineage -->
            </div>
            <div class="bio">
                <p class="type">परिचयः</p>
                <?=$data->bio?>
            </div>
        </div>
        <div class="col-md-5 main">
<?php if(isset($data->works)) { ?>
            <div class="works">
                <p class="type">कृतयः</p>
                <ul class="list-unstyled">
<?php   foreach ($data->works as $work) { ?>
                    <li>
                        <p class="title"><?=$work->title?></p>
                        <?=(isset($work->source)) ? '<p class="source">' . $work->source . '</p>' : ''?>
                        <?=(isset($work->remarks)) ? '<div class="remarks">' . $work->remarks . '</div>' : ''?>
                    </li>
<?php   } ?>
                </ul>
            </div>
<?php } ?>
        </div>        
    </div>
</div>
