<div class="container text-center">
    <div class="row mb-5 mt-3">
        <div class="col-12">
            <h2><?=$data['Title']?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="<?=$data['Poster']?>" class="img-thumbnail" alt="<?=$data['Title']?>">
        </div>
        <div class="col-8 text-lg-start">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="fw-semibold fst-italic">Genre:</span> <?=$data['Genre']?></li>
                <li class="list-group-item"><span class="fw-semibold fst-italic">Released Year:</span> <?=$data['Year']?></li>
                <li class="list-group-item"><span class="fw-semibold fst-italic">Director:</span> <?=$data['Director']?></li>
                <li class="list-group-item"><span class="fw-semibold fst-italic">Actors:</span> <?=$data['Actors']?></li>
                <li class="list-group-item"><span class="fw-semibold fst-italic">Plot:</span> <?=$data['Plot']?></li>
            </ul>
        </div>
    </div>
</div>
