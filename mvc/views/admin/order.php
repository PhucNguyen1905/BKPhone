<?php
$title = 'Order List';
$activeNav = 'order';
require_once('mvc/views/blocks/admin_header.php');
?>

<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">720</h3>
                    <p class="fs-5">Products</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">4920</h3>
                    <p class="fs-5">Sales</p>
                </div>
                <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3899</h3>
                    <p class="fs-5">Delivery</p>
                </div>
                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%25</h3>
                    <p class="fs-5">Increase</p>
                </div>
                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Orders</h3>
        <div class="col">
            <table id="orderList" class="table bg-white rounded shadow-sm  table-hover">
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
    </div>

</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#orderList').DataTable();
    });
</script>
<script src="public/js/admin_index.js"></script>
</body>

</html>