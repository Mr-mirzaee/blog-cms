<template>
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"> خانه </a></li>
                            <li class="breadcrumb-item active" aria-current="page" v-if="post"> {{ post.title }} </li>
                        </ol>
                    </nav>
                    <div class="bg-light rounded box-shadow">
                        <PostComponent :post="post" v-if="post"/>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" v-if="!user.status.loggedIn">
                <div class="col-md-7 my-3">
                    <div class="bg-light rounded box-shadow text-center p-3">
                        برای ثبت نظر ابتدا وارد شوید
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" v-else>
                <div class="col-md-7">
                    <div class="text-center">
                        <button type="button" class="btn btn-sm btn-primary my-3" data-bs-toggle="modal" data-bs-target="#commentModal" v-on:click.prevent="handleCommentButtonClick">
                            ثبت نظر
                        </button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="mb-4" v-if="comments">
                        <CommentComponent v-for="comment in comments.data" v-bind:key="comment.id" :comment="comment" :depth="0"/>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="commentModalLabel"> نظر </h5>
                        <button type="button" id="modal-btn-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <form id="comment-form">
                            <input type="hidden" id="parent_id" name="parent_id" value="">
                            <input type="hidden" id="commentable_id" name="commentable_id" :value="post.id">
                            <input type="hidden" id="commentable_type" name="commentable_type" value="App\Models\Post">
                            <div class="my-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="متن را وارد نمایید" name="text" id="text"></textarea>
                                    <label for="text"> متن </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-sm btn-primary" v-on:click.prevent="saveComment"> ثبت </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PostComponent from "../components/PostComponent";
    import CommentComponent from "../components/CommentComponent";
    import $ from "jquery";

    export default {
        name: "Post",
        components: {
            PostComponent,
            CommentComponent
        },
        data() {
            return {
                user: this.$store.getters["user/getDetails"],
                slug: this.$route.params.slug,
                post: false,
                comments: false
            }
        },
        mounted() {
            this.getPost();
        },
        methods : {
            async getPost() {
                let glob = this;
                await this.$http.get(process.env.VUE_APP_SERVER_URL + '/api/posts/' + this.slug)
                    .then(function (response) {
                        glob.post = response.data.data;
                        glob.getComments()
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            },
            async getComments() {
                let glob = this;
                await this.$http.get(process.env.VUE_APP_SERVER_URL + '/api/post/comments/' + this.post.id)
                    .then(function (response) {
                        glob.comments = response.data;
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            },
            handleCommentButtonClick(e) {
                let parentId = $(e.target).data('parent');
                $("#parent_id").val(parentId);
            },
            async saveComment() {
                let glob = this;
                await this.$http.post(process.env.VUE_APP_SERVER_URL + '/api/comments', {
                    'commentable_id': Number($("#commentable_id").val()),
                    'commentable_type': $("#commentable_type").val(),
                    'parent_id': $("#parent_id").val(),
                    'post': glob.post.id,
                    'text': $("#text").val()
                }, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + glob.user.detail.token
                    }
                })
                .then(function () {
                    $("#modal-btn-close").click();
                    glob.getComments()
                })
                .catch(function (error) {
                    console.error(error);
                });
            }
        }
    }
</script>

<style>

</style>

<style lang="scss">

</style>
