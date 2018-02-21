<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Models with Service Layer</title>
    </head>

    <body>
		<h1> Ini di modul backend HMVC, ini index</h1>
        <?= $posts ?>
        <?= $posts2 ?>   
         <?= $posts3 ?>  
          <?= $posts4 ?>         
        <?php $v29085820261iterated = false; ?><?php $v29085820261iterator = $dataa; $v29085820261incr = 0; $v29085820261loop = new stdClass(); $v29085820261loop->self = &$v29085820261loop; $v29085820261loop->length = count($v29085820261iterator); $v29085820261loop->index = 1; $v29085820261loop->index0 = 1; $v29085820261loop->revindex = $v29085820261loop->length; $v29085820261loop->revindex0 = $v29085820261loop->length - 1; ?><?php foreach ($v29085820261iterator as $datas) { ?><?php $v29085820261loop->first = ($v29085820261incr == 0); $v29085820261loop->index = $v29085820261incr + 1; $v29085820261loop->index0 = $v29085820261incr; $v29085820261loop->revindex = $v29085820261loop->length - $v29085820261incr; $v29085820261loop->revindex0 = $v29085820261loop->length - ($v29085820261incr + 1); $v29085820261loop->last = ($v29085820261incr == ($v29085820261loop->length - 1)); ?><?php $v29085820261iterated = true; ?>
        <?php if ($v29085820261loop->first) { ?>
        <table border=1 align="center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
        <?php } ?>
            <tbody>
                <tr>
                    <td><?= $datas->iduser ?></td>
                    <td><?= $datas->name ?></td>
                    <td><?= $datas->username ?></td>
                </tr>
            </tbody>
        <?php if ($v29085820261loop->last) { ?>
            </table>
        <?php } ?>
        <?php $v29085820261incr++; } if (!$v29085820261iterated) { ?>
            No Data
        <?php } ?>
    </body>
</html>