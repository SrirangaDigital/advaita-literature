<?php
$profileID = '0005';
?>
<div class="container pt">
    <div class="row">
        <div class="col-md-12 main">
            <div class="name">
                <h1>गुरुशिष्यपरम्परा</h1>
            </div>
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
    var fileName = "<?=PUBLIC_URL?>profiles/index.json?v=1.0";
    var BASE_URL = '<?=BASE_URL?>';
</script>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/dndTree.js"></script>
