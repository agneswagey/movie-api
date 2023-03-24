<div class="container text-center">
    <div class="row mb-3 mt-3">
        <div class="col-12">
            <h2><?=$data['title']?></h2>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 justify-content">
            <form action="/home/search" method="post">
                <div class="input-group mt-5">
                    <input type="text" name="keyword" class="form-control" placeholder="Title">
                    <button class="btn btn-primary" type="submit" id="button-search">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <?php
        if (isset($data['result'])) {
            foreach ($data['result'] as $row) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=$row['Poster']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$row['Title']?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?=$row['Year']?></h6>
                            <a href="/movie/<?=$row['imdbID']?>" class="btn btn-primary">View Detail</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } ?>
    </div>
</div>