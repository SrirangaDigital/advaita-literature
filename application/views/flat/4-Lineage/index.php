<?php
$profileID = '0005';
?>
<script type="text/javascript">
$(document).ready(function(){

    $('#toggleScript').on('click', function(){

        $('#tree-container text').each(function(){

            var nameDevanagari = $(this).html();

            if($(this).hasClass('dev')) {

                nameRoman = titleCase(devanagari2iast(nameDevanagari));

                $(this).attr('data-dev', nameDevanagari);
                $(this).html(nameRoman);
                $(this).removeClass('dev');
                $(this).addClass('roman');
            }
            else if($(this).hasClass('roman')) {

                
                $(this).html($(this).attr('data-dev'));
                $(this).removeClass('roman');
                $(this).addClass('dev');
            }
        });
    });
});
</script>
<div class="container pt">
    <div class="row">
        <div class="col-md-12 main">
            <div class="name">
                <h1>गुरुशिष्यपरम्परा</h1>
            </div>
        </div>
    </div>
    <div class="row main">
        <div class="col-md-12">
            <p class="text-right"><a id="toggleScript">Toggle script (Devanagari / Roman)</a></p>
        </div>
    </div>
    <div class="row main">
        <div class="col-md-12" id="tree-container">
        </div>
    </div>
    <div class="row main">
        <div class="col-md-12">
        	<p><i class="fa fa-circle blue"></i> अद्वैताचार्याः &nbsp;&nbsp;&nbsp; <i class="fa fa-circle green"></i> अद्वैतग्रन्थकर्ताः &nbsp;&nbsp;&nbsp; <i class="fa fa-circle"></i> Details Unavailable</p>
        	
        	<p>Panning can either be done by dragging an empty part of the graph around or dragging a node towards an edge.
        	<p>Zooming is performed by either double clicking on an empty part of the graph or by scrolling the mouse-wheel. To Zoom out hold shift when double-clicking.</p>
        </div>
    </div>
</div>


<script type="text/javascript">
    var fileName = "<?=PUBLIC_URL?>profiles/index.json?v=1.1";
    var BASE_URL = '<?=BASE_URL?>';
</script>

<script src="https://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/dndTree.js?v=1.1"></script>
