<div>
    <h1>Recent Posts</h1>
    <div class="row offset-3">
            <div class="cs">
                <select class="select" value="form-select" wire:model.lazy="category">
                    <option hidden="true">Category</option>
                    <option selected disabled>Category</option>
                    <option value="all">All Category</option>
                    <option value="drama">Drama</option>
                    <option value="action">Action</option>
                    <option value="sweet">Sweet</option>
                    <option value="comedy">Comedy</option>
                    <option value="horror">Horror</option>
                </select>
                <input class="search" type="text" placeholder="Search" wire:model.lazy="search">
            </div>
            @if (session('message'))
                <div class="alert alert-success mt-5 text-center">{{ session('message') }}</div>
            @endif
    @foreach ($recentPosts as $rp)
        <div class="col-sm-4 mt-5">
            <div class="card rounded shadow-sm" id="card">
                <div class="card-header"><h4 class="mt-2 categ">{{$rp->category}}</h4></div>
                <div class="card-body rounded {{($rp->user->gender === 'male') ? 'male' : 'female'}}" id="card-body"><p style="font-size: 20px;">{{$rp->remarks}} <br><br><br>
                <h6 class="mt-5 underline" style="font-family: sans-serif">From: {{ $rp->user->name }}</h6></p></div>
                <div class="card-footer">
                <span class="time">posted at: {{ $rp->created_at->format('g:i A') }}</span><br>
                @role('admin')
                <a class="btn btn-primary" href="{{ url('editRecentPost', ['recentPost' => $rp->id]) }}">Update</a>
                <a class="btn btn-danger" href="{{ url('deleteRecentPost', ['recentPost' => $rp->id]) }}">Delete</a>
                @endrole
                </div>
            </div>
        </div>
    @endforeach
            @if($recentPosts->count() == 0)
                <h1 class="mt-5 text-center">
                    No Talks yet.
                </h1>
            @endif
    </div>
    {{$recentPosts->links()}}
</div>


<style>
    .row {
        text-align: center;
    }
    #card {
        min-height: 350px;
    }
    .male {
        background-color: blue;
        color: white;
        transition: all .2s ease-in-out;
    }
    .male:hover {
        background-color: #11338a;
        transform: scale(1.02);
    }
    .female {
        background-color: #700961;
        color: white;
        transition: all .2s ease-in-out;
    }
    .female:hover {
        background-color: #a3078c;
        transform: scale(1.02);
    }
    .underline {
        border-bottom: 1px solid white;
        border-top: 1px solid white;
        text-align: left;
    }
    .categ:first-letter{
        text-transform: uppercase;
    }
    
    .select {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
    .search {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
</style>