<template>
  <blockquote class="flex items-center justify-between w-full col-span-1 p-6 transition-all duration-200 custom-bgc rounded-lg md:flex-row hover:bg-white hover:shadow ease my-4">
    <img class="flex-shrink-0 object-cover w-24 h-24 bg-gray-300 rounded-full border border-solid"
         :src="getImage(post.images)"
         :alt="post.slug">
    <div class="w-full pr-8">
      <div class="relative">
        <p class="text-right text-gray-900">
          {{ post.title }}
        </p>
      </div>
      <h3 class="my-3 text-base font-medium leading-5 text-gray-800 truncate text-right">
        <span class="text-sm leading-5 text-gray-500 truncate"> توسط </span>
        {{ post.user_name + ' ' + post.user_family }}
        <span class="text-gray-500"> در </span>
        <span class="ltr inline-block">
          {{ getDate(post.created_at) }}
        </span>
      </h3>
      <p class="form-text text-dark mt-2 text-right">
        <span class="text-gray-500"> دسته‌بندی: </span>
        <span v-for="(category, i) in post.categories" v-bind:key="i"> <span v-if="i != post.categories.length-1"> {{ category }} - </span>  <span v-else> {{ category }} </span> </span>
      </p>

      <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
    </div>
  </blockquote>
</template>

<script>
import persianDate from "persian-date";

export default {
  name: 'IndexPostComponent',
  props: ['post'],
  methods : {
    getImage(image) {
      return process.env.VUE_APP_SERVER_URL + '/storage/' + image;
    },
    getDate(date) {
      return new persianDate(new Date(date)).format("L HH:mm");
    }
  }
}
</script>

<style scoped>
  .ltr {
    direction: ltr !important;
  }

  .custom-bgc {
    background-color: #efefef;
  }
</style>
