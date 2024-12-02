<!DOCTYPE html>
<html>
<head>
    <title>Scraper de sites web</title>
</head>
<body>
    <h1>Téléverser un fichier Excel</h1>
    <form action="<?= base_url('scraper/process') ?>" method="post" enctype="multipart/form-data">
        <label for="excel_file">Choisissez un fichier Excel :</label>
        <input type="file" name="excel_file" id="excel_file" accept=".xlsx" required />
        <button type="submit">Téléverser</button>
    </form>

</body>
</html>
