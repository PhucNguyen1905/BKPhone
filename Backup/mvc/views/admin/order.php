<?php
$title = 'Order List';
$activeNav = 'order';
require_once('mvc/views/blocks/admin_header.php');
?>


<!-- MAIN SECTION -->
<main>
    <h1>Order</h1>
    <div class="analystic">
        <!-- Total SECTION -->
        <div class="total">
            <span class="material-icons-sharp">analytics</span>
            <div class="type">
                <h2>Total</h2>
            </div>
            <div class="number">
                <h1>1200 orders</h1>
            </div>
        </div>
        <!-- END Total SECTION -->
        <!-- Shipping SECTION -->
        <div class="shipping">
            <span class="material-icons-sharp">local_shipping</span>

            <div class="type">
                <h2>Shipping</h2>
            </div>
            <div class="number">
                <h1>900 orders</h1>
            </div>
        </div>
        <!-- END Total SECTION -->
        <!-- Total SECTION -->
        <div class="unprocess">
            <span class="material-icons-sharp" style="color: yellow;">running_with_errors</span>
            <div class="type">
                <h2>Unprocessed</h2>
            </div>
            <div class="number">
                <h1>300 orders</h1>
            </div>
        </div>
        <!-- END Total SECTION -->
    </div>

    <!-- RECENT ORDERS -->
    <div class="tablelist">
        <h2>Recent Orders</h2>
        <table id="orderList" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>22/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>12/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>02/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nguyen Van D</td>
                    <td>123 BK Street</td>
                    <td>02/02/2022</td>
                    <td class="warning">Shipping</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>01/02/2022</td>
                    <td class="success">Completed</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>22/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>12/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>02/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Nguyen Van D</td>
                    <td>123 BK Street</td>
                    <td>02/02/2022</td>
                    <td class="warning">Shipping</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>01/02/2022</td>
                    <td class="success">Completed</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>22/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>12/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Nguyen Van A</td>
                    <td>123 BK Street</td>
                    <td>02/03/2022</td>
                    <td class="danger">Waiting</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Nguyen Van D</td>
                    <td>123 BK Street</td>
                    <td>02/02/2022</td>
                    <td class="warning">Shipping</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Nguyen Van B</td>
                    <td>123 BK Street</td>
                    <td>01/02/2022</td>
                    <td class="success">Completed</td>
                    <td class="primary">Details</td>
                </tr>

            </tbody>
        </table>
    </div>
</main>

<div class="top">
    <button id="menu-btn">
        <span class="material-icons-sharp">menu</span>
    </button>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#orderList').DataTable();
    });
</script>
<script src="public/js/index.js"></script>
</body>

</html>