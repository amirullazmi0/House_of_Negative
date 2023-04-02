@extends('admin.v_template')

@section('content')
<div class="container">
    <div class="category">
        <div class="pop mb-3 border shadow-sm">
            <h1>ALL CATEGORY</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <!-- TYPE CATEGORY -->
            @foreach ($category as $category)
            <div class="col-6">
                <a href="/admin/category/<?= $category->slug; ?>">
                    <div class="card border shadow-sm">
                        <div class="card-body">
                            <h2 class="text-center"><?= $category->name; ?></h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid gap-2 col-6 mx-auto p-3">
                                <?= $category->release->count(); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- TYPE TALENT -->
            @foreach ($talent as $talent)
            <div class="col-6">
                <a href="/admin/talent/<?= $talent->slug; ?>">
                    <div class="card border shadow-sm">
                        <div class="card-body">
                            <h2 class="text-center"><?= $talent->name; ?></h2>
                            <p style="background-color: rgb(189, 8, 8);color: white;border-color: transparent;border-radius: 50px;" class="text-center d-grid gap-2 col-6 mx-auto p-3">
                                <?= $talent->release->count(); ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection