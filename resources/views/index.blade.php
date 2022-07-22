@extends('master')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <div class="content-area">
        <div class="story-gallery">
            <div class="story story1">
                <img src="{{ asset('images/upload.png') }}" alt="">
                <p>Post Story</p>
            </div>
            <div class="story story2">
                <img src="{{ asset('images/member-1.png') }}" alt="">
                <p>Alison</p>
            </div>
            <div class="story story3">
                <img src="{{ asset('images/member-2.png') }}" alt="">
                <p>Jackson</p>
            </div>
            <div class="story story4">
                <img src="{{ asset('images/member-3.png') }}" alt="">
                <p>Samona</p>
            </div>
            <div class="story story5">
                <img src="{{ asset('images/member-4.png') }}" alt="">
                <p>John</p>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
            style="hi">
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="images/profile-pic.png" alt="">
                    <div>
                        <p>{{ auth()->user()->name ?? 'user name' }}</p>
                        <small>Public <i class="fas fa-caret-down"></i></small>
                    </div>
                </div>

                <div class="post-upload-textarea">
                    <textarea name="" placeholder="What's on your mind, Alex?" id="" cols="30" rows="3"></textarea>
                    <div class="add-post-links">
                        <a href="#"><img src="{{ asset('images/live-video.png') }}" alt="">Live Video</a>
                        <a href="#"><img src="{{ asset('images/photo.png') }}" alt="">Photo/Video</a>
                        <a href="#"><img src="{{ asset('images/feeling.png') }}" alt="">Feeling Activity</a>
                    </div>
                </div>
            </div>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="user-profile">
                            <img src="images/profile-pic.png" alt="">
                            <div>
                                <form action="{{ route('upstatus') }}"method="post"enctype="multipart/form-data">
                                    @csrf
                                    <p>{{ auth()->user()->name }}</p>
                                    <small>
                                        <select name="object" id="">
                                            <option value="1">công khai</option>
                                            <option value="2">bạn bè</option>
                                            <option value="3">chỉ mình tôi</option>
                                        </select>
                                        <i class="fas fa-caret-down"></i>
                                    </small>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="post-upload-textarea">
                            <textarea name="content" placeholder="What's on your mind, Alex?" id="" cols="30" rows="3"></textarea>
                            <div class="add-post-links">

                                <input type="file"name='image' >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary">Tải lên</input>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đống</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="status-field-container write-post-container">
            <div class="user-profile-box">
                <div class="user-profile">
                    <img src="{{ asset('images/profile-pic.png') }}" alt="">
                    <div>
                        <p> {{ auth()->user()->name ?? 'user name' }}</p>
                        <small>August 13 1999, 09.18 pm</small>
                    </div>
                </div>
                <div>
                    <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                </div>
            </div>
            <div class="status-field">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolores praesentium dicta
                    laborum nihil accusantium odit laboriosam, sed sit autem! <a href="#">#This_Post_is_Better!!!!</a>
                </p>
                <img src="{{ asset('images/feed-image-1.png') }}" alt="">

            </div>
            <div class="post-reaction">
                <div class="activity-icons">
                    <div><img src="{{ asset('images/like-blue.png') }}" alt="">120</div>
                    <div><img src="{{ asset('images/comments.png') }}" alt="">52</div>
                    <div><img src="{{ asset('images/share.png') }}" alt="">35</div>
                </div>
                <div class="post-profile-picture">
                    <img src="{{ asset('images/profile-pic.png') }} " alt=""> <i class=" fas fa-caret-down"></i>
                </div>
            </div>
        </div>
        <button type="button" class="btn-LoadMore" onclick="LoadMoreToggle()">Load More</button>
    </div>
    <style>
        .modal-backdrop {
            --bs-backdrop-bg: none;
        }

        .modal-backdrop {
            position: inherit;
        }

        .modal-content {
            margin-top: 170px;
        }

        .btn-primary {
            width: -webkit-fill-available;
        }
    </style>
@endsection
