<?php
$php_version = phpversion();
$server = $_SERVER['SERVER_SOFTWARE'];
$server_name = $_SERVER['SERVER_NAME'];
$server_port = $_SERVER['SERVER_PORT'];
$document_root = $_SERVER['DOCUMENT_ROOT'];
$os = php_uname();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entorno PHP funcionando</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #0f4c81;
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
            position: relative;

            h1 {
                color: white;
                text-align: center;
                margin: auto 15px;
            }
        }

        .info {
            margin-top: 20px;
            padding: 15px;
            background: #eef3f7;
            border-left: 5px solid #3498db;
        }

        .item-value {
            font-size: 1rem;
            color: #1e293b;
            font-weight: 500;
            word-break: break-all;
        }

        p {
            font-size: 19px;
        }

        .info-text {
            color: #0f4c81;
            font-size: 1rem;
            text-align: justify;
            margin: 10px;
        }


        strong {
            color: #34495e;
        }

        .footer {
            padding: 1.5rem 2rem;
            background-color: #f8fafc;
            border-top: 1px solid e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-text {
            display: flex;
            flex-direction: column;
        }

        .footer-name {
            font-weight: 600;
            color: #0f4c81;
            font-size: 0.95rem;
        }

        .footer-role {
            font-size: 0.85rem;
            color: #64748b;
        }

        .badge {
            background-color: white;
            border: 1px solid #e2e8f0;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>
</head>

<body>

    <div class="container">
        <header class="header">
            <h1>Entorno de Desarrollo PHP Configurado</h1>
        </header>

        <h3 class="info-text">
            Esta página fue desarrollada como prueba de funcionamiento
            del entorno local utilizando XAMPP, Apache y PHP en Ubuntu Linux.
        </h3>

        <div class="info">
            <p><strong>Versión de PHP: </strong><span class="item-value"> <?php echo $php_version; ?></span></p>
            <p><strong>Servidor Web: </strong><span class="item-value"> <?php echo $server; ?></span></p>
            <p><strong>Nombre del Servidor: </strong><span class="item-value"><?php echo $server_name; ?></span></p>
            <p><strong>Puerto: </strong><span class="item-value"><?php echo $server_port; ?></span></p>
            <p><strong>Directorio Raíz: </strong><span class="item-value"><?php echo $document_root; ?></span></p>
            <p><strong>Sistema Operativo: </strong><span class="item-value"><?php echo $os; ?></span>
            <p>
        </div>


        <footer class="footer">
            <div class="footer-text">
                <span class="footer-name">Florencia Adaro</span>
                <span class="footer-role">Capacitación en Desarrollo de Software Hospitalario</span>
            </div>
            <div class="badge">
                Hospital Universitario
            </div>
        </footer>

    </div>

</body>

</html>