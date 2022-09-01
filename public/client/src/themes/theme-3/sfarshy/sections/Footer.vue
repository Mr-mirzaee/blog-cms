<template>
  <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
    <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
      <div class="block w-full mt-6 text-sm lg:w-3/3 sm:flex lg:mt-0">
        <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none text-center">
          <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
            دسته‌بندی بلاگ
          </li>
          <li v-for="category in categories" v-bind:key="category.id" class="py-3">
            <a class="text-gray-600 hover:text-gray-800"> {{ category.name }} </a>
          </li>
        </ul>
        <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none text-center">
          <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
            کوئرا
          </li>
          <li class="text-gray-600 hover:text-gray-800 py-3">
            <a href="https://quera.ir/college" target="_blank"> کالج </a>
          </li>
          <li class="text-gray-600 hover:text-gray-800 py-3">
            <a href="https://quera.ir/careers/jobs" target="_blank"> مگنت </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="pt-4 pt-6 mt-10 text-center text-gray-400 border-t border-gray-100">
      تمامی حقوق محفوظ است
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  props: ['categories']
}
</script>


<style scoped>

</style>
