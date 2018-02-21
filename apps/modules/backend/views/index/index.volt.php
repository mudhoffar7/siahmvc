<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Models with Service Layer</title>
    </head>

    <body>
		<h1> Ini di modul backend HMVC + RSP, ini index</h1>
        <?= $posts ?>
        <?= $posts2 ?>   
         <?= $posts3 ?>  
          <?= $posts4 ?>         
        <?php $v31677284671iterated = false; ?><?php $v31677284671iterator = $dataa; $v31677284671incr = 0; $v31677284671loop = new stdClass(); $v31677284671loop->self = &$v31677284671loop; $v31677284671loop->length = count($v31677284671iterator); $v31677284671loop->index = 1; $v31677284671loop->index0 = 1; $v31677284671loop->revindex = $v31677284671loop->length; $v31677284671loop->revindex0 = $v31677284671loop->length - 1; ?><?php foreach ($v31677284671iterator as $datas) { ?><?php $v31677284671loop->first = ($v31677284671incr == 0); $v31677284671loop->index = $v31677284671incr + 1; $v31677284671loop->index0 = $v31677284671incr; $v31677284671loop->revindex = $v31677284671loop->length - $v31677284671incr; $v31677284671loop->revindex0 = $v31677284671loop->length - ($v31677284671incr + 1); $v31677284671loop->last = ($v31677284671incr == ($v31677284671loop->length - 1)); ?><?php $v31677284671iterated = true; ?>
        <?php if ($v31677284671loop->first) { ?>
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
        <?php if ($v31677284671loop->last) { ?>
            </table>
        <?php } ?>
        <?php $v31677284671incr++; } if (!$v31677284671iterated) { ?>
            No Data
        <?php } ?>
    </body>
</html>