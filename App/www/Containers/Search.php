<form method='GET'>
    <input type="search" name="lat" placeholder="Enlem" value="<?= isset($_GET['lat']) ? $_GET['lat'] : '' ?>">
    <input type="search" name="lon" placeholder="Boylam" value="<?= isset($_GET['lon']) ? $_GET['lon'] : '' ?>"">
    <button>Ara</button>
</form>