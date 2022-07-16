<!DOCTYPE html>
 
 <html>
    <body>
        <ul>
            <?php foreach ($results as $result) : ?>
                <li>
                    <?= $result->Username . '' . $result->Date ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
 </html> 
 
 