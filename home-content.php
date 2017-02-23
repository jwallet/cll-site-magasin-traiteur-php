<nav class="deep-orange accent-2">
    <div class="nav-wrapper deep-orange accent-2 container">
        <a href="#" class="brand-logo left boite-bouf">Boîte à Bouf</a>
        <ul id="nav-mobile" class="right">
            <li><a href="sass.html"><i class="material-icons">person</i></a></li>
        </ul>
    </div>
</nav>
<div class="slider">
    <ul class="slides">
        <li>
            <img src="http://static.harmony.groupetva.ca/media/static/filemanager/content/1444104000/poulet-general-tao_1444157247.jpg"> <!-- random image -->
            <div class="caption center-align">
                <h3>Poulet</h3>
                <h5 class="light grey-text text-lighten-3">Poulet General Tao</h5>
            </div>
        </li>
        <li>
            <img src="http://nomadjunkies.com/wp-content/uploads/2017/01/Photo-01_Fotor-1900x700_c.jpg"> <!-- random image -->
            <div class="caption left-align">
                <h3>Semaine 2</h3>
                <h5 class="light grey-text text-lighten-3">Poutine cambogienne</h5>
            </div>
        </li>
        <li>
            <img src="http://maigrirsansfaim.net/wp-content/uploads/2015/03/patechinoischeval.png"> <!-- random image -->
            <div class="caption right-align">
                <h3>Menu semaine 3</h3>
                <h5 class="light grey-text text-lighten-3">Pate chinois</h5>
            </div>
        </li>
        <li>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Cuisse_da_canard_confit_et_pommes_de_terre_%C3%A0_la_sarladaise.JPG/1200px-Cuisse_da_canard_confit_et_pommes_de_terre_%C3%A0_la_sarladaise.JPG"> <!-- random image -->
            <div class="caption center-align">
                <h3>Canard</h3>
                <h5 class="light grey-text text-lighten-3">Confit aux patates douces et fromage</h5>
            </div>
        </li>
    </ul>
</div>
<br /><br />

<!-- valider si le client est connecter dans la page de connexion sinon le logger et ensuite aller a bonne page de shop-->
<div class='container'><div class="s12"><a style="width: 100%;" class="waves-effect waves-light btn-large deep-orange accent-2" href='shop.php'>Commander</a></div></div>
<br/>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slider({
            height:400,
            interval:6000
        });
    });
</script>