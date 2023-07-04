<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Listado de alumnos</title>
</head>
<body>   

    
    <div class="row">
        <div class="col-md-2"> </div>
            <div class="col-md-8">
                <h1>Listado de alumnos</h1>

                <div class = "table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $lstAlumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($alumno->id); ?></td>
                                    <td><?php echo e($alumno->nombre); ?></td>
                                    <td><?php echo e($alumno->apelido); ?></td>
                                    <td><?php echo e($alumno->correo); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

            </div>
        
        
    </div>

    
</body>
</html><?php /**PATH C:\wamp64\www\matricula\resources\views/alumnos.blade.php ENDPATH**/ ?>