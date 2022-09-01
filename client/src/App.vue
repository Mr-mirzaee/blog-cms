<template>
  <div id="app">
    <!-- route outlet -->
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>
  .spinner {
    height: 50px;
    width: 50px;
    background: rgba(0, 0, 0, .2);
    border-radius: 50%;
  }
  .loading-spinner {
    border: 2px solid rgba(0, 0, 0, 0.4);
    animation: spinner5 800ms linear infinite;
  }
  @keyframes spinner5 {
    0% {
      border-radius: 50%;
      transform: rotate(0);
    }
    50% {
      transform: rotate(180deg);
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }
    100% {
      border-radius: 50%;
      transform: rotate(360deg);
    }
  }
</style>
