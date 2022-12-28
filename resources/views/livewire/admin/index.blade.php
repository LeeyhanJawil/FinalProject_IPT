<div>
    <h1 class="mt-2">Dashboard</h1>
    <div class="content">
            <div class="row mt-5 text-center">
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/recentPost" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-history text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Recent Talk</span>
                                        <span class="text-black" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/logs" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-book text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Total Logs</span><br>
                                        <span class="text-black" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/myPost" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-thumbs-o-up text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Your Posts</span><br>
                                        <span class="text-black" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card shadow">
                        <a href="/admin/users" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col">
                                        <i class="fa fa-users text-black mt-2" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-black float-right" id="text">Total Users</span><br>
                                        <span class="text-black" id="text2">{{ $users }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

</div>


<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
    .card-body {
        background-color: #25f7f4;
        height: 110px;
    }
    .card-body:hover {
        background-color: #80fffd;
    }
    #dash-icon {
        font-size: 60px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
    #text {
        font-size: 15px;
    }
    #text2 {
        opacity: 0.8;
        font-style: italic;
    }
</style>