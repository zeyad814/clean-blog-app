@extends('admin.layouts.master')


@section('admin-content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="" class="btn btn-warning">edit</a>
                            <form action="{{ route('category.destroy',$category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>
                      </tr>
                    @empty
                        <h1> there are no categories</h1>
                    @endforelse

                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection
