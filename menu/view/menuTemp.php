<?php
 $_language = "EN";
$minimum_range = 100;
$maximum_range = 2000;
echo APP_PATH;
echo '<br>';
?>


<div class="container">
    <br />
    <br />
    <br />
    <h3 align="center">Make Price Range Slider using JQuery with PHP Ajax</a></h3><br />
    <br />
    <div class="row">
        <div class="col-md-2">
            <input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
        </div>
        <div class="col-md-8" style="padding-top:12px">
            <div id="price_range"></div>
        </div>
        <div class="col-md-2">
            <label>
            <input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
        </div>
    </div>
    <br />
    <div id="load_product"></div>
    <br >
    <?php include 'productpagination.php';  ?>
</div>

<script>
    $(document).ready(function(){

        $( "#price_range" ).slider({
            range: true,
            min: 100,
            max: 2000,
            values: [ <?php echo $minimum_range; ?>, <?php echo $maximum_range; ?> ],
            slide:function(event, ui){
                $("#minimum_range").val(ui.values[0]);
                $("#maximum_range").val(ui.values[1]);
                load_product(ui.values[0], ui.values[1]);
            }
        });

        load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);

        function load_product(minimum_range, maximum_range)
        {
            $.ajax({
                url:"http://test.parisine.com/EN/menu/productpagination",
                method:"POST",
                data:{minimum_range:minimum_range, maximum_range:maximum_range},
                success:function(data)
                {
                    $('#load_product').fadeIn('slow').html(data);
                }
            });
        }

    });
</script>