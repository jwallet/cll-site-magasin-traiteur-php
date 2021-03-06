<?php
$stmt = $mysqli->prepare("SELECT textarea FROM pages WHERE categorie LIKE 'faq';");
$stmt->execute();
$stmt->bind_result($tarea);
$stmt->fetch();

$divider = explode("###", $tarea);

$stmt->free_result();
$stmt->close();

$questions = array();
$reponses = array();

for($i=1;$i<sizeof($divider);$i+=2){
    $questions[] = $divider[$i];
    $reponses[] = $divider[$i+1];
}

?>
<ul class="collapsible" data-collapsible="accordion">
    <?php for($j=0;$j<sizeof($questions);$j++){ ?>
    <li>
            <div class="collapsible-header" style="padding:0.5rem 0rem">
                <div class="container">
                    <span class="section">
                        <?php echo $questions[$j]; ?>
                        <span class="secondary-content <?php echo $_GLOBAL['couleur1a'] ?>-text">
                            <i class="material-icons">keyboard_arrow_down</i>
                        </span>
                    </span>
                </div>
            </div>
            <div class="collapsible-body grey lighten-3" style="padding:0;padding-top:1px;">
                <div class="container">
                    <div class="section">
                        <?php echo $reponses[$j]; ?>
                    </div>
                </div>
            </div>
    </li>
    <?php } ?>
</ul>

<script type="text/javascript">
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });
</script>