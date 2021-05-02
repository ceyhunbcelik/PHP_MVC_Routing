<p class='title city'>İL</p>
<select id="city">
    <option value="">-- İl Seçiniz --</option>
    <?php foreach ($cities as $city): ?>
        <?php if ($city['city'] == $city['county']): ?>
            <option value="<?= $city['city'] ?>"><?= $city['city'] ?></option>
        <?php endif ?>
    <?php endforeach ?>
</select>

<p class='title county'>İLÇE</p>
<select id="county"></select>

<script src="<?= js('county') ?>"></script>