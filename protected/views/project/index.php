<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>

<?php header("Access-Control-Allow-Origin: *"); ?>


<?php
$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php //$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); ?>



<!--Maybe i can simply have a remote call to controller that
updates the status of current divs, every time there is any button press

Also, it should look up this info to recreate the
hiearchy


we need to keep this

text based input

and no special MVC

so that in future we can do all this by clicking on a tag specific to
mybunsiness.notetub.com

so,, this way we can advettise and spread this across the world

by using a simple command as

#ava make a business structure


-->

<!--

how to contact and get partners to agree to you
without showing face

- show support from users
- show great growth , using simulations and show that peopel are paying attentions to
it

-->

<script>

    function show() {

        $(".level-2").hide();
        $(".level-3").hide();

        var spinner = $( "#spinner" ).spinner();



    }


    function show2() {

        $(".level-2").show();
        $(".level-3").show();



    }

    function show3() {


    }

</script>

<div class="level-1">
    <div id="lev-1">
        Level 1 contents
        <div class="level-2">
            <div id="lev-2-1">
                Level 2-1 contents
                <div class="level-3">
                    <div id="lev-3-1">
                        Level 3 - 1 contents
                    </div>
                    <div id="lev-3-2">
                        Level 3 - 2  contents
                    </div>
                </div>
            </div>
            <div id="lev-2-2">
                Level 2-2 contents
            </div>
            <div id="lev-2-3">
                Level 2-3 contents
            </div>
        </div>
    </div>
</div>

<p>
    <label for="spinner">Select a value:</label>
    <input id="spinner" name="value">
</p>



<button type="button" class="showButton" id="showbutton1" onclick="show()">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->
    show this level
    <!--    </a>-->
</button>


<button type="button" class="showButton" id="showbutton2" onclick="show2()">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->
    Show previous levels
    <!--    </a>-->
</button>


<button type="button" class="showButton" id="showbutton3" onclick="show3()">
    <!--    <a class="example_e" href="add-website-here" target="_blank" rel="nofollow noopener">-->
    Show next level
    <!--    </a>-->
</button>




<div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
</div>
