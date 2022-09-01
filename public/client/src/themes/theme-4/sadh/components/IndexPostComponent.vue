<template>
  <div class="card bg-light border-0">
    <div class="leading-relaxed text-lg">
      <img :src="getImage(post.images)" class="img-fluid index-post-image rounded" :alt="post.slug">
      <h5 class="card-title mt-2"> {{ post.title }} </h5>
      <h6 class="card-subtitle mb-2 text-muted small"> توسط {{ post.user_name + ' ' + post.user_family }} در <span class="inline-block ltr"> {{ getDate(post.created_at) }} </span> </h6>
      {{ post.description }}
      <p class="form-text text-dark my-1">
        <b> دسته‌بندی: </b>
        <span v-for="(category, i) in post.categories" v-bind:key="i"> <span v-if="i != post.categories.length-1"> {{ category }} - </span>  <span v-else> {{ category }} </span> </span>
      </p>
    </div>
    <span class="inline-block h-1 w-10 rounded bg-indigo-500 my-3"></span>
  </div>
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
  .index-post-image {
    height: 80px;
    margin: 0 auto;
  }

  .ltr {
    direction: ltr;
  }
</style>
