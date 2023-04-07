<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/css/dashboard.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <main>
        <section class="flex flexCollumn">
            <h2>Ajouter un article</h2>
            <form  class="flex flexCollumn" action="./traitement.php" method="post" enctype="multipart/form-data">
                <label for="fType">Type</label>
                <select name="fishingType" id="fType">
                    <option value="coup">Pêche au Coup</option>
                    <option value="anglaise">Pêche à l'Anglaise</option>
                    <option value="carnassier">Pêche au Carnassier</option>
                    <option value="carpe">Pêche à la Carpe</option>
                    <option value="surfcasting">Pêche au Surfcasting</option>
                </select>
                <label for="desc">Description</label>
                <textarea name="fishingDescription" id="desc" rows="10"></textarea>
                <label for="img">Image</label>
                <input type="url" name="techPicture" id="img">
                <label for="vid">Video</label>
                <input type="url" name="techVideo" id="vid">
                <label for="materiel">Matériel utilisé</label>
                <select name="fishingMaterial" id="materiel">
                    <option value="ce">Canne à emmenchement</option>
                    <option value="ll">Lancer Léger</option>
                    <option value="llo">Lancer Lourd</option>
                    <option value="ca">Canne Anglaise</option>
                    <option value="csc">Canne Surfcasting</option>
                </select>
                <label for="appats">Type d'appats</label>
                <select name="fishingBaits" id="appats">
                    <option value="asticot">Asticots</option>
                    <option value="bouillette">Bouillettes</option>
                    <option value="leurre">Leurres</option>
                    <option value="verssable">Vers de sable</option>
                </select>
                <input type="submit" name="add" value="Enregistrer">
            </form>
        </section>
        <section class="flex flexCollumn">
            <h2>Supprimer un article</h2>
            <form class="flex flexCollumn" action="./traitement" method="post">
                <label for="article">Sélectionner l'article</label>
                <select name="articles" id="article"></select>
                <input type="submit" name="suppr" value="Supprimer">
            </form>
        </section>
    </main>
</body>
</html>