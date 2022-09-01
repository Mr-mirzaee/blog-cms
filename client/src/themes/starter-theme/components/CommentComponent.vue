<template>
  <div :class="{ 'd-flex flex-column align-items-end' : depth === 1 }">
    <div :class="{ 'col-11' : depth === 1 }">
      <div class="bg-light rounded box-shadow mb-3 p-3">
        <div class="row">
          <div class="col pt-2">
            <p class="mb-1">
              {{ comment.text }}
            </p>
            <div class="row">
              <div class="col">
                <div class="float-start pt-3"> <h6 class="card-subtitle mb-2 text-muted small"> {{ comment.user_name + ' ' + comment.user_family }} در <div class="d-inline-block ltr"> {{ getDate(comment.created_at) }} </div> </h6> </div>
                <div class="float-end">
                  <div v-if="user.status.loggedIn">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#commentModal" v-on:click.prevent="handleCommentButtonClick" :data-parent="comment.id">
                      پاسخ
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <CommentComponent v-for="cm in comment.sub_comments" v-bind:key="cm.id" :comment="cm" :depth="depth + 1"/>
    </div>
  </div>
</template>

<script>
  import $ from "jquery";
  import persianDate from "persian-date";

export default {
  name: 'CommentComponent',
  props: ['comment', 'depth'],
  data() {
    return {
      user: this.$store.getters["user/getDetails"]
    }
  },
  methods : {
    getDate(date) {
      return new persianDate(new Date(date)).format("L HH:mm");
    },
    handleCommentButtonClick(e) {
      let parentId = $(e.target).data('parent');
      $("#parent_id").val(parentId);
    }
  }
}
</script>

<style scoped>

</style>