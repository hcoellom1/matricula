<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Crear Alumno</title>
</head>
<body>

    <div class="row">

        <div class="col-md-2"> </div>
            <div class="col-md-8">
                <h2>Crear Alumno</h2>

                <form method="POST", action='<?php echo e(route('alumno.guardar')); ?>' class="form">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" id="nombre" name="nombre"/>
            
                    </div>
                    
                    <div class="mb-3">
                    <label>Apellido</label>
                        <input type="text" id="apellido" name="apellido">
            
                    </div>
            
                    <div class="mb-3">
                        <label>Correo</label>
                        <input type="email" id="correo" name="correo" />
                    </div>
            
                    <div class="mb-3">
                        <label>Edad</label>
                        <input type="text" id="edad" name="edad"/>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>

            </div>

        
        
    </div>

    

</body>
</html><?php /**PATH C:\wamp64\www\matricula\resources\views/crearAlumno.blade.php ENDPATH**/ ?>