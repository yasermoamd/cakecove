<link>
    <link rel="stylesheet" href="../templates/css/notification.css">
</link>

<?php

require_once '../service/connect.php';

function deliveryProduct() {
    global $conn;

    if (isset($_POST['name'], $_POST['email'], $_POST['address'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

            $deleteQuery = "DELETE FROM cart";
            if (mysqli_query($conn, $deleteQuery)) {
                renderCart();
            } else {
                echo "Error deleting product: " . mysqli_error($conn);
            }

        echo '
            <div id="confirmation-message" class="popup-message">
                <span class="close" onclick="closeConfirmation()">&times;</span>
                <div class="popup-message-content">
                    <p>
                    <span>
                        <span>
                            <h1><img src="../templates/img/done.png" height="30" width="30" id="done-img">Thanks for your order, ' . $name . '</h1>
                        </span>

                        <span>
                            <h3>Your order will be delivered to <i><b>' . $address . ' </i></b></h3>
                            <h4>Also, we will send the notification to <a href="#">' . $email . '</a></h4>
                        </span>

                    </span>
                    </p>
                </div>
            </div>

        <script src="../components/notification.js"></script>

        <script>
            setTimeout(function() { window.location.href = "../../../index.php"; }, 8000);
        </script>';

    } else {
        echo "Incomplete delivery information provided.";
    }
}