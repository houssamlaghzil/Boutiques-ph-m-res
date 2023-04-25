<?php
/**
 * Boutiques éphémères
 **/
?>
<head>
    <meta charset="UTF-8">
    <title>compte</title>
    <link rel="stylesheet" href="../CSS/account.css">
    <link rel="stylesheet" href="../CSS/table.css">
    <link rel="stylesheet" href="../import/css/CSS.css">
</head>
<body>

<?php
include('header.html');
?>

<script>
    const style = (node, styles) => Object.keys(styles).forEach(key => node.style[key] = styles[key])
    function colordefaut(){
        var elementtocolor = document.getElementsByClassName("th-col");
        //retirer la couleur bleu de tous les elements de la table qui ont la classe th-col
        for (var i = 0; i < elementtocolor.length; i++) {
            elementtocolor[i].style.background = "#1c87c9";
        }
    }

    function filtertable(idelement){
        colordefaut();
        var elementtocolor = document.getElementById(idelement);
        elementtocolor.style.background = "#125b88"
    }
</script>
<section>

    <div class="title-div-account">
        <h2 class="title">Bonjour {Nom d'utilisateur}</h2>
        <a href="" class="link-account">modifier mes information</a>
    </div>

    <h1 class="title">Vos boutiques publiées</h1>

    <div class="allshop">
        <table class="table-element">
            <thead class="thead-element">
            <tr class="tr-col">
                <th class="th-col" onclick="filtertable('name')" id="name" scope="col">Nom</th>
                <th class="th-col" onclick="filtertable('city')" id="city" scope="col">Ville</th>
                <th class="th-col" onclick="filtertable('pubdate')" id="pubdate" scope="col">Date de publication</th>
                <th class="th-col" onclick="filtertable('resdate')" id="resdate" scope="col">Date de fin</th>
                <th class="th-col" onclick="filtertable('stat')" id="stat" scope="col">Etat de publication</th>
                <th class="th-col" onclick="filtertable('action')" id="action" scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            <tr class="tr-row">
                <th class="th-row" scope="row">Buzzcocks</th>
                <td class="td-row">paris</td>
                <td class="td-row">9/04/2023</td>
                <td class="td-row">15/03/2024</td>
                <td class="td-row">publié</td>
                <td class="td-row">
                    <a href="addshop.php"><input type="submit" name="" value="modifier" class="btn btn-color"></a>
                </td>
            </tr>
            <tr class="tr-row">
                <th class="th-row" scope="row">Buzzcocks</th>
                <td class="td-row">paris</td>
                <td class="td-row">9/04/2023</td>
                <td class="td-row">15/03/2024</td>
                <td class="td-row">publié</td>
                <td class="td-row">
                    <input type="submit" name="" value="modifier" class="btn btn-color">
                </td>
            </tr>

            <tr class="tr-row">
                <th class="th-row" scope="row">Buzzcocks</th>
                <td class="td-row">paris</td>
                <td class="td-row">9/04/2023</td>
                <td class="td-row">15/03/2024</td>
                <td class="td-row">publié</td>
                <td class="td-row">
                    <input type="submit" name="" value="modifier" class="btn btn-color">
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</section>
</body>
<?php
include('footer.html');
?>
