<template>
 <div class="cards-title">
      <h3>Info Box</h3>
    </div>
  <div class="wrapper-cards">
       <div class="widgets-card-main">
        <div class="widgets-icon">
          <ion-icon name="mail-outline"></ion-icon>
        </div>
        <div>
        <div class="widgets-numbers">1,504</div>
        <div class="widgets-title">Daily views</div>
      </div>
    </div>
    <div class="widgets-card-success">
      <div class="widgets-icon widgets-icon-success">
        <ion-icon name="checkmark-done-outline"></ion-icon>
      </div>
      <div>
        <div class="widgets-numbers">80</div>
        <div class="widgets-title">Sales</div>
      </div>

    </div>
    <div class="widgets-card-prevention">
      <div class="widgets-icon widgets-icon-prevention">
        <ion-icon name="chatbubbles-outline"></ion-icon>
      </div>
      <div>
        <div class="widgets-numbers">234</div>
        <div class="widgets-title">Comments</div>
      </div>
    </div>
    <div class="widgets-card-danger">
      <div class="widgets-icon widgets-icon-danger">
        <ion-icon name="alert-circle-outline"></ion-icon>
      </div>
      <div>
        <div class="widgets-numbers">10</div>
        <div class="widgets-title">Warnings</div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "WidgetsCards",
};
</script>
