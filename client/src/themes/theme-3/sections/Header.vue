<template>
  <header class="relative z-50 w-full h-24">
    <div class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto md:justify-between xl:px-0">
      <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
        <img src="../assets/images/logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="quera">
      </a>

      <nav id="nav" class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full border-solid py-4 mt-20 text-sm text-gray-800 bg-white border-t border-b border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
        <a href="/" class="ml-0 mr-0 font-bold duration-10 transition-color hover:text-indigo-600"> خانه </a>
      </nav>

      <div id="nav-mobile-btn" class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
        <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
        <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'Header',
  props: {

  },
  mounted() {
    if (document.getElementById('nav-mobile-btn')) {
      document.getElementById('nav-mobile-btn').addEventListener('click', function () {
        if (this.classList.contains('close')) {
          document.getElementById('nav').classList.add('hidden');
          this.classList.remove('close');
        } else {
          document.getElementById('nav').classList.remove('hidden');
          this.classList.add('close');
        }
      });
    }
  }
}
</script>

<style scoped>
  #nav-mobile-btn.close span:first-child {
    transform: rotate(45deg);
    top: 4px;
    position: relative;
    background: #a0aec0;
  }

  #nav-mobile-btn.close span:nth-child(2) {
    transform: rotate(-45deg);
    margin-top: 0px;
    background: #a0aec0;
  }
</style>
