<template>
  <div class="card bg-light border-0">
    <div class="card-body">
      <div class="row">
        <div class="col-3 col-lg-2">
          <img :src="getImage(post.images)" class="img-fluid index-post-image rounded" :alt="post.slug">
        </div>
        <div class="col-9 col-lg-10 pt-2">
          <h5 class="card-title"> {{ post.title }} </h5>
          <h6 class="card-subtitle mb-2 text-muted small ltr"> {{ getDate(post.created_at) }} </h6>
          <h6 class="card-subtitle mb-2 text-muted small"> توسط <a href="#"> {{ post.user_name + ' ' + post.user_family }} </a> </h6>
        </div>
      </div>
      <p class="card-text mt-3" v-html="post.body"></p>
      <p class="form-text text-dark mb-0">
        <b> دسته‌بندی: </b>
        <span v-for="(category, i) in post.categories" v-bind:key="i"> <span v-if="i != post.categories.length-1"> {{ category }} - </span>  <span v-else> {{ category }} </span> </span>
      </p>
    </div>
    <div class="card-footer bg-white">
      <div class="float-start pt-1">
        <i class="bi bi-chat-left-text"></i> {{ post.comments_count }}
        <span class="mx-1"></span>
        <i class="bi bi-eye"></i> {{ post.view }}
      </div>
      <div class="float-end">
        <span class="badge bg-light text-dark mx-1" v-for="tag in post.tags" v-bind:key="tag"> # {{ tag }} </span>
      </div>
    </div>
  </div>
</template>

<script>
import persianDate from "persian-date";

export default {
  name: 'PostComponent',
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
</style>