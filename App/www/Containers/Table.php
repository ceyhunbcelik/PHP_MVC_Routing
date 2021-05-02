<table>
    <tr>
        <th><i class="fas fa-map"></i></th>
        <th>Yerleşim Yeri</th>
        <th>Mesafe</th>
    </tr>
    <?php foreach ($distances as $distance): ?>
        <tr>
            <td><a href="<?= '?lat=' . $distance['centerLat']  . '&lon=' . $distance['centerLon'] ?>"><i class="fas fa-map-marker-alt"></i></a></td>
            <td><?= $distance['county'] ?></td>
            <td><?= $distance['distance'] ?></td>
        </tr>
    <?php endforeach ?>
</table>