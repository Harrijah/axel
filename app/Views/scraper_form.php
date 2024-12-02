<!DOCTYPE html>
<html>
<head>
    <title>Scraper de sites web</title>
</head>
<body>
    <h1>Téléverser un fichier Excel</h1>
    <form action="<?php echo base_url('scraper/process'); ?>" method="post" enctype="multipart/form-data">
        <label for="excel_file">Sélectionner un fichier Excel :</label>
        <input type="file" name="excel_file" id="excel_file" accept=".xlsx" required>
        <button type="submit">Lancer le scraping</button>
    </form>
</body>
</html>
