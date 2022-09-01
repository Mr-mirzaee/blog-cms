<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="../assets/images/logo.jpg" class="d-inline-block align-top header-logo" alt="quera">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" :class="{ 'active': $route.path == '/' }" href="/"> خانه </a>
          </li>
          <li v-if="user.status.loggedIn">
            <a class="nav-link" :class="{ 'active': $route.path == '/profile' }" href="/profile"> پروفایل </a>
          </li>
          <li v-if="user.status.loggedIn">
            <a class="nav-link" href="/logout"> خروج </a>
          </li>
          <li v-if="!user.status.loggedIn" class="nav-item">
            <a class="nav-link" :class="{ 'active': $route.path == '/login' }" href="/login"> ورود </a>
          </li>
          <li v-if="!user.status.loggedIn" class="nav-item">
            <a class="nav-link" :class="{ 'active': $route.path == '/register' }" href="/register"> ثبت نام </a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control m-0 rounded-0 search-nav-input" id="search-input" type="search" placeholder="جستجو ..." aria-label="Search">
          <button class="btn btn-outline-success my-0 rounded-0 search-nav-btn pt-1" v-on:click.prevent="search"> جستجو </button>
        </form>
      </div>
    </div>
  </nav>
</template>

<script>
  import $ from "jquery";

  export default {
    name: 'Header',
    data() {
      return {
        user: this.$store.getters["user/getDetails"]
      }
    },
    methods : {
      search() {
        if($("#search-input").val()) {
          window.location.href = '/search/' + $("#search-input").val();
        } else {
          $("#search-input").addClass("is-invalid");
        }
      }
    }
  }
</script>

<style scoped>
  .header-logo {
    width: 35px;
    height: 35px;
  }

  .search-nav-input {
    height: 35px;
    border-radius: 0 5px 5px 0 !important;
  }

  .search-nav-btn {
    height: 35px;
    border-radius: 5px 0 0 5px !important;
  }
</style>
