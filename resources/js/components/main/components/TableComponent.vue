<template>
        <!-- Data list -->
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Recent orders</h2>
            <a href="#" class="btn">View all</a>
          </div>
          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Payment</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Star refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Star refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status pending">Pending</span></td>
              </tr>
              <tr>
                <td>Star refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status return">Return</span></td>
              </tr>
              <tr>
                <td>Star refrigerator</td>
                <td>$1200</td>
                <td>Paid</td>
                <td><span class="status inProgress">In Progress</span></td>
              </tr>
            </tbody>
          </table>
        </div>
</template>

<script>
export default {
  name: 'Table'
}
</script>

