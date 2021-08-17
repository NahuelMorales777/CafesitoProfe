<?php

class Pedido
{
    private $id_pedido;
    private $cliente;
    private $fecha;
    private $id_vendedor;
    private $monto_total;

    public function __construct($id_pedido,  $cliente,  $fecha,  $id_vendedor,  $monto_total)
    {
        $this->id_pedido = $id_pedido;
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->id_vendedor = $id_vendedor;
        $this->monto_total = $monto_total;
    }

    public function calcularMonto()
    {
        
    }

    public static function cargarPedidos($db)
    {
        $resultado = $db->query("SELECT * FROM pedido");

        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $id_pedido = $row['id_pedido'];
            $cliente = $row['cliente'];
            $fecha = $row['fecha'];
            $id_vendedor = $row['id_vendedor'];

            echo " <div class='ver__container'>";
            echo "<table>";
                echo "<thead>";
                echo    " <tr>";
                echo         "<th>Id pedido</th>";
                echo         "<th>Cliente</th>";
                echo        " <th>Fecha</th>";
                echo         "<th>Id vendedor</th>";
                echo    " </tr>";
                echo " </thead>";

                echo "<tbody>";
                echo    " <tr>";
                echo        " <td>$id_pedido</td>";
                echo        " <td>$cliente</td>";
                echo        " <td>$fecha</td>";
                echo         "<td>$id_vendedor</td>";
                echo     "</tr>";
                echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
    }

    public static function cargarPedidosFecha($desde, $hasta, $db)
    {
        $entro = false;
        $resultado = $db->query("SELECT * FROM pedido WHERE fecha BETWEEN '$desde' AND '$hasta' ");

        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $entro = true;
            $id_pedido = $row['id_pedido'];
            $cliente = $row['cliente'];
            $fecha = $row['fecha'];
            $id_vendedor = $row['id_vendedor'];

            echo " <div class='ver__container'>";
            echo "<table>";
                echo "<thead>";
                echo    " <tr>";
                echo         "<th>Id pedido</th>";
                echo         "<th>Cliente</th>";
                echo        " <th>Fecha</th>";
                echo         "<th>Id vendedor</th>";
                echo    " </tr>";
                echo " </thead>";

                echo "<tbody>";
                echo    " <tr>";
                echo        " <td>$id_pedido</td>";
                echo        " <td>$cliente</td>";
                echo        " <td>$fecha</td>";
                echo         "<td>$id_vendedor</td>";
                echo     "</tr>";
                echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }

        if(!$entro) {
            echo "<h2>No se han encontrado datos</h2>";
        }
    }


    public static function create($pedido, $db)
    {
        try {
            // Obtengo los datos
            $id_pedido = '';
            $producto = $pedido['producto'];
            $precio_unitario = $pedido['precio'];
            $cantidad = $pedido['cantidad'];
            $nombre = $pedido['nombre'];
            $apellido = $pedido['apellido'];
            $id_vendedor = $pedido['vendedor'];
            $cliente = $nombre . " " . $apellido;

            date_default_timezone_set("America/Montevideo");
            $fecha = date('Y-m-d');

            // Monto total
            $monto_total = $precio_unitario * $cantidad;

            // Inserto en pedido
            $stmt = $db->prepare("INSERT INTO pedido (cliente, fecha, id_vendedor, monto_total) VALUES ('$cliente', '$fecha', $id_vendedor, $monto_total)");
            $stmt->execute();


            // Selecciono el id del pedido
            $resultado = $db->query("SELECT id_pedido FROM pedido ORDER BY id_pedido DESC LIMIT 1");
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $id_pedido = $row['id_pedido'];
            }

            // Inserto en detalle pedido
            $stmt = $db->prepare("INSERT INTO detalle_pedido (id_pedido, producto, cantidad, precio_unitario) VALUES ( $id_pedido, '$producto', $cantidad, $precio_unitario)");
            $stmt->execute();

            header('Location: ../index.php?success=true');
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function cantidadVentas($id_vendedor, $db)
    {

        // Selecciono la cantiadd de pedidos que tiene determinado vendedor
        $resultado = $db->query("SELECT count(id_pedido) as cantidad FROM pedido WHERE id_vendedor = $id_vendedor");

        // Recorro los resultados y retorno la canttidad
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            return $row['cantidad'];
        }
    }

    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getIdVendedor()
    {
        return $this->id_vendedor;
    }

    public function getMontoTotal()
    {
        return $this->monto_total;
    }
}
